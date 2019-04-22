<template>
    <div class="grey--text text--darken-2">
        <h1 class="text-center">Gestión de Usuarios</h1>
        <div id="Tabla">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="DPI de usuario a editar permisos">
            <div class="input-group-append">
              <button class="btn btn-warning" type="button">Buscar</button>
            </div>
          </div>
          <table class="table table-responsive">
              <thead>
                  <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                     <th>Email</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>[email protected]</td>
                  </tr>
                  <tr>
                      <td>Smith</td>
                      <td>Thomas</td>
                      <td>[email protected]</td>
                  </tr>
                  <tr>
                      <td>Merry</td>
                      <td>Jim</td>
                      <td>[email protected]</td>
                  </tr>
                  </tbody>
          </table>
        </div>
        <form class="col-4">
          <div class="form-group">
            <label for="nameInput">Nombre</label>
            <input id="nameInput" type="text" class="form-control" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="dpiInput">DPI</label>
            <input id="dpiInput" type="text" class="form-control" placeholder="DPI">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input id="emailInput" type="email" class="form-control" placeholder="Correo Electronico">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input id="passwordInput" type="password" class="form-control" placeholder="Contraseña">
          </div>
          <div>
            <label for="levelInput">Tipo de usuario</label>
            <b-form-select id="levelInput" v-model="selected" class="mb-3">
              <option value="Doctor">Doctor</option>
              <option value="Administrador">Administrador</option>
              <option value="Secretaria">Secretaria</option>
              <option value="Visitante">Visitante</option>
              <option value="Asistente">Asistente</option>
            </b-form-select>
          </div>
          <div>
            <button type="button" class="btn btn-warning">Crear</button>
            <button type="button" class="btn btn-warning">Modificar</button>
            <button type="button" class="btn btn-warning">Eliminar</button>
          </div>
        </form>
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
<script>
  export default {
    data() {
      return {
        selected: null
      }
    }
  }
</script>
<style>
div#Tabla{
  float: right;
  align-items: center;
}
</style>
