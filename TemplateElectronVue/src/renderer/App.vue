<template>
  <v-app style="background-color: #EEEEEE; font-family: Cabin">
    <v-navigation-drawer
      :clipped="clipped"
      enable-resize-watcher
      app
      v-model="drawer"
      temporary
      class="quinto"
      v-if="loggedIn"
    >
      <v-list class="pa-3 accent--text">
        <v-list-tile avatar tag="div">
          <v-list-tile-avatar>
            <img style="background-color:#fafafa" src="./assets/mariposaFundanier.png" />
          </v-list-tile-avatar>

          <v-list-tile-content>
            <v-list-tile-title class="grey--text text--darken-3">Sistema Fundanier</v-list-tile-title>
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
          v-if="$can(r.permission)"
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
      <v-toolbar-side-icon
        v-if="loggedIn"
        class="grey--text text--darken-3"
        @click.stop="drawer = !drawer"
      ></v-toolbar-side-icon>
      <v-toolbar-title class="grey--text text--darken-3">{{ activeRoute }}</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn
          v-if="loggedIn"
          icon
          class="grey--text text--darken-3"
          to="/login"
          v-on:click="logout"
        >
          <v-icon>fa-sign-out-alt</v-icon>
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>

    <v-dialog v-model="completeDialog" max-width="500px">
      <v-card>
        <v-card-title>
          <span class="headline">Error: Conexion inexistente con el servidor</span>
        </v-card-title>

        <v-card-text>
          <p>No hay conexion con el servidor, contacte al administrador del sistema</p>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" flat @click="completeDialog=false">OK</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

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
      completeDialog: false,
      drawer: true,
      items: [{ title: "Title 1", icon: "fa-home" }],
      activeRoute: "",
      routes: [
        { name: "Menu Principal", route: "/menu-principal", icon: "fa-home" },
        {
          name: "Gestionar Usuario",
          route: "/gestionUsuarios",
          icon: "fa-users",
          permission: "crear usuarios"
        },
        {
          name: "Gestión de Citas",
          route: "/Citas",
          icon: "fa-calendar-check",
          permission: "agendar citas"
        },
        {
          name: "Hemodialisis",
          route: "/Hemodialisis",
          icon: "fa-flag",
          permission: "realizar hemodialisis"
        },
        {
          name: "Estadísticas",
          route: "/EstadisticaGeneral",
          icon: "fa-flag",
          permission: "ver estadisticas"
        }
      ]
    };
  },
  methods: {
    logout() {
      this.$http
        .post("http://localhost:8000/logout")
        .then(response => {
          this.$store.commit("logout");
          this.$router.push("/login");
        })
        .catch(error => {
          this.completeDialog = true;
        });
    },
    setActiveRoute(name) {
      this.activeRoute = name;
    }
  },
  computed: {
    loggedIn() {
      if (this.$store.state.user && this.$store.state.user.id > 0) return true;
      return false;
    }
  }
};
</script>
<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Nunito");
@import url("https://fonts.googleapis.com/css?family=Cabin");
</style>



