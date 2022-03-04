<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<?php
include_once "./vistas/cliente/component/headerPerfil.php";
?>
<div class="title__peril">
    <h2>Perfil</h2>
</div>
<br>
<div class="form__pegil">
    <form id="form_editar_perfil">
        <div style="display: flex;justify-content: space-around; gap: 20px;">
            <div class="form-group w-100">
                <label for="nombre_perfil">Nombre</label>
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre_perfil">
            </div>
            <div class="form-group w-100">
                <label for="apellido_perfil">Apellido</label>
                <input class="form-control" type="text" placeholder="Apellido" name="apellido" id="apellido_perfil">
            </div>
        </div>
        <div style="display: flex;justify-content: space-around; gap: 20px;">
            <div class="form-group w-100">
                <label for="direccion_perfil">Direccion</label>
                <input class="form-control" type="text" placeholder="Direccion" name="direccion" id="direccion_perfil">
            </div>
            <div class="form-group w-100">
                <label for="usuario_perfil ">Usuario</label>
                <input class="form-control" type="text" placeholder="Usuario" name="usuario" id="usuario_perfil">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" role="button"><span class="text">Actualizar</span></button>
    </form>
</div>
<div class="title__peril">
    <h2>Modificar Contraseña</h2>
</div>
<br>
<div class="form__pegil">
        <form id="form_editar_contrasena">
    <div style="display: flex;justify-content: space-around; gap: 20px;">
        <div class="form-group w-100">
            <label for="exampleFormControlInput1">Contraseña actual</label>
            <input class="form-control" type="text" placeholder="Contraseña actual">
        </div>
        <div class="form-group w-100">
            <label for="exampleFormControlInput1">Nueva contraseña</label>
            <input class="form-control" type="text" placeholder="Nueva contraseña">
        </div>
    </div>
    <div style="display: flex;justify-content: space-around; gap: 20px;">
        <div class="form-group w-100">
            <label for="exampleFormControlInput1">Confirmar contraseña</label>
            <input class="form-control" type="text" placeholder="Confirmar contraseña">
        </div>
    </div>
    <button class="btn btn-primary" type="submit" role="button"><span class="text">Actualizar Contraseña</span></button>
</form>
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>

<script>
    $("#form_editar_perfil").submit(function(event) {
        event.preventDefault();
        console.log(new FormData(this))
        $.ajax({
            type: 'POST',
            url: url + "admin/usuario/cliente/update",
            data:new FormData(this), 
            contentType: false,
            cache: false,
            processData: false,
            success: function(json) {
                console.log(JSON.parse(json))
                JSON.parse(json).map((valores, idx) => {
                $(".container").append(`
                    <div class="card">
                    <img src=${valores.CURS_IMAGEN}">
                    <h4>${valores.CURS_NOMBRE}</h4>
                    <p>${valores.CURS_DESCRIPCION}</p>
                    <a href=${url+"curso/progreso/"+valores.CURS_NOMBRE}>Leer mas </a>
                    </div>
                `)
            })
            }
        });
    })
    $("#form_editar_contrasena").submit(function(event) {
        event.preventDefault();
        console.log(new FormData(this))
        $.ajax({
            type: 'POST',
            url: url + "admin/usuario/cliente/updateContraseña",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                location.href = url + "admin/categoria";
            }
        });
    })
</script>
<?php
include_once "./vistas/cliente/component/footerPerfil.php";
?>