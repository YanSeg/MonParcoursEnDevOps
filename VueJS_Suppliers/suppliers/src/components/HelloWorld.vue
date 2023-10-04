<script>


export default {
  props: {
    msg: String,
  },
};

// Ce cours m'intéresse pour la suite // vite config/ json
// https://vueschool.io/lessons/the-scaffolded-codebase-vite-only
</script>

<template>
  <div>
    <h1 class="black">{{ msg }}</h1>
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
