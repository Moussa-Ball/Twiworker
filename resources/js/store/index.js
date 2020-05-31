import Vue from 'vue';
import Vuex from 'vuex';
import modules from './modules';

Vue.use(Vuex);

export default new Vuex.Store({
  modules,
  // eslint-disable-next-line no-undef
  strict: process.env.NODE_ENV !== 'production',
});
