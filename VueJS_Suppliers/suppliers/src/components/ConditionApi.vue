<script>
export default {
  props: {
    loading: Boolean,
    error: Number,
  },
};
</script>


<template>
  <div v-if="loading">Chargement en cours...</div>
  <div v-else>
    <div v-if="error !== null">{{ error }}</div>
    <div v-else></div>
      <slot> </slot>
  </div>

</template>