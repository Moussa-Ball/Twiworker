import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
  {
    path: '/feed',
    name: 'job.feed',
    component: () => import('../views/JobFeed'),
  },
  {
    path: '/job/~:id',
    name: 'job.show',
    component: () => import('../components/jobs/PreviewJob'),
  },
];

const router = new VueRouter({
  mode: 'history',
  routes,
});

export default router;
