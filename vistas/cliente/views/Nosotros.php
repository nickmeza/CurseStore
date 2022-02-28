<?php
include_once "./vistas/cliente/component/header.php";
$empresa = array();
?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<div class="contenedor">
    <h1>contacto</h1>
    <div class="contenido">
        <div class="info">
            <div class="col">
                <i class="icono fa fa-map-marker"></i>
                <p><?php if (isset($empresa['ubicacion'])) {
                        echo $empresa['ubicacion'];
                    } else {
                        echo "ubicacion de la empresa";
                    } ?></p>
            </div>
            <div class="col">
                <i class="icono fa fa-envelope"></i>
                <p><?php if (isset($empresa['correo'])) {
                        echo $empresa['correo'];
                    } else {
                        echo "correo de la empresa";
                    } ?></p>
            </div>
            <div class="col">
                <i class="icono fa fa-phone"></i>
                <p><?php if (isset($empresa['telefono'])) {
                        echo $empresa['telefono'];
                    } else {
                        echo "telefono de la empresa";
                    } ?></p>
            </div>
            <div class="redes-s">
                <a href="https://www.facebook.com/multispaceperu"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/3dmultispaceperu/"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/multispace-perú/?viewAsMember=true"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <form id="form_agregar_contacto" class="formulario">
            <input type="text" name="COR_NOMBRE" id="nombre" placeholder="Nombre">
            <input type="text" name="COR_CORREO" id="correo" placeholder="Correo">
            <input type="text" name="COR_ASUNTO" id="asunto" placeholder="Asunto">
            <textarea name="COR_DESCRIPCION" id="descripcion" placeholder="Descripcion"></textarea>
            <button type="submit" class="btn btn-contact btn-green"><span>ENVIAR</span></button>
        </form>
    </div>
</div>

<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    $("#form_agregar_contacto").submit(function(event) {
        event.preventDefault();
        console.log(new FormData(this).append('CLI_ID', <?php echo $idclient; ?>))
        $.ajax({
            type: 'POST',
            url: url + "admin/correos/create",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                if (JSON.parse(msg).status == 404) {
                    $(".mensaje__error").css("display", "block")
                } else {
                    location.href = url;
                }

            }
        });
    })
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>