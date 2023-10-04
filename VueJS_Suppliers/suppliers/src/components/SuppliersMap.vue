<script>
import "leaflet/dist/leaflet.css";
import TestMixin from "../TestMixin.js";

import { LMap, LTileLayer, LMarker } from "@vue-leaflet/vue-leaflet";

export default {
  mixins: [TestMixin],
  components: {
    LMap,
    LTileLayer,
    LMarker,
  },
  data() {
    return {
      loading: true,
      error: null,
      url: "https://{s}.tile.osm.org/{z}/{x}/{y}.png",
      zoom: 3,
      center: [46.5322, 2.9482],
      bounds: null,
      suppliers: [],
    };
  },
};
</script>

<template>
  <div>
    <h1 class="green">Liste des fournisseurs</h1>
    <ConditionApi :loading="loading" :error="error">
      <template v-slot:default>
        <div style="height: 600px; width: 800px">
          <l-map id="map" v-model:zoom="zoom" :center="center">
            <LTileLayer :url="url"> </LTileLayer>
            <LMarker
              v-for="supplier in suppliers"
              :key="supplier.id"
              :lat-lng="[supplier.latitude, supplier.longitude]"
              console.log(supplier.latitude);
            >
            </LMarker>
          </l-map>
        </div>
      </template>
    </ConditionApi>
  </div>
</template>


<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  position: relative;
  top: -10px;
}

h3 {
  font-size: 1.2rem;
}

.container {
  display: flex;
  flex-direction: row;
}

.input {
  display: flex;
  margin: auto;
  padding-top: 1rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
}

@media (min-width: 1024px) {
  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>
