<template>
    <Header />
    <div class="almond-hero-sec d-flex align-items-center">
        <div class="container">
            <h4>
                Enhance your culinary creations with our premium <br class="d-none d-md-block"> selection of herbs, including fragrant basil, robust <br class="d-none d-md-block"> rosemary, and delicate parsley, sourced for freshness and quality.
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
        title: 'HERBS',
        subtitle: 'ACACIA CONCINNA',
        availability: 'In Stock',
        description: 'Acacia concinna, commonly known as Shikakai, is a traditional Ayurvedic herb used primarily for hair care. It produces a natural lather and is rich in saponins, which cleanse the hair and scalp. Shikakai promotes hair growth, strengthens hair roots, prevents dandruff, and maintains overall scalp health.'
    },
    {
        id: 2,
        image: '',
        title: 'HERBS',
        subtitle: 'ACONITUM',
        availability: 'In Stock',
        description: 'Aconitum, commonly known as aconite or monkshood, is a genus of flowering plants known for their striking blue or purple flowers. Despite their beauty, all parts of the plant are highly toxic and have been used historically in traditional medicine and as a poison. Proper handling and usage under professional guidance are essential due to its potent toxicity.'
    },
    {
        id: 3,
        image: '',
        title: 'HERBS',
        subtitle: 'VALERIAN',
        availability: 'In Stock',
        description: 'Valerian is a perennial herb known for its calming properties, with roots that are often used to promote relaxation and improve sleep quality. It has a strong, earthy aroma and is commonly consumed as a tea, tincture, or supplement in traditional and herbal medicine practices.'
    },
    {
        id: 4,
        image: '',
        title: 'HERBS',
        subtitle: 'MORCHELLA ESCULENTA',
        availability: 'In Stock',
        description: 'Morchella esculenta, commonly known as the morel mushroom, is a prized edible fungus with a honeycomb appearance. Known for its rich, earthy flavor and meaty texture, it is highly sought after by chefs and foragers. Morels are typically used in gourmet cooking, adding depth to various dishes like soups, sauces, and sautés.'
    },
    {
        id: 5,
        image: '',
        title: 'HERBS',
        subtitle: 'TOMER SEEDS',
        availability: 'In Stock',
        description: 'Tomar seed, also known as Zanthoxylum armatum or timur, is a spice commonly used in South Asian cuisine. It has a unique, citrusy flavor with a slight numbing effect, similar to Sichuan peppercorns. These seeds are often used to flavor curries, pickles, and spice blends, imparting a distinctive and aromatic taste to dishes.'
    },
    {
        id: 6,
        image: '',
        title: 'HERBS',
        subtitle: 'PISTACIA INTEGERRIMA',
        availability: 'In Stock',
        description: 'Pistacia integerrima, commonly known as zebrawood or karkatshringi, is a tree valued for its medicinal properties. Its galls, known as "galls of pistachio," are used in traditional medicine to treat respiratory issues, digestive problems, and skin conditions. The galls have anti-inflammatory, antimicrobial, and astringent properties, making them a versatile remedy in herbal treatments.'
    },
    {
        id: 7,
        image: '',
        title: 'HERBS',
        subtitle: 'MAY APPLE',
        availability: 'In Stock',
        description: 'Mayapple, also known as Podophyllum peltatum, is a perennial plant native to North America. It has umbrella-like leaves and produces a small, edible fruit. The plants root and rhizome are used in traditional medicine for their purgative and antiviral properties, but they are highly toxic and should only be used under professional guidance.'
    },

    {
        id: 8,
        image: '',
        title: 'HERBS',
        subtitle: 'PICRORHIZA KURROA',
        availability: 'In Stock',
        description: 'Picrorhiza kurroa, commonly known as kutki or katuki, is a medicinal herb used in Ayurveda. It is known for its bitter roots, which are used to treat liver disorders, digestive issues, and respiratory ailments. Kutki has anti-inflammatory, antioxidant, and hepatoprotective properties, making it a valuable herb in traditional medicine.'
    },

    {
        id: 9,
        image: '',
        title: 'HERBS',
        subtitle: 'WILD POMEGRANTE SEEDS',
        availability: 'In Stock',
        description: 'Wild pomegranate seeds, also known as anardana, are dried seeds of wild pomegranates. They have a tangy, slightly sweet flavor and are commonly used as a spice in Indian and Middle Eastern cuisines. Anardana adds a tart taste to dishes like chutneys, stews, and curries, and is also used in spice blends to enhance the flavor profile of various recipes.'
    },

]);


onMounted(async () => {
    const cashewImage1 = await import('../assets/Images/Acacia.png');
    products.value[0].image = cashewImage1.default;

    const cashewImage2 = await import('../assets/Images/aconitum.png');
    products.value[1].image = cashewImage2.default;

    const cashewImage3 = await import('../assets/Images/valeria.png');
    products.value[2].image = cashewImage3.default;

    const cashewImage4 = await import('../assets/Images/morchella.png');
    products.value[3].image = cashewImage4.default;

    const cashewImage5 = await import('../assets/Images/tomar-seed.png');
    products.value[4].image = cashewImage5.default;

    const cashewImage6 = await import('../assets/Images/pistachia.png');
    products.value[5].image = cashewImage6.default;

    const cashewImage7 = await import('../assets/Images/may-apple.png');
    products.value[6].image = cashewImage7.default;

    const cashewImage8 = await import('../assets/Images/kurrao.png');
    products.value[7].image = cashewImage8.default;

    const cashewImage9 = await import('../assets/Images/pomegrante.png');
    products.value[8].image = cashewImage9.default;
})


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
    background-image: url('../assets/Images/herbs-banner.png');
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