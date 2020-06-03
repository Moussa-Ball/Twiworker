import VueAxios from 'vue-axios';
window.axios = require('axios');

// Import layouts
import Navbar from '../layouts/Navbar';
import Footer from '../layouts/Footer';

import JobFeed from '../views/JobFeed';

export default {
  install(Vue) {
    // Register global using.
    Vue.use(VueAxios, window.axios);

    // Register components.
    Vue.component('navbar', Navbar);
    Vue.component('footerr', Footer);
    Vue.component('job-feed', JobFeed);
  },
};
