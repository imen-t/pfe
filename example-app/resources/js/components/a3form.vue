<template>
    <div class="container">
      <HeaderBox />
      <LeftBox1 />
      <LeftBox2 />
      <RightBox1 />
      <RightBox2 />
      <RightBox3 />
      <FooterBox />
    </div>
  </template>
  <script>
  import HeaderBox from '@/components/HeaderBox.vue';
  import LeftBox1 from '@/components/BOX1.vue';
  import LeftBox2 from '@/components/BOX2.vue';
  import RightBox1 from '@/components/BOX3.vue';
  import RightBox2 from '@/components/Box4.vue';
  import RightBox3 from '@/components/Box5.vue';
  import FooterBox from '@/components/FooterBox.vue';
  
  export default {
    components: {
      HeaderBox,
      LeftBox1,
      LeftBox2,
      RightBox1,
      RightBox2,
      RightBox3,
      FooterBox,
    },
  };
   