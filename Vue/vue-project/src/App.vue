<template>
  <router-view></router-view>
  <!-- <Home></Home> -->
  <!-- <Login></Login> -->
  <!-- <Register></Register> -->
  <!-- <Chapter></Chapter> -->
  <!-- <contacts></contacts> -->
  <!-- <personal_account></personal_account> -->
  <!-- <shopping_cart></shopping_cart> -->
  <!--<category_page></category_page> -->
</template>

<script>
  import Home from '@/pages/Home.vue'
  import Login from '@/pages/Login.vue'
  import Register from '@/pages/Register.vue'
  import Chapter from '@/pages/Chapter.vue'
  import contacts from '@/pages/contacts.vue'
  import personal_account from '@/pages/personal_account.vue'
  import shopping_cart from '@/pages/shopping_cart.vue'
  import category_page from '@/pages/category_page.vue'

  export default {
    components: {Home, Login, Register, Chapter, contacts, personal_account, shopping_cart, category_page}
  }
</script>