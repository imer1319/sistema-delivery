require('./bootstrap');

window.Vue = require('vue');

Vue.component('grafica-component', require('./components/graficos.vue').default);

const app = new Vue({
    el: '#app'
});