import VueAxios from 'vue-axios';
window.axios = require('axios');
import SlideUpDown from 'vue-slide-up-down'
import * as TastyBurgerButton from 'vue-tasty-burgers';

// Import custom components
import SelectAccountType from '../components/account/SelectAccountType'

// Import layouts
import Navbar from '../layouts/Navbar';
import Footer from '../layouts/Footer';

import JobFeed from '../views/JobFeed';

export default {
  install(Vue) {
    // Register global using.
    Vue.use(VueAxios, window.axios);
    Vue.use(TastyBurgerButton);

    // Register components.
    Vue.component('slide-up-down', SlideUpDown)

    // Register custom components.
    Vue.component('navbar', Navbar);
    Vue.component('footerr', Footer);
    Vue.component('job-feed', JobFeed);
    Vue.component('select-account-type', SelectAccountType);
  },
};
