<?php
include_once "./vistas/cliente/component/header.php";
?>

<div class="container">
    <h1>Buscando <?php echo "$buscador" ?></h1>
    <section class="container-products">
        
    </section>
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>   
$.ajax({
        url: url + 'admin/curso/getByName/<?php echo "$buscador"?>',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            console.log(json)
            json.map((valores) => {
                $(".container-products").append(`
                <div class="product">
                    <img src=${valores.CURS_IMAGEN} alt="" class="product_img">
                    <div class="product__description">
                        <h3 class="product_title"> ${valores.CURS_NOMBRE}</h3>
                        <span class="product_price">S/.${valores.CURS_PRECIO}</span>
                        
                        </div>
                    <i class="product__icon fa fa-cart-plus"></i>

                </div>`)
            })
            console.log(json)
        }
    })

</script>

<?php
include_once "./vistas/cliente/component/footer.php";
?>