<template>
    <Header />
    <div class="almond-hero-sec">
        <div class="container">
            <h4>
                "Explore our premium selection of exotic <br class="d-none d-md-block"> dry fruits and spices sourced globally for rich <br class="d-none d-md-block"> flavors and
                vibrant
                aromas. Indulge in wholesome goodness <br class="d-none d-md-block"> curated for delightful culinary experiences."
            </h4>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="container py-5">
        <div class="almonds-cards">
            <div v-for="product in products" :key="product.id" class="d-flex flex-column align-items-start">
                <img :src="product.image" alt="">
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
    {
        id: 7,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'RAISIN',
        availability: 'In Stock',
        description: 'Raisins are dried grapes with a sweet, concentrated flavor and chewy texture. They are high in natural sugars, fiber, vitamins, and minerals, making them a convenient and nutritious snack or ingredient in various dishes.'
    },
    {
        id: 8,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'COCONUT',
        availability: 'In Stock',
        description: 'Coconut is a tropical fruit known for its hard, brown shell, white flesh, and refreshing water. Rich in healthy fats, fiber, and minerals, coconut is versatile, used in cooking, baking, and as a beverage.'
    },
    {
        id: 9,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'DATES',
        availability: 'In Stock',
        description: 'Dry dates are sweet, chewy fruits derived from dried ripe dates. They are rich in natural sugars, fiber, vitamins, and minerals, offering a healthy energy boost and making them a popular snack or ingredient in various dishes.'
    },
    {
        id: 10,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'APRICOT',
        availability: 'In Stock',
        description: 'Dried apricots are golden-orange fruits that have been dehydrated to remove their moisture content. They retain the sweet, tangy flavor of fresh apricots and are rich in fiber, vitamins, and antioxidants, making them a convenient and nutritious snack.'
    },
    {
        id: 11,
        image: '',
        title: 'DRY FRUITS',
        subtitle: 'FIG',
        availability: 'In Stock',
        description: 'Almonds Chilghoza, a delightful fusion of two premium nuts, offer a tantalizing blend of flavors. Combining the rich, buttery taste of almonds with the sweet, piney essence of Chilghoza pine nuts, they create a gourmet experience that satisfies both savory and sweet cravings.'
    },
    {
        id: 12,
        image: '',
        title: 'SPICES',
        subtitle: 'CARDAMOM',
        availability: 'In Stock',
        description: 'Cardamom is a fragrant spice native to India, with a strong, sweet flavor and a hint of citrus. It often used in both sweet and savory dishes, beverages, and desserts, adding depth and aroma to culinary creations.'
    },
    {
        id: 13,
        image: '',
        title: 'SPICES',
        subtitle: 'BLACK CARDAMOM',
        availability: 'In Stock',
        description: 'Black cardamom is a robust spice originating from the Himalayan region. It has a smoky, earthy flavor with hints of resin and camphor. Commonly used in savory dishes, it adds depth and complexity to curries, stews, and rice dishes.'
    },
    {
        id: 14,
        image: '',
        title: 'SPICES',
        subtitle: 'CUMIN',
        availability: 'In Stock',
        description: 'Cumin is a warm, earthy spice with a slightly bitter undertone. It widely used in various cuisines, particularly in Indian, Middle Eastern, and Latin American dishes. Cumin adds depth and complexity to savory dishes like curries, chili, and roasted vegetables.'
    },
    {
        id: 15,
        image: '',
        title: 'SPICES',
        subtitle: 'CORRIANDER',
        availability: 'In Stock',
        description: 'Coriander is a versatile herb with both fresh leaves (cilantro) and dried seeds. The seeds have a warm, citrusy flavor with hints of sweetness and are commonly used whole or ground in spice blends, curries, soups, and pickles.'
    },
    {
        id: 16,
        image: '',
        title: 'SPICES',
        subtitle: 'BLACK PEPPER',
        availability: 'In Stock',
        description: 'Black pepper is a pungent spice made from dried and ground peppercorns. It adds a sharp, spicy flavor and a subtle heat to dishes, enhancing their taste. Widely used in both savory and sweet recipes, black pepper is a staple seasoning worldwide.'
    },
    {
        id: 17,
        image: '',
        title: 'SPICES',
        subtitle: 'WHITE PEPPER',
        availability: 'In Stock',
        description: 'White pepper is derived from the same plant as black pepper but is made from the seed of the ripened fruit with the outer skin removed. It has a milder flavor compared to black pepper, with a slightly earthy and floral taste. Commonly used in light-colored dishes to avoid dark specks, white pepper adds subtle heat and flavor to soups, sauces, and creamy dishes.'
    },
    {
        id: 18,
        image: '',
        title: 'SPICES',
        subtitle: 'RED PEPPER',
        availability: 'In Stock',
        description: 'Red pepper typically refers to dried and ground red chili peppers, such as cayenne or paprika. It adds a fiery heat and vibrant color to dishes, ranging from mild to intensely spicy, depending on the variety used. Red pepper is a common ingredient in cuisines worldwide, adding depth and complexity to savory recipes.'
    },
    {
        id: 19,
        image: '',
        title: 'SPICES',
        subtitle: 'CLOVE',
        availability: 'In Stock',
        description: 'Clove is a highly aromatic spice derived from the flower buds of the clove tree. It has a strong, warm, and sweet flavor with hints of pepper and camphor. Cloves are commonly used whole or ground in both sweet and savory dishes, adding depth and warmth to curries, baked goods, and beverages like mulled wine.'
    },
    {
        id: 20,
        image: '',
        title: 'SPICES',
        subtitle: 'CINNAMON',
        availability: 'In Stock',
        description: 'Cinnamon is a fragrant spice obtained from the inner bark of trees in the genus Cinnamomum. It has a warm, sweet flavor with hints of spice and is used in various culinary applications, including baking, cooking, and beverages like mulled cider.'
    },
    {
        id: 21,
        image: '',
        title: 'SPICES',
        subtitle: 'STAR ANISE',
        availability: 'In Stock',
        description: 'Star anise is a distinctive spice with a licorice-like flavor and a sweet, slightly bitter taste. It is shaped like a star with eight points and is used whole or ground in both sweet and savory dishes, imparting a unique and aromatic essence.'
    },
    {
        id: 22,
        image: '',
        title: 'SPICES',
        subtitle: 'IMLI',
        availability: 'In Stock',
        description: 'Imli, also known as tamarind, is a tangy-sweet fruit pod commonly used in cooking, especially in South Asian and Southeast Asian cuisines. It adds a unique sourness to dishes and is often used in chutneys, sauces, soups, and curries.'
    },
    {
        id: 23,
        image: '',
        title: 'HERBS',
        subtitle: 'ACACIA CONCINNA',
        availability: 'In Stock',
        description: 'Acacia concinna, commonly known as Shikakai, is a traditional Ayurvedic herb used primarily for hair care. It produces a natural lather and is rich in saponins, which cleanse the hair and scalp. Shikakai promotes hair growth, strengthens hair roots, prevents dandruff, and maintains overall scalp health.'
    },
    {
        id: 4,
        image: '',
        title: 'HERBS',
        subtitle: 'ACONITUM',
        availability: 'In Stock',
        description: 'Aconitum, commonly known as aconite or monkshood, is a genus of flowering plants known for their striking blue or purple flowers. Despite their beauty, all parts of the plant are highly toxic and have been used historically in traditional medicine and as a poison. Proper handling and usage under professional guidance are essential due to its potent toxicity.'
    },
    {
        id: 25,
        image: '',
        title: 'HERBS',
        subtitle: 'VALERIAN',
        availability: 'In Stock',
        description: 'Valerian is a perennial herb known for its calming properties, with roots that are often used to promote relaxation and improve sleep quality. It has a strong, earthy aroma and is commonly consumed as a tea, tincture, or supplement in traditional and herbal medicine practices.'
    },
    {
        id: 26,
        image: '',
        title: 'HERBS',
        subtitle: 'MORCHELLA ESCULENTA',
        availability: 'In Stock',
        description: 'Morchella esculenta, commonly known as the morel mushroom, is a prized edible fungus with a honeycomb appearance. Known for its rich, earthy flavor and meaty texture, it is highly sought after by chefs and foragers. Morels are typically used in gourmet cooking, adding depth to various dishes like soups, sauces, and sautés.'
    },
    {
        id: 27,
        image: '',
        title: 'HERBS',
        subtitle: 'TOMER SEEDS',
        availability: 'In Stock',
        description: 'Tomar seed, also known as Zanthoxylum armatum or timur, is a spice commonly used in South Asian cuisine. It has a unique, citrusy flavor with a slight numbing effect, similar to Sichuan peppercorns. These seeds are often used to flavor curries, pickles, and spice blends, imparting a distinctive and aromatic taste to dishes.'
    },
    {
        id: 28,
        image: '',
        title: 'HERBS',
        subtitle: 'PISTACIA INTEGERRIMA',
        availability: 'In Stock',
        description: 'Pistacia integerrima, commonly known as zebrawood or karkatshringi, is a tree valued for its medicinal properties. Its galls, known as "galls of pistachio," are used in traditional medicine to treat respiratory issues, digestive problems, and skin conditions. The galls have anti-inflammatory, antimicrobial, and astringent properties, making them a versatile remedy in herbal treatments.'
    },
    {
        id: 29,
        image: '',
        title: 'HERBS',
        subtitle: 'MAY APPLE',
        availability: 'In Stock',
        description: 'Mayapple, also known as Podophyllum peltatum, is a perennial plant native to North America. It has umbrella-like leaves and produces a small, edible fruit. The plants root and rhizome are used in traditional medicine for their purgative and antiviral properties, but they are highly toxic and should only be used under professional guidance.'
    },

    {
        id: 30,
        image: '',
        title: 'HERBS',
        subtitle: 'PICRORHIZA KURROA',
        availability: 'In Stock',
        description: 'Picrorhiza kurroa, commonly known as kutki or katuki, is a medicinal herb used in Ayurveda. It is known for its bitter roots, which are used to treat liver disorders, digestive issues, and respiratory ailments. Kutki has anti-inflammatory, antioxidant, and hepatoprotective properties, making it a valuable herb in traditional medicine.'
    },

    {
        id: 31,
        image: '',
        title: 'HERBS',
        subtitle: 'WILD POMEGRANTE SEEDS',
        availability: 'In Stock',
        description: 'Wild pomegranate seeds, also known as anardana, are dried seeds of wild pomegranates. They have a tangy, slightly sweet flavor and are commonly used as a spice in Indian and Middle Eastern cuisines. Anardana adds a tart taste to dishes like chutneys, stews, and curries, and is also used in spice blends to enhance the flavor profile of various recipes.'
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

    const copra = await import('../assets/Images/kishmish-2.png')
    products.value[6].image = copra.default;

    const damson = await import('../assets/Images/coconut.png')
    products.value[7].image = damson.default;

    const driedDates = await import('../assets/Images/dry-dates.png')
    products.value[8].image = driedDates.default;

    const driedDates1 = await import('../assets/Images/dry-apricot.png')
    products.value[9].image = driedDates1.default;

    const damson1 = await import('../assets/Images/dry-fig.png')
    products.value[10].image = damson1.default;

    const spices1 = await import('../assets/Images/cardamom-spices.png')
    products.value[11].image = spices1.default;

    const spices2 = await import('../assets/Images/black-cardamom-spices.png')
    products.value[12].image = spices2.default;

    const spices3 = await import('../assets/Images/cumin-spices.png')
    products.value[13].image = spices3.default;

    const spices4 = await import('../assets/Images/corriander-spices.png')
    products.value[14].image = spices4.default;

    const spices5 = await import('../assets/Images/black-pepper-spices.png')
    products.value[15].image = spices5.default;

    const spices6 = await import('../assets/Images/white-pepper.png')
    products.value[16].image = spices6.default;

    const spices7 = await import('../assets/Images/red-pepper-spices.png')
    products.value[17].image = spices7.default;

    const spices8 = await import('../assets/Images/clove-spices.png')
    products.value[18].image = spices8.default;

    const spices9 = await import('../assets/Images/cinnamon-spices.png')
    products.value[19].image = spices9.default;

    const spices10 = await import('../assets/Images/star-anise.png')
    products.value[20].image = spices10.default;

    const spices11 = await import('../assets/Images/imli-spices.png')
    products.value[21].image = spices11.default;

    const cashewImage1 = await import('../assets/Images/Acacia.png');
    products.value[22].image = cashewImage1.default;

    const cashewImage2 = await import('../assets/Images/aconitum.png');
    products.value[23].image = cashewImage2.default;

    const cashewImage3 = await import('../assets/Images/valeria.png');
    products.value[24].image = cashewImage3.default;

    const cashewImage4 = await import('../assets/Images/morchella.png');
    products.value[25].image = cashewImage4.default;

    const cashewImage5 = await import('../assets/Images/tomar-seed.png');
    products.value[26].image = cashewImage5.default;

    const cashewImage6 = await import('../assets/Images/pistachia.png');
    products.value[27].image = cashewImage6.default;

    const cashewImage7 = await import('../assets/Images/may-apple.png');
    products.value[28].image = cashewImage7.default;

    const cashewImage8 = await import('../assets/Images/kurrao.png');
    products.value[29].image = cashewImage8.default;

    const cashewImage9 = await import('../assets/Images/pomegrante.png');
    products.value[30].image = cashewImage9.default;
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
    background-image: url('../assets/Images/banner-allproducts.png');
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
    height: 100vh;
    width: 100%;
    background: linear-gradient(to left, #0000003f, #00000095, #000000d4, #000);
    position: absolute;
    top: 0;
    left: 0;
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