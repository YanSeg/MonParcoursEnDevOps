import './assets/main.css'


import { Icon } from "leaflet";

// Import the whole Leaflet CSS
import "leaflet/dist/leaflet.css";

// Vue.config.productionTip = false;

// Resolve an issue where the markers would not appear
// delete Icon.Default.prototype._getIconUrl;

// Icon.Default.mergeOptions({
//   iconRetinaUrl: require("leaflet/dist/images/marker-icon-2x.png"),
//   iconUrl: require("leaflet/dist/images/marker-icon.png"),
//   shadowUrl: require("leaflet/dist/images/marker-shadow.png")
// });

import { createApp } from 'vue'


import App from './App.vue'

import router from './routes';

createApp(App)
.use(router)
.mount('#app')
