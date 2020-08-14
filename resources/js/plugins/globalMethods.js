/**
 * You can register global methods & use them as methods in the main Vue instance.
 */

/**
* Allows to show a modal.
* @param {*} name The modal name.
*/
const showModal = function (name) {
  document.querySelector("body").classList.add("overflow-hidden");
  this.$modal.show(name);
};

/**
 * Allows to close a modal.
 * @param {*} name The modal name.
 */
const closeModal = function (name, goBack = false) {
  document.querySelector("body").classList.remove("overflow-hidden");
  this.$modal.hide(name);
};


const GlobalMethods = {
  install(Vue) {
    Vue.prototype.showModal = showModal;
    Vue.prototype.closeModal = closeModal;
  },
};

export default GlobalMethods;
