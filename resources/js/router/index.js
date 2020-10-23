import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
  {
    path: '/feed',
    name: 'jobs.index',
    component: () => import('../views/jobs/Index'),
  },
  {
    path: '/jobs/~:id',
    name: 'jobs.show',
    component: () => import('../views/jobs/Show'),
  },
];

const router = new VueRouter({
  mode: 'history',
  routes,
});

export default router;
