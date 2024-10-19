<template>
    <div class="container">
        <div class="row g-0 gap-5 py-5">
            <div class="col-12 col-lg">
                <div class="d-flex gap-3">
                    <div class="about py-4 px-3 w-100">
                        <PrivacyIcon />
                        <h5 class="pt-3 pb-1">
                            Privacy & Security
                        </h5>

                        <p>
                            Secure transactions, encrypted data, and strict privacy policies for protection.
                        </p>
                    </div>

                    <div class="about py-4 px-3 w-100">
                        <CommissionIcon />
                        <h5 class="pt-3 pb-1">
                            No Commission
                        </h5>

                        <p>
                            Buy dry fruits and spices with no commission fees, save more!
                        </p>
                    </div>
                </div>

                <div class="d-flex gap-3 mt-3">
                    <div class="about py-4 px-3 w-100">
                        <LocationIcon />
                        <h5>
                            Various Location
                        </h5>

                        <p>
                            Premium dry fruits and spices from various global locations.
                        </p>
                    </div>

                    <div class="about py-4 px-3 w-100">
                        <ViewIcon />
                        <h5>
                            View Products
                        </h5>

                        <p>
                            View our products in high resolution images
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 about-card text-white px-4 px-md-5 py-3 d-flex flex-column
             align-items-start justify-content-center">
                <h2>
                    About Our Brand
                </h2>

                <hr class="w-25">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-1 mx-1 active" id="about-tab" data-bs-toggle="tab"
                            data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane"
                            aria-selected="true">
                            <span>ABOUT US</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-1 mx-1" id="mission-tab" data-bs-toggle="tab"
                            data-bs-target="#mission-tab-pane" type="button" role="tab" aria-controls="mission-tab-pane"
                            aria-selected="false">
                            <span>OUR MISSION</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-1 mx-1" id="goals-tab" data-bs-toggle="tab"
                            data-bs-target="#goals-tab-pane" type="button" role="tab" aria-controls="goals-tab-pane"
                            aria-selected="false">
                            <span>OUR GOALS</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel"
                        aria-labelledby="about-tab" tabindex="0">
                        <p>
                            Welcome to Attock International, your trusted source for premium dry fruits and spices. We strive to offer the highest quality products and exceptional customer service.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="mission-tab-pane" role="tabpanel" aria-labelledby="mission-tab"
                        tabindex="0">
                        <p>
                            Our mission is to provide premium quality dry fruits and spices while ensuring customer satisfaction through exceptional service and product excellence.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="goals-tab-pane" role="tabpanel" aria-labelledby="goals-tab"
                        tabindex="0">
                        <p>
                            Our goals include delivering top-notch quality dry fruits and spices, fostering customer satisfaction, and promoting a seamless shopping experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="heading">
            <h4>
                NUTS
            </h4>
        </div>
        <swiper :slidesPerView="4" :spaceBetween="60" :navigation="true" :modules="modules" :breakpoints="{
            320: { slidesPerView: 2, spaceBetween: 5 },
            480: { slidesPerView: 2, spaceBetween: 10 },
            640: { slidesPerView: 3, spaceBetween: 10 },
            768: { slidesPerView: 4, spaceBetween: 10 },
            1024: { slidesPerView: 4, spaceBetween: 30 }
        }" class="mySwiper">
            <swiper-slide v-for="product in products" :key="product.id">
                <div class="d-flex flex-column align-items-start">
                    <img :src="product.image" alt="">
                    <div class="ps-2 d-flex flex-column text-start">
                        <small>{{ product.title }}</small>
                        <span>{{ product.subtitle }}</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between w-100">
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
</template>




<script setup>
import { ref, defineEmits, onMounted } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import { Navigation } from 'swiper/modules';
import ActionIcon from './icons/ActionIcon.vue';
import QuickViewIcon from './icons/QuickViewIcon.vue';
import PrivacyIcon from './icons/PrivacyIcon.vue';
import CommissionIcon from './icons/CommissionIcon.vue';
import LocationIcon from './icons/LocationIcon.vue';
import ViewIcon from './icons/ViewIcon.vue';

// Modules for Swiper
const modules = ref([Navigation]);


// List of products
const products = ref([
    {
        id: 1,
        image: '',
        title: 'NUTS',
        subtitle: 'ALMOND (Karnels)',
        availability: 'In Stock',
        description: 'Unshelled almonds are raw, nutrient-rich nuts encased in their hard, protective shells. They offer a fresh, natural flavor and are rich in protein, fiber, healthy fats, and essential vitamins.'
    },
    {
        id: 2,
        image: '',
        title: 'NUTS',
        subtitle: 'ALMOND (in-shell))',
        availability: 'In Stock',
        description: 'Shelled almonds are raw or roasted nuts with their hard outer shell removed. They are nutrient-dense, offering a convenient, tasty source of protein, fiber, healthy fats, and essential vitamins.'
    },
    {
        id: 3,
        image: '',
        title: 'NUTS',
        subtitle: 'CASHEW',
        availability: 'In Stock',
        description: 'Cashews are creamy, kidney-shaped nuts with a rich, buttery flavor. They are packed with protein, healthy fats, vitamins, and minerals, making them a nutritious and versatile snack or ingredient.'
    },
    {
        id: 4,
        image: '',
        title: 'NUTS',
        subtitle: 'WALNUTS',
        availability: 'In Stock',
        description: 'Walnuts are nutrient-rich, brain-shaped nuts with a slightly bitter, earthy flavor. They are high in omega-3 fatty acids, antioxidants, protein, and essential vitamins, making them a heart-healthy and versatile food.'
    },
    {
        id: 5,
        image: '',
        title: 'NUTS',
        subtitle: 'PISTACHIO',
        availability: 'In Stock',
        description: 'Pistachios are small, green nuts encased in a beige shell. They have a slightly sweet, rich flavor and are packed with protein, fiber, healthy fats, and essential nutrients, making them a popular, nutritious snack.'
    },
    {
        id: 6,
        image: '',
        title: 'NUTS',
        subtitle: 'PINE NUTS',
        availability: 'In Stock',
        description: 'Pine nuts are small, ivory-colored seeds with a delicate, buttery flavor. Rich in protein, healthy fats, vitamins, and minerals, they are often used in cooking and baking, especially in pesto and salads.'
    },
]);

onMounted(async () => {
    const almondImage1 = await import('../assets/Images/almond-7.png');
    products.value[0].image = almondImage1.default;

    const almondImage2 = await import('../assets/Images/almond-3.png');
    products.value[1].image = almondImage2.default;

    const almondImage3 = await import('../assets/Images/kaju-3.png');
    products.value[2].image = almondImage3.default;

    const almondImage4 = await import('../assets/Images/walnuts.png');
    products.value[3].image = almondImage4.default;

    const almondImage5 = await import('../assets/Images/pista.png');
    products.value[4].image = almondImage5.default;

    const almondImage6 = await import('../assets/Images/pine-nuts.png');
    products.value[5].image = almondImage6.default;
    
});

// Emit an event to open the modal with the selected product data
const emit = defineEmits(['openModal']);
function viewDetails(product) {
    emit('openModal', product);
}
</script>


<style scoped>
.about-card {
    background-color: var(--second-main-color--);
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgb(10, 64, 11) 0px -2px 6px 0px inset;
}

.about {
    border: 3px solid #00000021;
    transition: all ease .4s;
}

.about:hover {
    border: 3px solid var(--header-bg-main--);
    scale: 1.01;
}

.nav-link:hover {
    color: #2b2a2a !important;
}

.nav-link {
    background-color: transparent !important;
    color: #fff !important;
    border: none;
}

.nav-link.active {
    color: #000 !important;
}

h5 {
    font-size: clamp(1rem, 1.4vw, 1.5rem);
}
</style>