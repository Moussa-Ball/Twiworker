import VueAxios from 'vue-axios';
window.axios = require('axios');
import vmodal from 'vue-js-modal'
import "tippy.js/themes/light.css";
import ReadMore from "vue-read-more";
import StarRating from 'vue-star-rating'
import SlideUpDown from 'vue-slide-up-down'
import ProgressBar from "vue-simple-progress";
import VueCircle from 'vue2-circle-progress-new'
import VueTippy, { TippyComponent } from "vue-tippy";
import * as TastyBurgerButton from 'vue-tasty-burgers';

// Import custom components
import Pagination from '../components/LaravelVuePagination'
import SelectAccountType from '../components/account/SelectAccountType'

// Import layouts
import Navbar from '../layouts/Navbar';
import Footer from '../layouts/Footer';

// Import Page
import JobIndex from '../views/jobs/Index';
import JobShow from '../views/jobs/Show';

export default {
  install(Vue) {
    // Register global using.
    Vue.use(vmodal);
    Vue.use(ReadMore);
    Vue.use(VueTippy);
    Vue.use(TastyBurgerButton);
    Vue.use(VueAxios, window.axios);

    // Register components.
    Vue.component("tippy", TippyComponent);
    Vue.component('vue-circle', VueCircle);
    Vue.component('progress-bar', ProgressBar);
    Vue.component('slide-up-down', SlideUpDown);

    // Register custom components.
    Vue.component('navbar', Navbar);
    Vue.component('footerr', Footer);
    Vue.component('job-show', JobShow);
    Vue.component('job-index', JobIndex);
    Vue.component('pagination', Pagination);
    Vue.component('star-rating', StarRating);
    Vue.component('select-account-type', SelectAccountType);
  },
};
