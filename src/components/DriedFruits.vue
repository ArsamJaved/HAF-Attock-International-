<template>
    <div class="almond-hero-sec">
        <img src="../assets/Images/banner-dryfruits.png"
            alt="">
        <div class="overlay"></div>
    </div>
    <div class="container py-4">
        <div class="heading">
            <h4>DRIED FRUITS</h4>
        </div>
        <div class="almonds-cards">
            <div v-for="product in products" :key="product.id" class="d-flex flex-column align-items-start">
                <img :src="product.image" height="157.62" alt="">
                <small>{{ product.title }}</small>
                <span>{{ product.subtitle }}</span>
                <span>{{ product.priceRange }}</span>
                <div class="d-flex align-items-center justify-content-between w-100">
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
import ActionIcon from './icons/ActionIcon.vue';
import QuickViewIcon from './icons/QuickViewIcon.vue';
import ModalSection from '@/components/ModalSection.vue';

// List of products
const products = ref([
    {
        id: 1,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'COPRA',
        availability: 'In Stock',
        description: 'Toasted almonds, golden-brown and fragrant, evoke warmth and crunchiness with each bite. Their roasted essence captivates the senses, promising a delightful nutty flavor that adds depth to any dish or snack.'
    },
    {
        id: 2,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'APRICOT',
        availability: 'In Stock',
        description: 'California almonds are known for their crunchy texture and rich flavor. Perfect for snacking or adding to your favorite recipes.'
    },
    {
        id: 3,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'DRY DATES',
        availability: 'In Stock',
        description: 'Mamra Giri almonds are premium, handpicked almonds known for their distinct crunch and rich flavor. Grown in the Himalayas, they are 100% organic, packed with nutrients, and have a sweet, buttery taste that sets them apart from other varieties.'
    },
    {
        id: 4,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'DATES',
        availability: 'In Stock',
        description: 'Gurmandi almonds are renowned for their unique, intense flavor and crisp texture. These premium nuts are smaller than regular almonds but pack a punch with their rich, slightly bitter taste, making them perfect for gourmet recipes and healthy snacking.'
    },
    {
        id: 5,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'APRICOT',
        availability: 'In Stock',
        description: 'Almonds Chilghoza, a delightful fusion of two premium nuts, offer a tantalizing blend of flavors. Combining the rich, buttery taste of almonds with the sweet, piney essence of Chilghoza pine nuts, they create a gourmet experience that satisfies both savory and sweet cravings.'
    },
    {
        id: 6,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'FIG',
        availability: 'In Stock',
        description: 'California almonds are renowned for their superior quality and taste. Grown in the fertile valleys of California, these almonds boast a rich, nutty flavor and crunchy texture. Packed with essential nutrients, they are a versatile ingredient in various culinary dishes and make for a wholesome, satisfying snack.'
    },
    {
        id: 7,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'RED RAISIN',
        availability: 'In Stock',
        description: 'California almonds are renowned for their superior quality and taste. Grown in the fertile valleys of California, these almonds boast a rich, nutty flavor and crunchy texture. Packed with essential nutrients, they are a versatile ingredient in various culinary dishes and make for a wholesome, satisfying snack.'
    },
    {
        id: 8,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'POMEGRANTE',
        availability: 'In Stock',
        description: 'California almonds are renowned for their superior quality and taste. Grown in the fertile valleys of California, these almonds boast a rich, nutty flavor and crunchy texture. Packed with essential nutrients, they are a versatile ingredient in various culinary dishes and make for a wholesome, satisfying snack.'
    },
    {
        id: 9,
        image: '',
        title: 'DRIED FRUITS',
        subtitle: 'FIG',
        availability: 'In Stock',
        description: 'California almonds are renowned for their superior quality and taste. Grown in the fertile valleys of California, these almonds boast a rich, nutty flavor and crunchy texture. Packed with essential nutrients, they are a versatile ingredient in various culinary dishes and make for a wholesome, satisfying snack.'
    },
]);

// onMounted(async () => {
//     const copra = await import('../assets/Images/copra.jpg')
//     products.value[0].image = copra.default;

//     const damson = await import('../assets/Images/damson.jpg')
//     products.value[1].image = damson.default;

//     const driedDates = await import('../assets/Images/dried-dates.jpeg')
//     products.value[2].image = driedDates.default;

//     const driedDates1 = await import('../assets/Images/dried-date-2.webp')
//     products.value[3].image = driedDates1.default;

//     const damson1 = await import('../assets/Images/damson-2.jpg')
//     products.value[4].image = damson1.default;

//     const dryFig = await import('../assets/Images/dry-fig.webp')
//     products.value[5].image = dryFig.default;

//     const redRaisin = await import('../assets/Images/red-raisin.jpg')
//     products.value[6].image = redRaisin.default;

//     const pomegrante = await import('../assets/Images/pomegrante-seed-1.webp')
//     products.value[7].image = pomegrante.default;

//     const fig = await import('../assets/Images/fig.jpeg')
//     products.value[8].image = fig.default;
// })

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
.almond-hero-sec img {
    height: 100vh;
    width: 100%;
    object-fit: cover;
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
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 50px;
}

.almonds-cards img {
    width: 100%;
    object-fit: cover;
}

.heading::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -3%;
    width: 10%;
    border-bottom: 1.5px solid rgb(5, 179, 17);
}

small {
    font-size: 12px;
}

span {
    font-size: 14px;
    font-weight: 600
}

.quick-view {
    background-color: var(--header-bg-main--);
    width: fit-content;
    display: flex;
    align-items: center;
    justify-content: center;
    height: fit-content;
    width: 100%;
    border-radius: 5px;
    gap: 20px;
    margin: 10px;
    opacity: 1;
    transition: all ease-in-out 0.4s;
    padding: 0 1rem;
}

.call-action {
    border: 1px solid var(--header-bg-main--);
    width: fit-content;
    display: flex;
    align-items: center;
    justify-content: center;
    height: fit-content;
    width: 100%;
    border-radius: 5px;
    gap: 20px;
    margin: 10px;
    opacity: 1;
    transition: all ease-in-out 0.4s;
    padding: 0 1rem;
}
</style>