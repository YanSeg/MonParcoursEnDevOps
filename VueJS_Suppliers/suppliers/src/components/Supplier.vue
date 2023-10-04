<script>

export default {
    props: {
        name: String,
        status: Number,
        checkedAt: String,
      
    },
    methods: {
        formatDate(date) {
            return date.toLocaleString();
        },
    },
};

</script>


<template>

    <div>

        <div class="container">
            <h1> {{ name }}</h1>
            <h3 v-if="status"> Stock : Disponible </h3>
            <h3 v-else> Stock : Indisponible </h3>
            <!-- <h5> {{checkedAt }}</h5> -->
             <h5> {{ formatDate(checkedAt) }}</h5>

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
