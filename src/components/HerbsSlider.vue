<template>
    <div class="container py-4">
        <div class="heading">
            <h4>
                HERBS
            </h4>
        </div>

        <div class="card-container">
            <swiper :slidesPerView="5" :spaceBetween="3" :navigation="true" :modules="modules" :breakpoints="{
                320: { slidesPerView: 2, spaceBetween: 5 },
                480: { slidesPerView: 2, spaceBetween: 10 },
                640: { slidesPerView: 3, spaceBetween: 10 },
                768: { slidesPerView: 4, spaceBetween: 10 },
                1024: { slidesPerView: 5, spaceBetween: 10 }
            }" class="mySwiper">
                <swiper-slide v-for="product in products" :key="product.id"
                    class="product-card d-flex flex-column align-items-start">
                    <img :src="product.image" height="200" alt="">
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
                </swiper-slide>
            </swiper>
        </div>

        <div class="row g-5 justify-content-center text-sm-start py-5">
            <div class="col-12 col-sm-6 col-lg-3 d-flex gap-2">
                <HappyClients />
                <div>
                    <h4>
                        HAPPY CLIENTS
                    </h4>
                    <p>
                        We Daily Deal With 1000+ <br> Customers Without Any <br> Complaints
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex gap-2">
                <PreServices />
                <div>
                    <h4>
                        PREMIUM SERVICES
                    </h4>
                    <p>
                        We Provide Premium Service <br> To All Our Clients
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex gap-2">
                <FreeShipping />
                <div>
                    <h4>
                        FREE SHIPPING
                    </h4>
                    <p>
                        Get Free Shipping On All Orders.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex gap-2">
                <ProductQuallity />
                <div>
                    <h4>
                        PRODUCT QUALITY
                    </h4>
                    <p>
                        We offer quality product only. So keep shopping
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>




<script setup>
import { ref, defineEmits, onMounted } from 'vue';
import ActionIcon from './icons/ActionIcon.vue';
import QuickViewIcon from './icons/QuickViewIcon.vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import { Navigation } from 'swiper/modules';
import HappyClients from './icons/HappyClients.vue';
import PreServices from './icons/PreServices.vue';
import FreeShipping from './icons/FreeShipping.vue';
import ProductQuallity from './icons/ProductQuallity.vue';


// Modules for Swiper
const modules = ref([Navigation]);


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

    {
        id: 10,
        image: '',
        title: 'HERBS',
        subtitle: 'DORONUCH',
        availability: 'In Stock',
        description: 'Doronuch, commonly known as kutki or katuki, is a medicinal herb used in Ayurveda. It is known for its bitter roots, which are used to treat liver disorders, digestive issues, and respiratory ailments. Kutki has anti-inflammatory, antioxidant, and hepatoprotective properties, making it a valuable herb in traditional medicine.'
    },

    {
        id: 11,
        image: '',
        title: 'HERBS',
        subtitle: 'WAWARENG',
        availability: 'In Stock',
        description: 'wawareng, also known as anardana, are dried seeds of wild pomegranates. They have a tangy, slightly sweet flavor and are commonly used as a spice in Indian and Middle Eastern cuisines. Anardana adds a tart taste to dishes like chutneys, stews, and curries, and is also used in spice blends to enhance the flavor profile of various recipes.'
    },

    {
        id: 12,
        image: '',
        title: 'HERBS',
        subtitle: 'GOLDEN GARLIC ',
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

    const cashewImage10 = await import('../assets/Images/herb-img-icon-1.jpeg');
    products.value[9].image = cashewImage10.default;

    const cashewImage11 = await import('../assets/Images/herb-icon-img-2.png');
    products.value[10].image = cashewImage11.default;

    const cashewImage12 = await import('../assets/Images/herb-img-icon-3.png');
    products.value[11].image = cashewImage12.default;
})


// Emit an event to open the modal with the selected product data
const emit = defineEmits(['openModal']);
function viewDetails(product) {
    emit('openModal', product);
}
</script>


<style scoped>
h4 {
    font-size: 17px
}

p {
    font-size: 14px;
}
</style>