<template>
    <div id="carouselExampleFade" ref="carousel" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/Images/banner-home-4.png" class="d-block w-100" alt="...">
                <div class="slider-text-1">
                    <div class="anim">
                        <h1> 
                            <span>Welcome to</span>
                            <br>
                            Dry Fruit & Nuts
                        </h1>
                        <h5>
                            Having a best quality dried fruits
                        </h5>
                        <div class="d-flex align-items-center">
                            <button class="about-btn py-2 px-4">
                                <RouterLink to="/about" class="btn-link">
                                    About
                                </RouterLink>
                            </button>
                            <button class="contact-btn py-2 px-4 ms-3">
                                <RouterLink to="/contact" class="btn-link-2">
                                    Contact
                                </RouterLink>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="carousel-item">
                <img src="../assets/Images/banner-home-3.png" class="d-block w-100" alt="...">
                <div class="slider-text-2 text-end">
                    <div class="anim-2">
                        <h2>
                            Spices & Herbs
                        </h2>
                        <button class="about-btn py-2 px-4">Know More</button>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="carousel-item">
                <img src="../assets/Images/banner-home-5.png" class="d-block w-100" alt="...">
                <div class="slider-text-3">
                    <div class="anim">
                        <h1>
                            <span>Service 3</span>
                            <br>
                            Dried Organic Products
                        </h1>
                        <button class="about-btn py-2 px-4">Know More</button>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="carousel-item">
                <img src="../assets/Images/banner-home-1.png" class="d-block w-100" alt="...">
                <div class="slider-text-4">
                    <div class="anim">
                        <h1>
                            <span>Service 3</span>
                            <br>
                            Dried Organic Products
                        </h1>
                        <button class="about-btn py-2 px-4">Know More</button>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="carousel-item">
                <img src="../assets/Images/banner-home-2.png" class="d-block w-100" alt="...">
                <div class="slider-text-5">
                    <div class="anim">
                        <h1>
                            <span>Service 3</span>
                            <br>
                            Dried Organic Products
                        </h1>
                        <button class="about-btn py-2 px-4">Know More</button>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>

        <!-- Indicators -->
        <div class="carousel-indicators d-flex align-items-center justify-content-center">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="4"
                aria-label="Slide 5"></button>

        </div>
    </div>


    <div class="hero-section-bottom py-3">
        <div class="container">
            <div class="row gx-5 gap-5">
                <div class="col-12 col-md d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/almond-s.png"
                            width="60" alt="">
                        <span>Almonds</span>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/cashew-s.png"
                            width="60" alt="">
                        <span>Cashew</span>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/coconut-s.png"
                            width="60" alt="">
                        <span>Coconut</span>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/cumin-s.png"
                            width="60" alt="">
                        <span>Cumin</span>
                    </div>
                </div>

                <div class="col-12 col-md d-flex align-items-center justify-content-between w-100 mt-md-0">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/black-pepper-s.png"
                            width="60" alt="">
                        <span>Black Pepper</span>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/cardimon-s.png" width="60"
                            alt="">
                        <span>Cardimom</span>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/cloves-s.png" width="60"
                            alt="">
                        <span>Cloves</span>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="rounded-5"
                            src="../assets/Images/herbs-s.png"
                            width="60" height="60" alt="">
                        <span>Herbs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>




<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const carousel = ref(null);
const autoplayInterval = ref(null);
const autoplaySpeed = 5000; // Autoplay speed in milliseconds

const startAutoplay = () => {
    autoplayInterval.value = setInterval(() => {
        const carouselInstance = bootstrap.Carousel.getInstance(carousel.value);
        carouselInstance.next();
    }, autoplaySpeed);
};

const stopAutoplay = () => {
    if (autoplayInterval.value) {
        clearInterval(autoplayInterval.value);
        autoplayInterval.value = null;
    }
};

const handleSlideChange = () => {
    const activeItem = carousel.value.querySelector('.carousel-item.active');
    const textElements = activeItem.querySelectorAll('.slider-text-1, .slider-text-2, .slider-text-3, .slider-text-4, .slider-text-5');
    textElements.forEach(el => {
        el.style.animation = 'none';
        // Trigger reflow to restart animation
        el.offsetHeight;
        el.style.animation = null;
    });
};

onMounted(() => {
    const carouselInstance = new bootstrap.Carousel(carousel.value, {
        interval: false, // Disable Bootstrap's own autoplay
        ride: false
    });
    startAutoplay();
    carousel.value.addEventListener('slide.bs.carousel', handleSlideChange);
});

onBeforeUnmount(() => {
    stopAutoplay();
    if (carousel.value) {
        carousel.value.removeEventListener('slide.bs.carousel', handleSlideChange);
    }
});
</script>





<style scoped>
.carousel-inner {
    height: 86vh;
}

.carousel-item img {
    height: 86vh;
    width: 100%;
    object-fit: cover
}

.carousel-item {
    position: relative;
    z-index: -2;
}

.carousel-indicators {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 0;
    left: -10%;
    width: fit-content;
    transform: translate(-15%, 0%);
}

.carousel-indicators button {
    border-radius: 50%;
    height: 10px;
    width: 10px;
    border: 2px solid var(--header-bg-main--);
    background-color: transparent;
    margin: .3rem 0;
}

.carousel-indicators button.active {
    background-color: var(--header-bg-main--);
    transition: all ease .5s;
    height: 15px;
    width: 15px;
}

.slider-text-1 {
    position: absolute;
    z-index: 99;
    top: 50%;
    left: 0%;
    transform: translate(35%, -50%);
    overflow: hidden;
}

.slider-text-2 {
    position: absolute;
    z-index: 99;
    top: 50%;
    right: 35%;
    transform: translate(50%, -50%);
    overflow: hidden;
}

.slider-text-3 {
    position: absolute;
    z-index: 99;
    top: 50%;
    left: 0%;
    transform: translate(27%, -50%);
    overflow: hidden;
}

.slider-text-4 {
    position: absolute;
    z-index: 99;
    top: 50%;
    right: 35%;
    transform: translate(50%, -50%);
    overflow: hidden;
}

.slider-text-5 {
    position: absolute;
    z-index: 99;
    top: 50%;
    left: 0%;
    transform: translate(27%, -50%);
    overflow: hidden;
}

@media (max-width:776px) {
    .slider-text-1 {
        width: 100%;
        position: absolute;
        z-index: 99;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
        padding: 0 4rem;
    }

    .slider-text-2 {
        width: 100%;
        position: absolute;
        z-index: 99;
        top: 50%;
        right: 0%;
        transform: translate(-2%, -50%);
        overflow: hidden;
        padding: 0 4rem;
    }

    .slider-text-3 {
        width: 100%;
        position: absolute;
        z-index: 99;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
        padding: 0 4rem;
    }

    .slider-text-4 {
        width: 100%;
        position: absolute;
        z-index: 99;
        top: 50%;
        right: 0%;
        transform: translate(-2%, -50%);
        overflow: hidden;
        padding: 0 4rem;
    }

    .slider-text-5 {
        width: 100%;
        position: absolute;
        z-index: 99;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
        padding: 0 4rem;
    }
}

span {
    font-size: clamp(30px, 2vw, 45px);
    color: #fff;
    letter-spacing: 2px;
}

h1 {
    font-size: clamp(45px, 6vw, 60px);
    color: var(--header-bg-main--);
}

h2 {
    font-size: clamp(35px, 4vw, 50px);
    color: #fff;
}

.overlay {
    background: linear-gradient(to left, transparent, #00000000, #000000c1);
    position: absolute;
    z-index: 90;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}

.carousel-control-prev-icon {
    background-color: var(--header-bg-main--);
    border-radius: 50%;
}

.carousel-control-prev,
.carousel-control-next {
    opacity: 1
}

.carousel-control-next-icon {
    background-color: var(--header-bg-main--);
    border-radius: 50%;
}

h5 {
    color: #fff;
}

.about-btn {
    background-color: var(--header-bg-main--);
    color: #fff;
    font-weight: 700;
    font-size: 16px;
    border: none;
}

.contact-btn {
    font-weight: 700;
    font-size: 16px;
    border: none;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(100%);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        transform: translateX(100%);
    }

    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.anim,
.anim-2 {
    opacity: 0;
    animation-duration: 1.3s;
    animation-fill-mode: forwards;
}

.carousel-item.active .anim {
    animation-name: fadeInUp;
}

.carousel-item.active .anim-2 {
    animation-name: fadeInRight;
}

.hero-section-bottom span {
    color: #000;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    text-align: center
}
</style>
