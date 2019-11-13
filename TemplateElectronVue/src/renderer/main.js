import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import BootstrapVue from 'bootstrap-vue';
import Permissions from './mixins/Permissions';

import App from './App';
import 'vuetify/dist/vuetify.min.css';
import '@fortawesome/fontawesome-free/css/all.css';
import './sass/app.scss';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'material-design-icons-iconfont/dist/material-design-icons.css';

import VueScrollLock from 'vue-scroll-lock';

if (!process.env.IS_WEB) Vue.use(require('vue-electron'));
Vue.http = Vue.prototype.$http = axios;
Vue.config.productionTip = false;

// Vue plugins registration
Vue.use(BootstrapVue);
Vue.use(VueAxios, axios);
Vue.use(VueRouter);
Vue.use(VueScrollLock);
//Vue.use(abilitiesPlugin, ability);
Vue.use(Vuetify, {
  iconfont: 'fa',
  theme: {
    primary: '#324e7b',
    secondary: '#5068a9',
    tercero: '#303841',
    cuarto: '#3A4750',
    quinto: '#EA9215',
    sexto: '#EEEEEE',
    accent: '#f8f8f8'
  }
});

const routes = [
  {
    path: '/login',
    component: Vue.component('login', require('./components/Login.vue').default)
  },
  {
    path: '/page-one',
    component: Vue.component(
      'page-one',
      require('./components/PageOne.vue').default
    )
  },
  {
    path: '/gestionarPaciente/:idPaciente/:cui',
    name: 'gestionarPaciente',
    component: Vue.component(
      'gestionarPaciente',
      require('./components/gestionarPaciente.vue').default
    )
  },
  {
    path: '/History',
    component: Vue.component(
      'History',
      require('./components/History.vue').default
    )
  },
  {
    path: '/gestionUsuarios',
    component: Vue.component(
      'gestionUsuarios',
      require('./components/gestionUsuarios.vue').default
    )
  },
  {
    path: '/gestionPacientes',
    component: Vue.component(
      'gestionPacientes',
      require('./components/gestionPacientes.vue').default
    )
  },
  {
    path: '/ingresarPaciente',
    component: Vue.component(
      'ingresarPaciente',
      require('./components/IngresarPaciente.vue').default
    )
  },
  {
    path: '/EditarPaciente/:cui',
    name: 'EditarPaciente',
    component: Vue.component(
      'EditarPaciente',
      require('./components/EditarPaciente.vue').default
    )
  },
  {
    path: '/Consulta',
    name: 'Consulta',
    component: Vue.component(
      'Consulta',
      require('./components/Consulta.vue').default
    )
  },
  {
    path: '/menu-principal',
    component: Vue.component(
      'MenuPrincipal',
      require('./components/MenuPrincipal.vue').default
    )
  },
  {
    path: '/Citas',
    component: Vue.component(
      'Citas',
      require('./components/CreacionCitas.vue').default
    )
  },
  {
    path: '/DatosG',
    component: Vue.component(
      'DatosG',
      require('./components/DGeneralesVista.vue').default
    )
  },
  {
    path: '/Datos',
    component: Vue.component(
      'Datos',
      require('./components/DatosVista.vue').default
    )
  },
  {
    path: '/EstadisticaGeneral',
    component: Vue.component(
      'EstadisticaGeneral',
      require('./components/EstadisticaGeneral.vue').default
    )
  },
  {
    path: '/cambioEstado/:cui',
    name: 'cambioEstado',
    component: Vue.component(
      'cambioEstado',
      require('./components/cambioEstado.vue').default
    )
  },
  {
    path: '/Hemodialisis',
    component: Vue.component(
      'Hemodialisis',
      require('./components/Hemodialisis.vue').default
    )
  },
  {
    path: '/gestionFormularios/:cui/:nombre/:apellido',
    name: 'gestionFormularios',
    component: Vue.component(
      'gestionFormularios',
      require('./components/gestionFormularios.vue').default
    )
  }
];

const router = new VueRouter({
  routes
});

Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {
    id: 0,
    pacientes: [],
    user: {
      id: 0,
      role: 0,
      permissions: []
    }
  },
  mutations: {
    saveUserData(state, data) {
      state.user.id = data.id;
      state.user.role = data.role;
      state.user.permissions = data.permissions;
    },
    logout(state) {
      state.user.id = 0;
      state.user.role = 0;
      state.user.permissions = [];
    }
  }
});

// global permissions mixin
Vue.mixin(Permissions);

/* eslint-disable no-new */
new Vue({
  router,
  store,
  render: h => h(App),
  mounted() {
    this.$router.push('/login');
  }
}).$mount('#app');
