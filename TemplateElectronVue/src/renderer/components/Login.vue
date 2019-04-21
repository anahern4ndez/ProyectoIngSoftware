<template>
    <div class="body">
        <form class="form-signin">
            <img src="../assets/imagenLogo.png" alt="" width="500" height="200">

            <div class="text-center texto">
                Por favor, ingrese sus credenciales
            </div>

            <label for="inputEmail" class="sr-only">Usuario</label>
            <input 
                type="text" 
                class="form-control"
                autofocus=""
                id="inpuUsuario" 
                placeholder="Usuario"
                oninvalid="setCustomValidity('Ingrese su usuario')"
                oninput="setCustomValidity('')" 
                required 
            >

            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input 
                type="password" 
                id="inputPassword" 
                class="form-control" 
                placeholder="Contraseña" 
                oninvalid="setCustomValidity('Ingrese su constraseña')"
                oninput="setCustomValidity('')" 
                required>
            
            <button class="btn btn-lg btn-warning btn-block" type="submit">Ingresar</button>
            
        </form>
    </div>
</template>

<script>
export default {
    
}
</script>