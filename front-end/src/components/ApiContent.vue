<script>
import axios from 'axios';

export default {
  name: 'ApiContent',

  data() {
    return {
      technologies: []
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

  <ol>
    <li v-for="tech in technologies" :key="tech.id">
      <span> {{ tech.name }} </span>
      <br>
      <hr>
    </li>
  </ol>
</template>

<style scoped></style>
 