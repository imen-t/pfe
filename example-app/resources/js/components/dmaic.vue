import VueScrollTo from 'vue-scrollto'
<template>
    <div>
      <button @click="scrollToForm1">Form 1</button>
      <button @click="scrollToForm2">Form 2</button>
      <button @click="scrollToForm3">Form 3</button>
      <button @click="scrollToForm4">Form 4</button>
      <button @click="scrollToForm5">Form 5</button>
  
      <form ref="form1" @submit.prevent="submitForm1">
        <!-- Form 1 fields -->
      </form>
  
      <form ref="form2" @submit.prevent="submitForm2">
        <!-- Form 2 fields -->
      </form>
  
      <form ref="form3" @submit.prevent="submitForm3">
        <!-- Form 3 fields -->
      </form>
  
      <form ref="form4" @submit.prevent="submitForm4">
        <!-- Form 4 fields -->
      </form>
  
      <form ref="form5" @submit.prevent="submitForm5">
        <!-- Form 5 fields -->
      </form>
    </div>
  </template>
  
  <script>
  import Vue from 'vue';
  import VueScrollTo from 'vue-scrollto';
  
  Vue.use(VueScrollTo);
  
  export default {
    methods: {
      scrollToForm1() {
        this.$scrollTo(this.$refs.form1, 500);
      },
      scrollToForm2() {
        this.$scrollTo(this.$refs.form2, 500);
      },
      scrollToForm3() {
        this.$scrollTo(this.$refs.form3, 500);
      },
      scrollToForm4() {
        this.$scrollTo(this.$refs.form4, 500);
      },
      scrollToForm5() {
        this.$scrollTo(this.$refs.form5, 500);
      },
      submitForm1() {
        // Submit form 1
      },
      submitForm2() {
        // Submit form 2
      },
      submitForm3() {
        // Submit form 3
      },
      submitForm4() {
        // Submit form 4
      },
      submitForm5() {
        // Submit form 5
      },
    },
  };
  //npm install --save vue-scrollto
  </script>