import { createWebHistory, createRouter } from 'vue-router'

import Home from '@/pages/Home.vue'
import Register from '@/pages/Register.vue'
import Login from '@/pages/Login.vue'
import Chapter from '@/pages/Chapter.vue'
import category_page from '@/pages/category_page.vue'
import contacts from '@/pages/contacts.vue'
import personal_account from '@/pages/personal_account.vue'
import shopping_cart from '@/pages/shopping_cart.vue'
import Dishes from '@/pages/Dishes.vue'
import Delete from '@/pages/Delete.vue'
import Edit from '@/pages/Edit.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/register', component: Register },
  { path: '/login', component: Login },
  { path: '/chapter', component: Chapter },
  { path: '/category_page', component: category_page },
  { path: '/contacts', component: contacts },
  { path: '/personal_account', component: personal_account },
  { path: '/shopping_cart', component: shopping_cart },
  { path: '/Dishes', component: Dishes },
  { path: '/Delete', component: Delete },
  { path: '/Edit', component: Edit },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router