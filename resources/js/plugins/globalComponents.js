window.axios = require("axios");
import VueAxios from "vue-axios";

export default {
  install(Vue) {   
    Vue.use(VueAxios, window.axios);
  }
};