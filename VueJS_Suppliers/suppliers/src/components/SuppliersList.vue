<script>
import Supplier from "./Supplier.vue";
import TestMixin from "../TestMixin.js";
import ConditionApi from "./ConditionApi.vue";

import axios from "axios";

export default {
  mixins: [TestMixin],
  components: {
    Supplier,
    ConditionApi,
  },
  data() {
    return {
      loading: true,
      error: null,
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
        <Supplier
          v-for="supplier in suppliers"
          :key="supplier.id"
          :name="supplier.name"
          :status="supplier.status"
          :checkedAt="supplier.checkedAt"
        />
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
  flex-direction: column;
  align-items: center;
  background-color: gray;
  margin-top: 0.5rem;
}

.input {
  display: flex;
  margin: auto;
  padding-top: 1rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
  margin: auto;
}

@media (min-width: 1024px) {
  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>
