window.axios = require('axios');
import VueAxios from 'vue-axios';
import vmodal from 'vue-js-modal'
import "tippy.js/themes/light.css";
import ReadMore from "vue-read-more";
import StarRating from 'vue-star-rating'
import Multiselect from "vue-multiselect";
import SlideUpDown from 'vue-slide-up-down'
import ProgressBar from "vue-simple-progress";
import VueCircle from 'vue2-circle-progress-new'
import VueTippy, { TippyComponent } from "vue-tippy";
import * as TastyBurgerButton from 'vue-tasty-burgers';
import {Vue2Storage} from 'vue2-storage'
import VueTagsInput from '@johmun/vue-tags-input';
import vueCountryRegionSelect from 'vue-country-region-select';

// Import simplebar
import simplebar from 'simplebar-vue';
import 'simplebar/dist/simplebar.min.css';

// Import custom components
import CardFilter from '../components/CardFilter'
import CardResult from '../components/CardResult'
import ExpanderFilter from '../components/ExpanderFilter'
import Pagination from '../components/LaravelVuePagination'
import CardInputSearch from '../components/CardInputSearch'
import FreelancerCard from '../components/freelancers/FreelancerCard'
import SelectAccountType from '../components/account/SelectAccountType'

// KIT UI
import KitUI from '../components/UI/KitUI.vue'
import * as components from "../components/UI";

// Import layouts
import Navbar from '../layouts/Navbar';
import Footer from '../layouts/Footer';

// Import Page
import JobShow from '../views/jobs/Show';
import JobIndex from '../views/jobs/Index';
import FreelancerIndex from '../views/freelancers/Index';
import WithdrawMethod from '../views/settings/WithdrawMethod';

export default {
  install(Vue) {
    // Register global using.
    Vue.use(vmodal);
    Vue.use(ReadMore);
    Vue.use(VueTippy);
    Vue.use(TastyBurgerButton);
    Vue.use(VueAxios, window.axios);
    Vue.use(Vue2Storage, {
      prefix: 'app_twiworker_',
      driver: 'local',
    })

    // Ziggy route.
    Vue.mixin({
      methods: {
        route: (name, params, absolute) => route(name, params, absolute),
      },
    });

    //KIT UI
    Vue.component('kit-ui', KitUI);
    Object.entries(components).forEach(([name, component]) => {
      Vue.component(name, component);
    });

    // Register components.
    Vue.use(vueCountryRegionSelect);
    Vue.component('simplebar', simplebar);
    Vue.component("tippy", TippyComponent);
    Vue.component('vue-circle', VueCircle);
    Vue.component("multiselect", Multiselect);
    Vue.component('progress-bar', ProgressBar);
    Vue.component('slide-up-down', SlideUpDown);
    Vue.component('vue-tags-input', VueTagsInput);

    // Register custom components.
    Vue.component('navbar', Navbar);
    Vue.component('footerr', Footer);
    Vue.component('pagination', Pagination);
    Vue.component('card-result', CardResult);
    Vue.component('card-filter', CardFilter);
    Vue.component('star-rating', StarRating);
    Vue.component('freelancerCard', FreelancerCard);
    Vue.component('expander-filter', ExpanderFilter);
    Vue.component('card-input-search', CardInputSearch);
    Vue.component('select-account-type', SelectAccountType);
    Vue.component('kit-ui', KitUI);

    // Register pages
    Vue.component('job-show', JobShow);
    Vue.component('job-index', JobIndex);
    Vue.component('withdraw-method', WithdrawMethod);
    Vue.component('freelancer-index', FreelancerIndex);
  },
};
