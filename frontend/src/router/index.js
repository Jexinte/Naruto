 import { createRouter, createWebHistory } from 'vue-router'


 const routes = [
   {
     path: '/',
     name: 'accueil',
    component:() => import('../views/Accueil.vue')
   },

   {
    path: '/addCharacter',
    name: 'add Character',
//    // route level code-splitting
//    // this generates a separate chunk (about.[hash].js) for this route
//    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AddCharacter.vue')
  },
    {
      path: '/konoha',
      name: 'Konoha',
  //    // route level code-splitting
  //    // this generates a separate chunk (about.[hash].js) for this route
  //    // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ '../views/Konoha.vue')
    },
    {
      path: '/kumo',
      name: 'Kumo',
  //    // route level code-splitting
  //    // this generates a separate chunk (about.[hash].js) for this route
  //    // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ '../views/Kumo.vue')
    },
    {
      path: '/suna',
      name: 'Suna',
  //    // route level code-splitting
  //    // this generates a separate chunk (about.[hash].js) for this route
  //    // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ '../views/Suna.vue')
    }
 ]

 const router = createRouter({
   history: createWebHistory(process.env.BASE_URL),
   routes
 })

 export default router
