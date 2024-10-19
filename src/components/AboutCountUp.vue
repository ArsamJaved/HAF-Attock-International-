<script setup>
import { ref, onMounted } from "vue";

const productDelivered = ref(0);
const happyClients = ref(0);
const trustedSupplier = ref(0);
const countriesWorldwide = ref(0);

const targetProductDelivered = 200;
const targetHappyClients = 140;
const targetTrustedSupplier = 35;
const targetCountriesWorldwide = 20;

const duration = 3000;
let start = null;

function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;

    productDelivered.value = Math.min(Math.floor(progress / duration * targetProductDelivered), targetProductDelivered);
    happyClients.value = Math.min(Math.floor(progress / duration * targetHappyClients), targetHappyClients);
    trustedSupplier.value = Math.min(Math.floor(progress / duration * targetTrustedSupplier), targetTrustedSupplier);
    countriesWorldwide.value = Math.min(Math.floor(progress / duration * targetCountriesWorldwide), targetCountriesWorldwide);

    if (progress < duration) {
        window.requestAnimationFrame(step);
    }
}

function animateNumbers() {
    start = null; // Reset the start time for animation
    window.requestAnimationFrame(step);
}

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function scrollEventHandler() {
    const container = document.querySelector('.count-up');
    if (isInViewport(container)) {
        animateNumbers();
        window.removeEventListener('scroll', scrollEventHandler);
    }
}

onMounted(() => {
    window.addEventListener('scroll', scrollEventHandler);
});
</script>



<template>
    <section>
        <div class="container">
            <div class="count-up d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <div id="product-delivered">
                    <h1>
                        {{ productDelivered }}+
                    </h1>
                    <h5>
                        PRODUCT DELIVERED
                    </h5>
                </div>

                <div id="happy-clients">
                    <h1>
                        {{ happyClients }}+
                    </h1>
                    <h5>
                        HAPPY CLIENTS
                    </h5>
                </div>

                <div id="trusted-suppliers">
                    <h1>
                        {{ trustedSupplier }}+
                    </h1>
                    <h5>
                        TRUSTED SUPPLIER
                    </h5>
                </div>

                <div id="countries-worldwide">
                    <h1>
                        {{ countriesWorldwide }}+
                    </h1>
                    <h5>
                        COUNTRIES WORLDWIDE
                    </h5>
                </div>
            </div>
        </div>

        <div class="brief my-5">
                <img class="rounded-5" src="../assets/Images/banner-allproducts.png" alt="">
                <div class="brief-card p-2 p-lg-5 d-flex align-items-center justify-content-center flex-column text-center">
                    <h2 class="text-center">
                        Why Should <br> You <br> Choose Us ? 
                    </h2>
                    <p>
                        We travel, meet and build strong relationships with our providers and manage to get you the best-in-class products, at the most competitive prices and with an outstanding service.
                    </p>
                </div>
                <div class="overlay"></div>
            </div>
    </section>
</template>


<style scoped>
.count-up {
    gap: 20px;
    margin-top: 50px;
}

#product-delivered,
#happy-clients,
#trusted-suppliers,
#countries-worldwide {
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    font-size: clamp(2.5rem, 4vw, 3rem);
    font-weight: 400;
    color: var(--header-bg-main--);
}

h2 {
    font-size: clamp(1.5rem, 3vw, 2.5rem);
}

h5 {
    font-weight: 400;
    color: #4d4d4d;
}

.brief {
    background-image: url('../assets/Images/main-slider-3.png');
    height: 30rem;
    width: 100%;
    position: relative;
    background-size: cover;
}

.brief img {
    height: 100%;
    width: 65%;
    object-fit: cover;
}

.overlay {
    height: 100%;
    width: 100%;
    background: linear-gradient(to left, #ffffff00, #ffffff46, #ffffff86, #fff);
    position: absolute;
    top: 0;
    left: 0;
}

.brief-card {
    background-color: #02a14fa7;
    width: 30%;
    position: absolute;
    top: 0%;
    right: 0%;
    transform: translate(-50%, 5%);
    z-index: 9;
    line-height: 2;
    color: #fff;
}

@media (max-width:800px) {
    .brief-card {
        height: 100%;
        width: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
}
</style>