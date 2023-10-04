<script setup>
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <main>
    <header>
      <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />

    </header>

    <div class="container">
      <div class="logo">
        
      </div>

      <div class="logo">
        <HelloWorld msg="Que voulez-vous faire"/>
      </div>

<div> <router-link to="/">Home</router-link> | <router-link to="/suppliers">Liste des fournisseurs</router-link>  |  <router-link to="/map">Carte</router-link> 
    <router-view> </router-view>
  </div>
     
    </div>
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.container {
  display: flex;
  flex-direction: column;
}

.logo {
  display: block;
  margin: 0 auto rem;
  

}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>
