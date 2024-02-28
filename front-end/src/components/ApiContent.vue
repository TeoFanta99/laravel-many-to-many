<script>
import axios from 'axios';

export default {
  name: 'ApiContent',

  data() {
    return {
      technologies: [],

      createFormActive: false,

      // variabile per il v-model
      newTech: {
        name: 'nome di prova',
        image: 'path img di prova',
      }
    }
  },

  methods: {
    toggleCreateNewTech() {

      this.createFormActive = true;
    },

    submitNewTech() {

      axios.post('http://localhost:8000/api/v1/technology', this.newTech)
        .then(res => {

          const data = res.data;
          if (data.status == 'success')
            this.tech.push(data.tech);
          this.createFormActive = true;

        })

        .catch(err => {
          consol.err(err);
        })
    }
  },

  mounted() {

    axios.get('http://localhost:8000/api/v1/technology')

      .then(res => {

        const data = res.data;
        console.log(data);

        if (data.status == 'success')
          this.technologies = data.technologies;

        console.log('technologies: ', this.technologies);

      })

      .catch(err => {
        consol.err(err);
      })

  }
}

</script>

<template>
  <h1>API CONTENT</h1>

  <br>

  <form v-if="createFormActive" @submit.prevent="submitNewTech">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" v-model="newTech.name">
    <br>
    <label for="image">Image</label>
    <input type="text" name="image" id="image" v-model="newTech.image">
    <br>
    <input type="submit" value="ADD">
  </form>


  <div v-else>
    <button @click="toggleCreateNewTech">
      <a href="#">+ NEW TECHNOLOGY</a>
    </button>
    <br>
    <ol>
      <li v-for="tech in technologies" :key="tech.id">
        <span>Nome della tecnologia: {{ tech.name }} </span>
        <br>
        <img :src="tech.image" alt="img">
        <hr>
      </li>
    </ol>
  </div>
</template>

<style scoped></style>
 