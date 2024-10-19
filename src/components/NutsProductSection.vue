<template>
    <Header />
    <div class="almond-hero-sec d-flex align-items-center">
        <div class="container">
            <h4>
                Explore our diverse range of nuts, including almonds, <br class="d-none d-md-block"> walnuts, and pistachios, sourced for their
                freshness <br class="d-none d-md-block">
                and quality. Perfect for snacking or enhancing your culinary <br class="d-none d-md-block"> creations with natural goodness
            </h4>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="container py-4">
        <div class="heading">
            <h4>ALMONDS</h4>
        </div>
        <div class="almonds-cards">
            <div v-for="product in products" :key="product.id" class="d-flex flex-column align-items-start">
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
                        <QuickViewIcon @click="openModal(product)" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ModalSection v-if="showModal" :product="selectedProduct" @closeModal="closeModal" />
</template>

<script setup>
import { ref, onMounted } from 'vue';
import Header from '@/components/HomeHeader.vue'
import ActionIcon from './icons/ActionIcon.vue';
import QuickViewIcon from './icons/QuickViewIcon.vue';
import ModalSection from '@/components/ModalSection.vue';

// List of products
const products = ref([
    {
        id: 1,
        image: '',
        title: 'ALMONDS',
        subtitle: 'UNSHELLED',
        availability: 'In Stock',
        description: 'Unshelled almonds are raw, nutrient-rich nuts encased in their hard, protective shells. They offer a fresh, natural flavor and are rich in protein, fiber, healthy fats, and essential vitamins.'
    },
    {
        id: 2,
        image: '',
        title: 'ALMONDS',
        subtitle: 'SHELLED',
        availability: 'In Stock',
        description: 'Shelled almonds are raw or roasted nuts with their hard outer shell removed. They are nutrient-dense, offering a convenient, tasty source of protein, fiber, healthy fats, and essential vitamins.'
    },
    {
        id: 3,
        image: '',
        title: 'CASHEW',
        subtitle: 'W320',
        availability: 'In Stock',
        description: 'Cashews are creamy, kidney-shaped nuts with a rich, buttery flavor. They are packed with protein, healthy fats, vitamins, and minerals, making them a nutritious and versatile snack or ingredient.'
    },
    {
        id: 4,
        image: '',
        title: 'WALNUTS',
        subtitle: 'JUGLANS NIGRA',
        availability: 'In Stock',
        description: 'Walnuts are nutrient-rich, brain-shaped nuts with a slightly bitter, earthy flavor. They are high in omega-3 fatty acids, antioxidants, protein, and essential vitamins, making them a heart-healthy and versatile food.'
    },
    {
        id: 5,
        image: '',
        title: 'PISTACHIO',
        subtitle: 'PISTA',
        availability: 'In Stock',
        description: 'Pistachios are small, green nuts encased in a beige shell. They have a slightly sweet, rich flavor and are packed with protein, fiber, healthy fats, and essential nutrients, making them a popular, nutritious snack.'
    },
    {
        id: 6,
        image: '',
        title: 'PINE NUTS',
        subtitle: 'CHILGHOZA',
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


const showModal = ref(false);
const selectedProduct = ref({});

function openModal(product) {
    selectedProduct.value = product;
    showModal.value = true;
}

function closeModal() {
    showModal.value = false;
}
</script>

<style scoped>
.almond-hero-sec {
    height: 100vh;
    width: 100%;
    background-image: url('../assets/Images/banner-home-4.png');
    background-position: center;
    background-size: cover;
}

h4 {
    position: relative;
    z-index: 9;
    color: #fff;
    font-size: 28px;
}

.overlay {
    height: 100%;
    width: 100%;
    background: linear-gradient(to left, #0000003f, #00000095, #000000d4, #000);
    position: absolute;
    top: 0;
    left: 0;
}

.heading {
    position: relative;
    display: inline-block;
    padding-bottom: 5px;
    margin-bottom: 10px;
    border-bottom: 1.5px solid #0000002f;
    width: 100%;
}

.almonds-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
    gap: 25px;
}

.almonds-cards img {
    width: 100%;
    object-fit: cover;
}
</style>