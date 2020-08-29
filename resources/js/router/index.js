import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
  {
    path: '/feed',
    name: 'job.feed',
    component: () => import('../views/jobs/Index'),
  },
  {
    path: '/job/~:id',
    name: 'job.show',
    component: () => import('../views/jobs/Show'),
  },
];

const router = new VueRouter({
  mode: 'history',
  routes,
});

export default router;
