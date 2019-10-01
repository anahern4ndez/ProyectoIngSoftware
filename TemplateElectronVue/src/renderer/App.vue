<template>
  <v-app style="background-color: #EEEEEE; font-family: Cabin">
    <v-navigation-drawer
      :clipped="clipped"
      enable-resize-watcher
      app
      v-model="drawer"
      temporary
      class="quinto"
    >
      <v-list class="pa-3 accent--text">
        <v-list-tile avatar tag="div">
          <v-list-tile-avatar>
            <img src="https://randomuser.me/api/portraits/men/85.jpg" />
          </v-list-tile-avatar>

          <v-list-tile-content>
            <v-list-tile-title class="grey--text text--darken-3">John Leider</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
      <v-list class="accent--text">
        <v-list-tile
          :to="r.route"
          exact
          v-for="r in routes"
          v-bind:key="r.name"
          v-on:click="setActiveRoute(r.name)"
        >
          <v-list-tile-action>
            <v-icon class="grey--text text--darken-3">{{r.icon}}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title class="grey--text text--darken-3">{{r.name}}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar color="quinto" fixed app :clipped-left="clipped">
      <v-toolbar-side-icon class="grey--text text--darken-3" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title class="grey--text text--darken-3">{{ activeRoute }}</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn icon class="grey--text text--darken-3">
          <v-icon>fa-bell</v-icon>
        </v-btn>
        <v-btn icon class="grey--text text--darken-3" to="/login" v-on:click="logout">
          <v-icon>fa-sign-out-alt</v-icon>
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>

    <v-content>
      <v-container fluid color="secondary">
        <router-view></router-view>
      </v-container>
    </v-content>
    <v-footer color="#3A4750">
      <v-spacer></v-spacer>
      <div class="pa-3 accent--text" style="font-weight:bold; font-size:large;">Fundanier</div>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data() {
    return {
      clipped: false,
      drawer: true,
      items: [{ title: "Title 1", icon: "fa-home" }],
      activeRoute: "",
      routes: [
        { name: "Menu Principal", route: "/menu-principal", icon: "fa-home" },
        {
          name: "Gestionar Usuario",
          route: "/gestionUsuarios",
          icon: "fa-users"
        },
        {
          name: "Gestionar Paciente",
          route: "/gestionPacientes",
          icon: "fa-user-injured"
        },
        {
          name: "Gestión de Citas",
          route: "/Citas",
          icon: "fa-calendar-check"
        },
        { name: "Datos paciente", route: "/Datos", icon: "fa-user-injured" },
        { name: "Cambio Estado", route: "/cambioEstado", icon: "fa-flag" },
        { name: "Hemodialisis", route: "/Hemodialisis", icon: "fa-flag" },
        { name: "Peritonitis", route: "/Peritonitis", icon: "fa-flag" },
        {
          name: "Transplante Renal",
          route: "/TransplanteRenal",
          icon: "fa-flag"
        },
        {
          name: "Colocacion Cateter",
          route: "/ColocacionCateter",
          icon: "fa-flag"
        }
      ]
    };
  },
  methods: {
    logout() {
      this.$http.post("http://localhost:8000/logout").then(response => {
        this.$router.push("/login");
      });
    },
    setActiveRoute(name) {
      this.activeRoute = name;
    }
  }
};
</script>
<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Nunito");
@import url("https://fonts.googleapis.com/css?family=Cabin");
</style>



