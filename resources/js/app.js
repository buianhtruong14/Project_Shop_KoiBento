/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('trang_chu', require('./components/trang_chu.vue').default);
Vue.component('show', require('./components/show.vue').default);
Vue.component('dau_bep', require('./components/dau_bep.vue').default);
Vue.component('cart', require('./components/cart.vue').default);
Vue.component('dat_hang', require('./components/dat_hang.vue').default);
Vue.component('tin_tuc', require('./components/tin_tuc.vue').default);
Vue.component('ve_koi', require('./components/ve_koi.vue').default);
Vue.component('lien_he', require('./components/lien_he.vue').default);
Vue.component('combo', require('./components/combo.vue').default);
Vue.component('big_bento', require('./components/big_bento.vue').default);
Vue.component('mini_bento', require('./components/mini_bento.vue').default);
Vue.component('sushi', require('./components/sushi.vue').default);
Vue.component('api-calling', require('./components/ApiCalling.vue').default);
Vue.component('slide', require('./components/slide.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
