/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.Vue = require('vue');
import miniToastr from 'mini-toastr';
require('./bootstrap');
var Vue = require('vue');
window.Vue = require('vue');
window.axios = require('axios');
//Vue.use(require('vue-resource'));


const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    
};
axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';

// import Usuarios from './components/Usuarios.vue';
import TiposAnalisis from './components/TiposAnalisis.vue';
Vue.component('tipos-analisis', require('./components/TiposAnalisis.vue').default);
Vue.component('usuarios', require('./components/Usuarios.vue').default);
Vue.component('muestras', require('./components/Muestras.vue').default);
Vue.component('empleados', require('./components/Empleados.vue').default);
Vue.component('analisis', require('./components/Analisis.vue').default);
Vue.component('recepcionista', require('./components/Recepcionista.vue').default);
Vue.component('cliente', require('./components/Cliente.vue').default);
Vue.component('cliente-muestras', require('./components/ClienteMuestras.vue').default);
Vue.component('tecnico', require('./components/Tecnico.vue').default);
Vue.component('tecnico-muestras', require('./components/TecnicoMuestras.vue').default);


const app = new Vue({
    el: '#app',
    // components:{
    //     // ImageInput
    // },
    // template: '<product-list></product-list>'
});

