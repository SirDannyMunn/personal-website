
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import vueAxios from 'vue-axios';
Vue.use(vueAxios, axios);

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
AOS.init();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('scroll-to-button', require('./components/ScrollToButton.vue'));
Vue.component('contact-modal', require('./components/ContactModal.vue'));
Vue.component('auto-animation', require('./components/AutoAnimation.vue'));
Vue.component('seek-animation', require('./components/SeekAnimation.vue'));
Vue.component('about-me', require('./components/AboutMe.vue'));
Vue.component('slash', require('./components/Slash.vue'));

import anime from 'animejs';

const app = new Vue({
    el: '#app',
    data: {
        burgerOpen: false
    },
    mounted() {
        anime({
            targets: '.polymorph',
            points: [
                { value: '70 41 118.574 59.369 111.145 132.631 60.855 84.631 20.426 60.369' },
                { value: '70 6 119.574 60.369 100.145 117.631 39.855 117.631 55.426 68.369' },
                { value: '70 57 136.574 54.369 89.145 100.631 28.855 132.631 38.426 64.369' },
                { value: '70 24 119.574 60.369 100.145 117.631 50.855 101.631 3.426 54.369' }
            ],
            easing: 'easeOutQuad',
            duration: 2000,
            loop: true
        });
    },
    methods: {
        scroll() {

        }
    }
});
