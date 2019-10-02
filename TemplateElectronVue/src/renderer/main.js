import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import BootstrapVue from 'bootstrap-vue';

import App from './App';
import 'vuetify/dist/vuetify.min.css';
import '@fortawesome/fontawesome-free/css/all.css';
import './sass/app.scss';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'material-design-icons-iconfont/dist/material-design-icons.css';

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
    path: '/gestionarPaciente',
    component: Vue.component(
      'page-one',
      require('./components//gestionarPaciente.vue').default
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
    path: '/FormularioMortalidad',
    component: Vue.component(
      'FormularioMortalidad',
      require('./components/FormularioMortalidad.vue').default
    )
  },
  {
    path: '/FormularioHemodialisis',
    component: Vue.component(
      'FormularioHemodialisis',
      require('./components/FormularioHemodialisis.vue').default
    )
  },
  {
    path: '/FormularioTransfusiones',
    component: Vue.component(
      'FormularioTransfusiones',
      require('./components/FormularioTransfusiones.vue').default
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
      'cambioEstado',
      require('./components/Hemodialisis.vue').default
    )
  },
  {
    path: '/Peritonitis',
    component: Vue.component(
      'Peritonitis',
      require('./components/FormularioPeritonitis.vue').default
    )
  },
  {
    path: '/TransplanteRenal',
    component: Vue.component(
      'TransplanteRenal',
      require('./components/FormularioTransplanteRenal.vue').default
    )
  },
  {
    path: '/ColocacionCateter',
    component: Vue.component(
      'ColocacionCateter',
      require('./components/ColocacionCateter.vue').default
    )
  }
];

const router = new VueRouter({
  routes
});

Vue.use(Vuex);

export const store = new Vuex.Store({
  id: 0
});

/* eslint-disable no-new */
new Vue({
  router,
  render: h => h(App),
  mounted() {
    this.$router.push('/login');
  }
}).$mount('#app');
