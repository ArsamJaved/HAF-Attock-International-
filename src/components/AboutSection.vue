<script setup>
import OtherPageHeader from './OtherPageHeader.vue'
import GlobeIcon from './icons/GlobeIcon.vue';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { onMounted } from 'vue';
import { computed } from 'vue';
import { ref } from 'vue';
import AboutCountUp from './AboutCountUp.vue'


gsap.registerPlugin(ScrollTrigger)

const aboutUsArray = computed(() => "ABOUT US".split(''));


onMounted(() => {
    gsap.to('.char', {
        y: 0,
        opacity: 1,
        duration: 1.4,
        stagger: .3,
    })
})



const images = ref([
    '',
    '',
    '',
    ''
]);

const imageText = ref([
    {
        id: 1,
        heading: 'PRODUCTS',
        subHeading: 'DEVELOPMENT',
        description: 'Explore our diverse collection of premium dry fruits and aromatic spices. From rich almonds to exotic saffron, each product is chosen for its quality and flavor, perfect for enhancing your culinary creations.'
    },
    {
        id: 2,
        heading: 'SERVICES',
        subHeading: 'CONSULTING',
        description: 'We offer fast delivery, secure online transactions, and exceptional customer support to ensure your satisfaction with every purchase of our premium dry fruits and spices.'
    },
    {
        id: 3,
        heading: 'TEAM',
        subHeading: 'EXPERTS',
        description: 'Our experienced team is dedicated to sourcing and delivering the highest quality dry fruits and spices. We prioritize customer satisfaction through exceptional service and product excellence, ensuring a delightful shopping experience.'
    },
    {
        id: 4,
        heading: 'CONTACT',
        subHeading: 'CONNECT WITH US',
        description: 'Feel free to reach out to us for any inquiries or assistance regarding our premium dry fruits and spices. We are here to help ensure your satisfaction and provide the best shopping experience possible.'
    }
]);

onMounted (async () => {
    const banner1 = await import('../assets/Images/banner-dryfruits.png')
    images.value[0] = banner1.default;

    const banner2 = await import('../assets/Images/banner-spices.png')
    images.value[1] = banner2.default;

    const banner3 = await import('../assets/Images/banner-kishmish.png')
    images.value[2] = banner3.default;

    const banner4 = await import('../assets/Images/main-slider-2.png')
    images.value[3] = banner1.default;
})

const hoveredImageIndex = ref(null);

const hoverImage = (index) => {
    hoveredImageIndex.value = index;
};

const leaveImage = () => {
    hoveredImageIndex.value = null;
};


</script>

<template>
    <OtherPageHeader />
    <section class="about-section py-5">
        <div class="container py-5">
            <h1 class="about-heading">
                <span v-for="(char, index) in aboutUsArray" :key="index" class="char">
                    {{ char }}
                </span>
            </h1>

            <div class="d-flex flex-column flex-md-row align-items-center gap-4 text-center">
                <div class="w-100">
                    <h2 class="pb-4">
                        We find the best food products from around the world and we bring them to you.
                    </h2>

                    <p>
                        Mesfood Trading is a Spanish company specialized in marketing a wide range of food products, not
                        only from Spain, but also from many other countries such as: Holland, Egypt, China, Ecuador,
                        Greece,
                        Peru, etc, to different markets around the world, being the main customers wholesalers,
                        retailers
                        and importers-distributors, among others, located in the United States, Canada, Latin America,
                        Australia and Arab Countries.
                    </p>
                </div>
                <GlobeIcon />
            </div>
        </div>

        <div class="image-container pt-5 mt-5">
            <div v-for="(image, index) in images" :key="index" :class="['about-img-effect', hoveredImageIndex === index ? 'hovered' :
                hoveredImageIndex !== null ? 'not-hovered' : '']" @mouseover="hoverImage(index)"
                @mouseleave="leaveImage" :style="{ backgroundImage: `url(${image})` }">
                <div class="image-text-container">
                    <div class="image-text-1">
                        <h3>
                            {{ imageText[index].heading }}
                        </h3>
                        <h6>
                            {{ imageText[index].subHeading }}
                        </h6>
                    </div>
                    <div class="image-text-2">
                        <p class="img-para">
                            {{ imageText[index].description }}
                        </p>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>

        <AboutCountUp />
    </section>
</template>


<style scoped>
.about-section {
    width: 100%;

}

.about-heading {
    overflow: hidden;
    text-align: center;
}

/* .char {
    display: inline-block;
    transform: translateY(200%);
    opacity: -1;
} */

h1 span{
    font-size: clamp(50px, 12vw, 200px);
    color: var(--header-bg-main--);
    font-weight: 800;
    letter-spacing: 15px;
}

h2 {
    font-size: clamp(28px, 3vw, 37px);
}

h5 {
    position: relative;
    display: inline-block;
    padding-bottom: 5px;
    margin-bottom: 10px;
    width: 100%;
}

h5::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -3%;
    width: 30%;
    border-bottom: 2px solid rgb(5, 179, 17);
}

.image-container {
    display: flex;
    width: 100%;
}

@media (max-width: 1200px) {
    .image-container {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .about-img-effect {
        height: 200px !important;
        transition: all ease 0.5s;
        width: 100% !important;
    }

    .hovered {
        height: 400px !important;
    }

    .not-hovered {
        height: 200px !important;
    }

}

.about-img-effect {
    height: 500px;
    transition: all ease 0.5s;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    position: relative;
}

.hovered {
    width: 60%;
}

.not-hovered {
    width: 30%;
}

.image-container .about-img-effect:not(.hovered):not(.not-hovered) {
    width: 25%;
}

.hovered .image-text-1 {
    top: 10%;
    transition: all ease .4s;
}

.hovered .image-text-2 {
    top: 15%;
    transition: all ease .4s;
}

.hovered .img-para {
    opacity: 1;
    transition: all ease 2s;
}


.img-para {
    opacity: 0;
    top: 0%;
    transform: translate(0%, 65%);
}

.image-text-1 {
    position: absolute;
    top: 43%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    z-index: 9;
    text-align: center
}

.image-text-2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    z-index: 9;
    text-align: center;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #00000082;
}
</style>