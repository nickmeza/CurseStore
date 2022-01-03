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
        <form id="form_agregar" class="formulario">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input type="text" name="correo" id="correo" placeholder="Correo">
            <input type="text" name="asunto" id="asunto" placeholder="Asunto">
            <textarea name="descripcion" id="descripcion" placeholder="Descripcion"></textarea>
            <button type="submit" class="btn btn-contact btn-green"><span>ENVIAR</span></button>
        </form>
    </div>
</div>
<?php
include_once "./vistas/cliente/component/footer.php";
?>