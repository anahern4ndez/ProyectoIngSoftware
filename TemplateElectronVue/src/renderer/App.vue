<template>
  <v-app style="background-color: #EEEEEE; font-family: Montserrat">
    <v-navigation-drawer
      :clipped="clipped"
      enable-resize-watcher app
      v-model="drawer"
      temporary
      class="quinto">
      <v-list class="pa-3 accent--text">
        <v-list-tile avatar tag="div">
          <v-list-tile-avatar>
            <img src="https://randomuser.me/api/portraits/men/85.jpg">
          </v-list-tile-avatar>

          <v-list-tile-content>
            <v-list-tile-title class="grey--text text--darken-3">John Leider</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
      <v-list class="accent--text">
        <v-list-tile to="/page-one" exact>
          <v-list-tile-action>
            <v-icon class="grey--text text--darken-3">fa-home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title class="grey--text text--darken-3">Menu Principal</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile to="/page-two" exact>
          <v-list-tile-action>
            <v-icon class="grey--text text--darken-3">fa-home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title class="grey--text text--darken-3">Gestionar Paciente</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile to="/page-three" exact>
          <v-list-tile-action>
            <v-icon class="grey--text text--darken-3">fa-home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title class="grey--text text--darken-3">Gestionar Usuario</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar color="quinto"
      fixed app
      :clipped-left="clipped">
      <v-toolbar-side-icon 
        class="grey--text text--darken-3"
        @click.stop="drawer = !drawer">
      </v-toolbar-side-icon>
      <v-toolbar-title class="grey--text text--darken-3">Gestión de Usuarios</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn icon class="grey--text text--darken-3">
          <v-icon>fa-bell</v-icon>
        </v-btn>
        <v-btn icon class="grey--text text--darken-3" to="/login">
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
        <div class="pa-3 accent--text">Fundadier</div>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data () {
    return {
      clipped: false,
      drawer: true,
      items: [
        {title: 'Title 1', icon: 'fa-home'}
      ]
    }
  }
}
</script>



