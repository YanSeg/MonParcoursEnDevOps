<script>
import { format } from 'timeago.js';


 export default {
    props: {
    cityName: String,      
    cityWeather: String,   
    cityTemperature: Number, 
    cityUpdatedAt: String,   //Je met une String pour dans mon cas ne plus avoir de pb dans le consol.log();
  },
    // computed: {
    //     formatDate() {
    //         let date = new Date(this.updatedAt * 1000)
    //         return format(date);
    //     }
    // }
 }

    // Avant d'utiliser des props
    // data() {
    //     return {
    //         name: 'Ma ville', // nom de la ville
    //         weather: 'Peu nuageux', // descriptif météo 
    //         temperature: 20.55, // température en °C
    //         updatedAt: new Date() // date de dernière mise à jour
    //     }
    // }

</script>




<template>
  <div class="container">
    <p>Nom de la ville :  {{ cityName }}</p>
    <p>Météo du jour : {{ cityWeather }}</p>
    <p>Température : {{ cityTemperature }}°C</p>
    <p>Date du jour : {{ cityUpdatedAt }}</p>
    <!-- <p>Date du jour : {{ formatDate }}</p> -->
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
  </style>
  
