import VueAxios from 'vue-axios';

// Import layouts
import Navbar from '../layouts/Navbar';

window.axios = require('axios');

export default {
  install(Vue) {
    // Register global using.
    Vue.use(VueAxios, window.axios);

    // Register components.
    Vue.component('navbar', Navbar);
  },
};
