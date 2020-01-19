// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
//
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// Vue.component('example-component', require('./components/CargofyComponent.vue'));
// // Vue.component('route-component', require('./components/RouteComponent.vue'));
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// // $(document).ready(function(){
// //     $('.owl-carousel').owlCarousel({
// //         items: 1,
// //         URLhashListener: true,
// //         mouseDrag: false
// //     });
// // });
//
//
// const app = new Vue({
//     el: '#app',
// });


// App.js

// app.js

require('./bootstrap');

window.Vue = require('vue');

import {Form} from 'vform';

window.Form = Form;

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import CargofyComponent from './components/CargofyComponent.vue';

const routes = [
    {
        name: 'cargofy',
        path: '/',
        component: CargofyComponent
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');