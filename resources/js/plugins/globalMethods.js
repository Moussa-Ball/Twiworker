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
const closeModal = function (name) {
  document.querySelector("body").classList.remove("overflow-hidden");
  this.$modal.hide(name);
};

/**
 * Check if an array contains object.
 * @param {*} obj 
 * @param {*} list 
 */
const contains = function (obj, list) {
    var i;
    for (i = 0; i < list.length; i++) {
        if (list[i] === obj) {
            return obj;
        }
    }

    return {};
}


const GlobalMethods = {
  install(Vue) {
    Vue.prototype.contains = contains;
    Vue.prototype.showModal = showModal;
    Vue.prototype.closeModal = closeModal;
  },
};

export default GlobalMethods;
