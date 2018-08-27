
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import vueAxios from 'vue-axios';
Vue.use(vueAxios, axios);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('scroll-to-view', require('./components/ScrollToView.vue'));
Vue.component('hire-me-modal', require('./components/HireMeModal.vue'));
Vue.component('shape-animation', require('./components/ShapeAnimation.vue'));

const app = new Vue({
    el: '#app',
    mounted() {
        $('#toTheBlog').click(() => {
            $(window).scroll(0, window.innerHeight)
        });
    },
    methods: {
        scroll() {
            console.log('clicked');


        }
    }
});
