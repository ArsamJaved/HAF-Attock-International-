<template>
    <Header />
    <div class="almond-hero-sec">
        <div class="container">
            <h4>
                "Dive into a world of spices, from aromatic cinnamon <br class="d-none d-md-block"> to fiery chili flakes. Elevate your dishes with <br class="d-none d-md-block"> our
                premium selection sourced from around <br class="d-none d-md-block"> the globe for unrivaled flavor."
            </h4>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="container py-4">
        <div class="heading">
            <h4>SPICES</h4>
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
                        <QuickViewIcon @click="viewDetails(product)" />
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
        title: 'SPICES',
        subtitle: 'CARDAMOM',
        availability: 'In Stock',
        description: 'Cardamom is a fragrant spice native to India, with a strong, sweet flavor and a hint of citrus. It often used in both sweet and savory dishes, beverages, and desserts, adding depth and aroma to culinary creations.'
    },
    {
        id: 2,
        image: '',
        title: 'SPICES',
        subtitle: 'BLACK CARDAMOM',
        availability: 'In Stock',
        description: 'Black cardamom is a robust spice originating from the Himalayan region. It has a smoky, earthy flavor with hints of resin and camphor. Commonly used in savory dishes, it adds depth and complexity to curries, stews, and rice dishes.'
    },
    {
        id: 3,
        image: '',
        title: 'SPICES',
        subtitle: 'CUMIN',
        availability: 'In Stock',
        description: 'Cumin is a warm, earthy spice with a slightly bitter undertone. It widely used in various cuisines, particularly in Indian, Middle Eastern, and Latin American dishes. Cumin adds depth and complexity to savory dishes like curries, chili, and roasted vegetables.'
    },
    {
        id: 4,
        image: '',
        title: 'SPICES',
        subtitle: 'CORRIANDER',
        availability: 'In Stock',
        description: 'Coriander is a versatile herb with both fresh leaves (cilantro) and dried seeds. The seeds have a warm, citrusy flavor with hints of sweetness and are commonly used whole or ground in spice blends, curries, soups, and pickles.'
    },
    {
        id: 5,
        image: '',
        title: 'SPICES',
        subtitle: 'BLACK PEPPER',
        availability: 'In Stock',
        description: 'Black pepper is a pungent spice made from dried and ground peppercorns. It adds a sharp, spicy flavor and a subtle heat to dishes, enhancing their taste. Widely used in both savory and sweet recipes, black pepper is a staple seasoning worldwide.'
    },
    {
        id: 6,
        image: '',
        title: 'SPICES',
        subtitle: 'WHITE PEPPER',
        availability: 'In Stock',
        description: 'White pepper is derived from the same plant as black pepper but is made from the seed of the ripened fruit with the outer skin removed. It has a milder flavor compared to black pepper, with a slightly earthy and floral taste. Commonly used in light-colored dishes to avoid dark specks, white pepper adds subtle heat and flavor to soups, sauces, and creamy dishes.'
    },
    {
        id: 7,
        image: '',
        title: 'SPICES',
        subtitle: 'RED PEPPER',
        availability: 'In Stock',
        description: 'Red pepper typically refers to dried and ground red chili peppers, such as cayenne or paprika. It adds a fiery heat and vibrant color to dishes, ranging from mild to intensely spicy, depending on the variety used. Red pepper is a common ingredient in cuisines worldwide, adding depth and complexity to savory recipes.'
    },
    {
        id: 8,
        image: '',
        title: 'SPICES',
        subtitle: 'CLOVE',
        availability: 'In Stock',
        description: 'Clove is a highly aromatic spice derived from the flower buds of the clove tree. It has a strong, warm, and sweet flavor with hints of pepper and camphor. Cloves are commonly used whole or ground in both sweet and savory dishes, adding depth and warmth to curries, baked goods, and beverages like mulled wine.'
    },
    {
        id: 9,
        image: '',
        title: 'SPICES',
        subtitle: 'CINNAMON',
        availability: 'In Stock',
        description: 'Cinnamon is a fragrant spice obtained from the inner bark of trees in the genus Cinnamomum. It has a warm, sweet flavor with hints of spice and is used in various culinary applications, including baking, cooking, and beverages like mulled cider.'
    },
    {
        id: 10,
        image: '',
        title: 'SPICES',
        subtitle: 'STAR ANISE',
        availability: 'In Stock',
        description: 'Star anise is a distinctive spice with a licorice-like flavor and a sweet, slightly bitter taste. It is shaped like a star with eight points and is used whole or ground in both sweet and savory dishes, imparting a unique and aromatic essence.'
    },
    {
        id: 11,
        image: '',
        title: 'SPICES',
        subtitle: 'IMLI',
        availability: 'In Stock',
        description: 'Imli, also known as tamarind, is a tangy-sweet fruit pod commonly used in cooking, especially in South Asian and Southeast Asian cuisines. It adds a unique sourness to dishes and is often used in chutneys, sauces, soups, and curries.'
    },
]);

onMounted(async () => {
    const spices1 = await import('../assets/Images/cardamom-spices.png')
    products.value[0].image = spices1.default;

    const spices2 = await import('../assets/Images/black-cardamom-spices.png')
    products.value[1].image = spices2.default;

    const spices3 = await import('../assets/Images/cumin-spices.png')
    products.value[2].image = spices3.default;

    const spices4 = await import('../assets/Images/corriander-spices.png')
    products.value[3].image = spices4.default;

    const spices5 = await import('../assets/Images/black-pepper-spices.png')
    products.value[4].image = spices5.default;

    const spices6 = await import('../assets/Images/white-pepper.png')
    products.value[5].image = spices6.default;

    const spices7 = await import('../assets/Images/red-pepper-spices.png')
    products.value[6].image = spices7.default;

    const spices8 = await import('../assets/Images/clove-spices.png')
    products.value[7].image = spices8.default;

    const spices9 = await import('../assets/Images/cinnamon-spices.png')
    products.value[8].image = spices9.default;

    const spices10 = await import('../assets/Images/star-anise.png')
    products.value[9].image = spices10.default;

    const spices11 = await import('../assets/Images/imli-spices.png')
    products.value[10].image = spices11.default;
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
    background-image: url('../assets/Images/banner-spices.png');
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
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