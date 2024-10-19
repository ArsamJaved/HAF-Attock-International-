<script setup>
import OtherPageHeader from './OtherPageHeader.vue'
import ImportExport from './icons/ImportExportIcon.vue'
import ProductTagIcon from './icons/ProductTagIcon.vue'
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { onMounted } from 'vue';
import { computed } from 'vue';

gsap.registerPlugin(ScrollTrigger)

const servicesArray = computed(()=> "SERVICES".split(''));
const qualityArray = computed(()=> "QUALITY".split(''));



onMounted(() => {
    gsap.to('.char', {
        y: 0,
        opacity: 1,
        duration: 2,
        stagger: .3,
    })

    gsap.to('.char-2', {
        y: 0,
        opacity: 1,
        duration: 1.3,
        stagger: .3,
        scrollTrigger: {
            scroller: 'body',
            trigger: ".char-2",
            start: 'top 140%',
            end: 'top 45%',
        }
    })
})
</script>



<template>
    <OtherPageHeader />
    <section class="services-section py-5">
        <h1 class="heading-text pt-4">
            <span v-for="(char, index) in servicesArray" :key="index" class="char" >
                {{ char }}
            </span>
        </h1>
        <div class="container py-5">
            <h1 class="text-capitalize text-center">
                The food trading company
                that you need
            </h1>

            <div class="row g-0 pt-5 pb-3">
                <div class="col-12 col-md-4">
                    <img
                        src="../assets/Images/coconut.png"
                        alt="">
                </div>

                <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center
                    text-center border border-1 px-3 py-5">
                    <ImportExport />
                    <h4 class="pt-4 pb-2">
                        IMPORT/EXPORT
                    </h4>
                    <p>
                        We will be your external Export Department, while you will just have to be focused in selling.
                    </p>
                </div>

                <div class="col-12 col-md-4">
                    <img
                        src="../assets/Images/red-pepper-2.png" alt="">
                </div>
            </div>

            <div class="row g-0 pt-5">
                <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center
                    text-center border border-1 h-100 py-5 px-3">
                    <ProductTagIcon />
                    <h4 class="pt-4 pb-2">
                        Different products in one loading
                    </h4>

                    <p>
                        We also offer you the service of consolidating different products in the same loading point.
                    </p>
                </div>

                <div class="col-12 col-md-4 text-center">
                    <img
                        src="../assets/Images/walnuts.png"
                        alt="">
                </div>

                <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center
                    text-center border border-1 h-100 py-5 px-3">
                    <ImportExport />
                    <h4 class="pt-4 pb-2">
                        Packaging ready to sell
                    </h4>

                    <p>
                        Labels, bar codes, packaging and everything that you require to get the products in your
                        destination ready to sell.
                    </p>
                </div>
            </div>

            <div class="quality text-center pt-5">
                <h1 class="heading-text">
                    <span v-for="(quality, index) in qualityArray" :key="index" class="char-2">
                        {{ quality }}
                    </span>
                </h1>

                <h2>
                    Quality and Food Safety
                </h2>

                <h2>
                    Certificates
                </h2>

                <p>
                    In Mesfood Trading we are very concerned with the quality of all products that we sell, as we are <br class="d-none d-md-block">
                    sure that this is one of the keys to achieve our customers satisfaction. That is why the vast <br class="d-none d-md-block">
                    majority of products that we offer are guaranteed with Quality and Food Safety Certificates such as: <br class="d-none d-md-block">
                    BRC, IFS, ISO, HACCP, Kosher and Halal Certificates, among others
                </p>
            </div>
        </div>
    </section>
</template>



<style scoped>

.heading-text {
    text-align: center;
    overflow: hidden;
}

.heading-text span {
    font-size: clamp(50px, 12vw, 200px);
    color: var(--second-main-color--);
    letter-spacing: 15px;
    font-weight: 800;
     overflow: hidden;
}

img {
    object-fit: cover;
}
</style>