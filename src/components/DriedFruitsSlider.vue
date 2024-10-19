<template>
    <div class="container py-4">
        <div class="heading">
            <h4>
                DRIED FRUITS
            </h4>
        </div>
        <swiper :autoplay="autoplay" :effect="'slide'" :speed="1500"
            :navigation="true" :modules="modules" :direction="'horizontal'" :rtl="true" 
            :breakpoints="{
                320: { slidesPerView: 2, spaceBetween: 5 },
                480: { slidesPerView: 2, spaceBetween: 10 },
                640: { slidesPerView: 3, spaceBetween: 10 },
                768: { slidesPerView: 4, spaceBetween: 10 },
                1024: { slidesPerView: 4, spaceBetween: 50 }
            }"
            class="mySwiper">
            <swiper-slide v-for="product in products" :key="product.id">
                <div class="product-card d-flex flex-column align-items-start text-start">
                    <img :src="product.image" alt="">
                    <div class="ps-2 d-flex flex-column text-start">
                        <small>{{ product.title }}</small>
                        <span>{{ product.subtitle }}</span>
                    </div>
                    <div class="icon d-flex align-items-center justify-content-between w-100">
                        <div class="call-action">
                            <ActionIcon />
                        </div>
                        <div class="quick-view text-center">
                            <QuickViewIcon @click="viewDetails(product)" />
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>

    <div class="banner-sec" >
        <img class="w-100" src="../assets/Images/BANNER.png" height="300" alt="">
        <h3>
            ATTOCK INTERNATIONAL DRY FRUITS & SPICES
        </h3>
        <div class="overlay"></div>
    </div>
    
</template>




<script setup>
import { ref, defineEmits, onMounted } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/autoplay';
import { Navigation, Autoplay } from 'swiper/modules';
import ActionIcon from './icons/ActionIcon.vue';
import QuickViewIcon from './icons/QuickViewIcon.vue';

// Modules for Swiper
const modules = ref([Navigation, Autoplay]);


// Autoplay configuration
const autoplay = {
    delay: 3500, // 3 seconds delay between slides
    disableOnInteraction: false // Keep autoplay running even after user interaction
};


// List of products
const products = ref([
    {
        id: 1,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'RAISIN',
        availability: 'In Stock',
        description: 'Raisins are dried grapes with a sweet, concentrated flavor and chewy texture. They are high in natural sugars, fiber, vitamins, and minerals, making them a convenient and nutritious snack or ingredient in various dishes.'
    },
    {
        id: 2,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'COCONUT',
        availability: 'In Stock',
        description: 'Coconut is a tropical fruit known for its hard, brown shell, white flesh, and refreshing water. Rich in healthy fats, fiber, and minerals, coconut is versatile, used in cooking, baking, and as a beverage.'
    },
    {
        id: 3,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'DATES',
        availability: 'In Stock',
        description: 'Dry dates are sweet, chewy fruits derived from dried ripe dates. They are rich in natural sugars, fiber, vitamins, and minerals, offering a healthy energy boost and making them a popular snack or ingredient in various dishes.'
    },
    {
        id: 4,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'APRICOT',
        availability: 'In Stock',
        description: 'Dried apricots are golden-orange fruits that have been dehydrated to remove their moisture content. They retain the sweet, tangy flavor of fresh apricots and are rich in fiber, vitamins, and antioxidants, making them a convenient and nutritious snack.'
    },
    {
        id: 5,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'FIG',
        availability: 'In Stock',
        description: 'Almonds Chilghoza, a delightful fusion of two premium nuts, offer a tantalizing blend of flavors. Combining the rich, buttery taste of almonds with the sweet, piney essence of Chilghoza pine nuts, they create a gourmet experience that satisfies both savory and sweet cravings.'
    },
]);


// Emit an event to open the modal with the selected product data
const emit = defineEmits(['openModal']);
function viewDetails(product) {
    emit('openModal', product);
}

onMounted(async () => {
    const copra = await import('../assets/Images/kishmish-2.png')
    products.value[0].image = copra.default;

    const damson = await import('../assets/Images/coconut.png')
    products.value[1].image = damson.default;

    const driedDates = await import('../assets/Images/dry-dates.png')
    products.value[2].image = driedDates.default;

    const driedDates1 = await import('../assets/Images/dry-apricot.png')
    products.value[3].image = driedDates1.default;

    const damson1 = await import('../assets/Images/dry-fig.png')
    products.value[4].image = damson1.default;

})

</script>


<style scoped>
.banner-sec {
    position: relative;
    overflow: hidden;
}

.overlay {
    position: absolute;
    height: 100%;
    width: 100%;
    background-color: #00000066;
    top: 0;
    left: 0;
}

.banner-sec img {
    object-fit: cover;
}

.banner-sec h3 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 4vw;
    font-weight: 700;
    text-align: center;
    color: rgb(148, 220, 40);
    z-index: 2;
}
</style>