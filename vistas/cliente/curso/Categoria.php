<?php
include_once "./vistas/cliente/component/header.php";
?>
<div id=" ciertacosa">asd categoria</div>

<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    
    $.ajax({
        url: url + 'admin/modulo/admin_modulo_get_all',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            console.log(json)
        }
    })
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>