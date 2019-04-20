<template>
  <v-app style="background-color: #5068a9; font-family: Montserrat">
    <v-navigation-drawer
      :clipped="clipped"
      enable-resize-watcher app
      v-model="drawer"
      temporary
      class="primary">
      <v-list class="pa-3 accent--text">
        <v-list-tile avatar tag="div">
          <v-list-tile-avatar>
            <img src="https://randomuser.me/api/portraits/men/85.jpg">
          </v-list-tile-avatar>

          <v-list-tile-content>
            <v-list-tile-title>John Leider</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
      <v-list class="accent--text">
        <v-list-tile to="/page-one" exact>
          <v-list-tile-action>
            <v-icon class="accent--text">fa-home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title class="accent--text">Page One</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile to="/page-two" exact>
          <v-list-tile-action>
            <v-icon class="accent--text">fa-home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title class="accent--text">Page Two</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar color="primary"
      fixed app
      :clipped-left="clipped">
      <v-toolbar-side-icon 
        color="primary"
        @click.stop="drawer = !drawer">
      </v-toolbar-side-icon>
      <v-toolbar-title class="accent--text">Title</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn icon class="accent--text">
          <v-icon>fa-bell</v-icon>
        </v-btn>
        <v-btn icon class="accent--text">
          <v-icon>fa-sign-out-alt</v-icon>
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>

    <v-content>
      <v-container fluid color="secondary">
        <router-view></router-view>
      </v-container>
    </v-content>
    <v-footer color="primary">
        <v-spacer></v-spacer>
        <div class="pa-3 accent--text">Footer</div>
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



