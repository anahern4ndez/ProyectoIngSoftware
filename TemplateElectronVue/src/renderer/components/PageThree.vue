<template lang="">
    <div class="grey--text text--darken-2">
        <h1 class="text-center">Ingreso de Usuario</h1>
        <br>
        <h4 class="grey--text text--darken-2">Elija su puesto de usuario</h4>
        <div>
            <br>
            <input type="radio" id="one" value="Doctor" v-model="picked">
            <label for="one"><h5 class="mx-3">Doctor</h5></label>
            <br>
            <input type="radio" id="two" value="Administrador" v-model="picked">
            <label for="two"><h5 class="mx-3">Administrador</h5></label>
            <br>
            <input type="radio" id="three" value="Secretaria" v-model="picked">
            <label for="three"><h5 class="mx-3">Secretaria</h5></label>
            <br>
            <input type="radio" id="four" value="Visitante" v-model="picked">
            <label for="four"><h5 class="mx-3">Visitante</h5></label>
            <br>
            <input type="radio" id="five" value="Asistente" v-model="picked">
            <label for="five"><h5 class="mx-3">Asietnte</h5></label>
            <br>
            <br>
            <span>Usted Selecciono: {{ picked }}</span>
            
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        picked: ''
      }
    }
  }
</script>