<script setup>
import WhatsappIcon from './icons/WhatsappIcon.vue';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ref, onUnmounted, onMounted } from 'vue';
import { RouterLink } from 'vue-router';

const navbarCollapse = ref(null);
const navbarToggler = ref(null);

const handleClickOutside = (event) => {
    if (navbarCollapse.value && navbarToggler.value) {
        const isClickInside = navbarCollapse.value.contains(event.target) || navbarToggler.value.contains(event.target);
        const isNavbarExpanded = navbarToggler.value.getAttribute('aria-expanded') === 'true';

        if (!isClickInside && isNavbarExpanded) {
            navbarToggler.value.click(); // This will trigger the collapse
        }
    }
};

onMounted(() => {
    document.addEventListener('click', handleClickOutside);
});

onUnmounted(() => {
    document.removeEventListener('click', handleClickOutside);
});


gsap.registerPlugin(ScrollTrigger);


// const isOpen = ref(false);

// const toggleMenu = () => {
//     isOpen.value = !isOpen.value;

//     const duration = 0.3; // Animation duration

//     if (isOpen.value) {
//         gsap.to('#myPath:nth-child(1)', { duration: duration, y: 8, rotation: 45 });
//     } else {
//         gsap.to('#myPath:nth-child(1)', { duration: duration, y: 0, rotation: 0 });

//     }
// };


onMounted(() => {
    gsap.to(".navbar", {
        backgroundColor: "#fff",
        color: "#000",
        scrollTrigger: {
            scroller: 'body',
            trigger: '.navbar',
            start: 'top -5%',
            end: 'top 65%',
            scrub: 1.3,
        }
    })

    gsap.to(".nav-link", {
        color: "#000",
        scrollTrigger: {
            scroller: 'body',
            trigger: '.nav-link',
            start: 'top -3%',
            end: 'top 65%',
            scrub: true,
        }
    })

    gsap.to("#mysvg", {
        fill: "#000", // Change the fill color
        scrollTrigger: {
            scroller: 'body',
            trigger: '#mysvg', // Target the SVG element
            start: 'top -3%',
            end: 'top 65%',
            scrub: true
        }
    });
})
</script>



<template>
    <div>
        <div class="nav-top-layer d-none d-md-block py-1">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="d-flex gap-3">
                    <div>
                        <small>
                            +971 56 465 7950
                        </small>
                    </div>
                    <div>
                        <small>
                            info@attockinternational.com
                        </small>
                    </div>
                </div>
                <div>
                    <small>
                        Welcome To Our Company
                    </small>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container d-flex align-items-center justify-content-between">
                <router-link class="navbar-brand py-0" to="/">
                    <img src="../assets/Images/logo.png" width="80px" alt="Logo">
                </router-link>

                <button ref="navbarToggler" class="navbar-toggler"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg id="mysvg" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
                            <path class="myPath" fill="#5BE027" stroke="#5BE027" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M4 8h24M4 16h24M4 24h24" />
                        </svg>
                    </span>
                </button>

                <div ref="navbarCollapse" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <router-link class="nav-link" aria-current="page" to="/">
                                Home
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/about">
                                About Us
                            </router-link>
                        </li>

                        <li class="nav-item" id="products">
                            <router-link class="nav-link" to="/allProducts">
                                Products
                            </router-link>

                            <ul class="product-dropdown py-2 px-4">
                                <router-link class="dropdown-item" to="/nuts">
                                    Dry Fruits
                                </router-link>
                                <hr class="m-0">
                                <router-link class="dropdown-item" to="/spices">
                                    Spices
                                </router-link>
                                <hr class="m-0">
                                <router-link class="dropdown-item" to="/herbs">
                                    Herbs
                                </router-link>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/services">
                                Services
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/contact">
                                Contact Us
                            </router-link>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-block">
                    <WhatsappIcon />
                </div>
            </div>
        </nav>
    </div>
</template>



<style scoped>
.nav-top-layer {
    position: fixed;
    z-index: 9999;
    width: 100%;
    background-color: var(--header-bg-main--);
    color: #fff;
}

button {
    border: none;
}

.navbar-toggler:focus {
    outline: none !important;
    border: none !important;
}

.navbar-collapse {
    flex-grow: 0;
}

.navbar-toggler-icon {
    background-image: none;
}

small {
    font-size: 12px
}

.navbar {
    position: fixed;
    z-index: 9999;
    width: 100%;
    top: 32px;
    background-color: #00000058;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

@media (max-width: 766px) {
    .navbar {
        top: 0;
    }
}

.dry-fruits {
    font-size: 16px;
    cursor: pointer;
    overflow: hidden;
}

/* .dry-fruits-list {
    height: 10px;
    transition: all ease-in-out .4s;
    opacity: -1;
    pointer-events: none
}

.dry-fruits:hover .dry-fruits-list {
    height: 140px;
    opacity: .8;
    pointer-events: all
} */
</style>