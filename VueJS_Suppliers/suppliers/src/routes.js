import { createRouter, createWebHistory } from 'vue-router';
import SuppliersList from './components/SuppliersList.vue';
import SuppliersMap from './components/SuppliersMap.vue';
import HelloWorldVue from './components/HelloWorld.vue';

const routes = [
  {
    path: '/suppliers', name: 'suppliers',
    component: SuppliersList,
  },
  {
    path: '/map', name: 'map',
    component: SuppliersMap,
  },
  {
    path: '/', name: 'home',
    component: HelloWorldVue,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;