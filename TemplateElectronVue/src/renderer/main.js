import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import BootstrapVue from 'bootstrap-vue'

import App from './App';
import 'vuetify/dist/vuetify.min.css';
import '@fortawesome/fontawesome-free/css/all.css';
import './sass/app.scss';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

if (!process.env.IS_WEB) Vue.use(require('vue-electron'));
Vue.http = Vue.prototype.$http = axios;
Vue.config.productionTip = false;

// Vue plugins registration
Vue.use(BootstrapVue);
Vue.use(VueAxios, axios);
Vue.use(VueRouter);
Vue.use(Vuetify, {
    iconfont: 'fa',
    theme: {
        primary: '#324e7b',
        secondary: '#5068a9',
        tercero: '#303841',
        cuarto: '#3A4750',
        quinto: '#EA9215',
        sexto: '#EEEEEE',
        accent: '#f8f8f8',
    }
});

const routes = [
  {
    path: '/login',
    component: Vue.component('login', require('./components/Login.vue').default)
  },
  {
    path: '/page-one',
    component: Vue.component('page-one', require('./components/PageOne.vue').default)
  },
  {
    path: '/page-two',
    component: Vue.component('page-two', require('./components/PageTwo.vue').default)
  },
  {
    path: '/page-three',
    component: Vue.component('page-three', require('./components/PageThree.vue').default)
  },
  {
    path: '/page-four',
    component: Vue.component('page-four', require('./components/GestionPacientes.vue').default)
  },
  {
    path: '/ingresarPaciente',
    component: Vue.component('ingresarPaciente', require('./components/IngresarPaciente.vue').default)
  },
  {
    path: '/EditarPaciente',
    component: Vue.component('EditarPaciente', require('./components/EditarPaciente.vue').default)
  },
  {
    path: '/EditarEstadoPaciente',
    component: Vue.component('EditarEstadoPaciente', require('./components/EditarEstadoPaciente.vue').default)
  },
  {
    path: '/darConsulta',
    component: Vue.component('darConsulta', require('./components/DarConsulta.vue').default)
  },
  {
    path: '/Consulta',
    component: Vue.component('Consulta', require('./components/Consulta.vue').default)
  }
];

const router = new VueRouter({
    routes
});

/* eslint-disable no-new */
new Vue({
  router,
  render: h => h(App),
  mounted () {
    this.$router.push('/Consulta')
  }
}).$mount('#app');
