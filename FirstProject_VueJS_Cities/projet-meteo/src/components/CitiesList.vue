<script>
import axios from 'axios';
import City from './City.vue';
import { format, render, cancel, register } from 'timeago.js';

export default {
  props: {
    msg: String,
  },
  components: {
    City,
  },
  data() {
    return {
      cities: [], 
      loading: true, 
      error: null, 
    };
  },
  computed: {
    formattedCities() {
      return this.cities.map(city => ({
        ...city,
        dt: format(city.dt * 1000),
      }));
    },
  },

  


  // Utilisez methods lorsque vous avez besoin de déclencher une action,
  //  et utilisez computed lorsque vous avez besoin de calculer des valeurs dépendantes des données du composant.


  created() {
    // Effectuez la requête Axios dans le hook mounted
    axios.get('https://api.openweathermap.org/data/2.5/find?lat=45.188&lon=5.724&cnt=20&cluster=yes&lang=fr&units=metric&APPID=117d95c8a357a0dbd810332b157b3e68')
      .then((response) => {
        console.log(response);
        const AAA = this.cities = response.data.list;
        console.log(AAA);
        console.log(response.data.list);
        
        this.loading = false; 
      })
      .catch((error) => {
        // Gérez les erreurs en assignant l'erreur à la variable error
        this.error = "Un probleme est survenue, recharcgé la page";
        this.loading = false; // Mettez loading à false en cas d'erreur
      });
  },
};



// created() est déclenché lorsque l'instance du composant est créée mais avant qu'elle ne soit attachée au DOM,
//  tandis que mounted() est déclenché lorsque l'instance du composant est attachée au DOM et que vous pouvez interagir avec le DOM.
// Vous choisissez le hook en fonction de vos besoins spécifiques et du moment où vous avez besoin d'accéder au DOM ou de manipuler les données du composant.

</script>




<template>
  <div>
    <div v-if="loading"> Chargement en cours...</div>
    <div v-else>
      <div v-if="error">Une erreur s'est produite : {{ error }}</div>
      <div v-else>
      <City v-for="city in formattedCities" class="logo" 
      :cityName="city.name"
      :cityWeather="city.weather[0].description"
      :cityTemperature="city.main.temp"
      :cityUpdatedAt="city.dt"
      />
      </div>
    </div>
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
.logo {
  display: block;
  margin: 0 auto 2rem;
}
</style>
