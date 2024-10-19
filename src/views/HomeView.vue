<template>
  <div class="main-container" >
    <Header />
    <MainSlider />
    <NutsSlider @openModal="openModal" />
    <ModalSection v-if="showModal" :product="selectedProduct" @closeModal="showModal = false" />
    <DriedFruitsSection @openModal="openModal" />
    <SpicesSection @openModal="openModal"/>
    <HerbsSlider @openModal="openModal" />
  </div>
</template>

<script setup>
import { ref } from 'vue';
import Header from '@/components/HomeHeader.vue'
import MainSlider from '@/components/MainSlider.vue';
import NutsSlider from '@/components/NutsSlider.vue';
import ModalSection from '@/components/ModalSection.vue';
import DriedFruitsSection from '@/components/DriedFruitsSlider.vue';
import SpicesSection from '@/components/SpicesSlider.vue';
import HerbsSlider from '@/components/HerbsSlider.vue';



// State for the modal visibility and the selected product
const showModal = ref(false);
const selectedProduct = ref({});

// Function to open the modal with the selected product data
function openModal(product) {
  selectedProduct.value = product;
  showModal.value = true;
}
</script>
