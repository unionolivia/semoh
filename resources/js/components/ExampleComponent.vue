<template>
  <div class="centerx">
    <vs-upload action="https://jsonplaceholder.typicode.com/posts/" @on-success="successUpload" />
  </div>
</template>

<script>
import {vsUpload} from 'vuesax';
export default {
  methods:{
    successUpload(){
      this.$vs.notify({color:'success', title:'Upload Success', text:'Upload was successful'})
    }
  }
}
</script>
