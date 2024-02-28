<script>
import axios from 'axios';

export default {
  name: 'ApiContent',
  mounted() {
    console.log('ciao');

    axios.get('http://localhost:8000/api/v1/test')

      .then(res => {

        const data = res.data;
        console.log(data);
      })


      .catch(err => {
        consol.err(err);
      })

  }
}

</script>

<template>
  <h1>API CONTENT</h1>
</template>

<style scoped></style>
 