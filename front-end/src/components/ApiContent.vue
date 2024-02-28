<script>
import axios from 'axios';

export default {
  name: 'ApiContent',

  data() {
    return {
      types: []
    }
  },
  mounted() {
    console.log('ciao');

    axios.get('http://localhost:8000/api/v1/types')

      .then(res => {

        const data = res.data;
        // console.log(data);

        if (data.status == 'success')
          this.types = data.types;

        console.log('types: ', this.types);

      })


      .catch(err => {
        consol.err(err);
      })

  }
}

</script>

<template>
  <h1>API CONTENT</h1>

  <ol>
    <li v-for="tipo in types" :key="tipo.id">
      <span> {{ tipo.name }} </span>
      <br>
      <img :src="tipo.image" alt="immagine">
      <hr>
    </li>
  </ol>
</template>

<style scoped></style>
 