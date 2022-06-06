import { createRouter, createWebHistory } from 'vue-router'
import Home from "../views/Home.vue"
import Users from "../views/Users.vue"
import Products from "../views/Products.vue"
import Guard from "../services/middleware"
import Login from "../views/Login.vue"
const routes = [
  {
    path: "/",
    name: "App",
    redirect: "/home",  
  },
  {
    path: "/home",
    name: "Home",
    beforeEnter: Guard.auth,
    component: Home

  },
  
  {
    path: "/users",
    name: "Lista-usuários",
    beforeEnter: Guard.auth,
    component: Users,
  },
  {
    path: "/products",
    name: "Lista-produtos",
    beforeEnter: Guard.auth,
    component: Products,
  },
  {
    path: "/login",
    name: "Login",
    component: Login,
  }
]
const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
