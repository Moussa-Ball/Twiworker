import "./bootstrap";
import Vue from "vue";
import store from "./store";
import router from "./router";
import "./registerServiceWorker";
import Twiworker from "./plugins/Twiworker";

Vue.config.productionTip = true;
Vue.use(Twiworker);

// eslint-disable-next-line no-unused-vars
const app = new Vue(
  Vue.util.extend({
    router, store, created() {
      // TODO: Dispatch the messenger counter.
    }
  })
).$mount("#app");
