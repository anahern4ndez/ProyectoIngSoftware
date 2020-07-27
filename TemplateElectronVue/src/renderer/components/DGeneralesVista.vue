<template lang="">
  <div class="grey--text text--darken-2">
    <h1 class="text-center">Datos Generales</h1>
    <div>
      <b-container class="bv-example-row1">
        <b-row align-h="around" align-v="center">
          <b-col>
            <label class="text-center"><b>Peso:</b></label>
            <input id="peso" type="text" v-model="peso" class="form-control" placeholder="KG">
            <label class="text-center"><b>Talla:</b></label>
            <input id="talla" type="text" v-model="talla" class="form-control" placeholder="CMS">
            <label class="text-center"><b>P/A:</b></label>
            <input id="pa" type="text" v-model="pa" class="form-control" placeholder="">
          </b-col>
          <b-col>
              <label class="text-center"><b>Percentil</b></label>
              <input id="Percentil1" type="text" v-model="percentilPeso" class="form-control" placeholder="Percentil">
              <label class="text-center"><b>Percentil</b></label>
              <input id="Percentil2" type="text" v-model="percentilTalla" class="form-control" placeholder="Percentil">
              <label class="text-center"><b>Percentil</b></label>
              <input id="Percentil3" type="text" v-model="percentilPA" class="form-control" placeholder="Percentil">
          </b-col>
        </b-row>
        <label class="text-center"><b>Telefono</b></label>
          <input id="telefono" type="text" v-model="telefono" class="form-control" placeholder="telefono">
      </b-container>
    </div>
    <div>
      <b-container class="bv-example-row2">
        <b-row class="justify-content-md-center">
          <b-col>
            <button type="button" class="btn btn-lg btn-warning btn-block" v-on:click="agregar">Agregar</button>
          </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>


<script>
import { store } from "../main";
export default {
  mounted() {
    this.id = store.CUI;
  },
  data() {
    return {
      peso: "",
      id: "",
      telefono: "",
      talla: "",
      pa: "",
    };
  },
  methods: {
    agregar() {
      this.$http
        .put(
          `http://${process.env.SERVER_IP}:8000/DG/updateDG?id=${this.id}&Telefono=${this.telefono}&Peso=${this.peso}&Talla=${this.talla}&PA=${this.pa}`
        )
        .then((response) => {});
    },
  },
};
</script>
<style>
div#Tabla {
  float: right;
  align-items: center;
}
</style>