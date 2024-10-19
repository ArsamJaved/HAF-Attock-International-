import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutSection from '../components/AboutSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import ContactSection from '../components/ContactSection.vue'
import NutsProductSection from '../components/NutsProductSection.vue'
import DriedFruits from '@/components/DriedFruits.vue'
import HerbsProduct from '@/components/HerbsProduct.vue'
import Spices from '@/components/SpicesProduct.vue'
import AllProductsSection from '../components/AllProductsSection.vue'


const router = createRouter({
  mode:'history',
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },

    {
      path: '/about',
      name: 'about',
      component: AboutSection
    },

    {
      path: '/allProducts',
      name: 'allProducts',
      component: AllProductsSection
    },

    {
      path: '/nuts',
      name: 'nuts',
      component: NutsProductSection
    },

    {
      path: '/driedFruits',
      name: 'driedFruits',
      component: DriedFruits
    },

    {
      path: '/herbs',
      name: 'herbs',
      component: HerbsProduct
    },

    {
      path: '/spices',
      name: 'spices',
      component: Spices
    },

    {
      path: '/services',
      name: 'services',
      component: ServicesSection
    },

    {
      path: '/contact',
      name: 'contact',
      component: ContactSection
    },
  ],

  scrollBehavior () {
    return { left: 0, top: 0 };
  }
  
})

export default router
