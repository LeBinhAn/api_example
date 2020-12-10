require('./bootstrap');

window.Vue = require('vue');

Vue.component('product-list', require('./components/Product.vue').default);

const app = new Vue({
    el: '#app',
});
