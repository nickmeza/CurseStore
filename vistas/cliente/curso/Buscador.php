<?php
include_once "./vistas/cliente/component/header.php";
?>

<div class="container">
    <h1>Buscando <?php echo "$buscador" ?></h1>
    <section class="container-products">
        <div class="product">
            <img src="https://storage.googleapis.com/site.esss.co/fc960fa4-share-cursos-online-esp.jpg" alt="" class="product_img">
            <div class="product__description">
                <h3 class="product_title">Nombre del curso</h3>
                <span class="product_price">S/.50</span>
            </div>
            <i class="product__icon fa fa-cart-plus"></i>

        </div>
        <div class="product">
            <img src="https://storage.googleapis.com/site.esss.co/fc960fa4-share-cursos-online-esp.jpg" alt="" class="product_img">
            <div class="product__description">
                <h3 class="product_title">Nombre del curso</h3>
                <span class="product_price">S/.50</span>
            </div>
            <i class="product__icon fa fa-cart-plus"></i>
        </div><div class="product">
            <img src="https://storage.googleapis.com/site.esss.co/fc960fa4-share-cursos-online-esp.jpg" alt="" class="product_img">
            <div class="product__description">
                <h3 class="product_title">Nombre del curso</h3>
                <span class="product_price">S/.50</span>
            </div>
            <i class="product__icon fa fa-cart-plus"></i>
        </div><div class="product">
            <img src="https://storage.googleapis.com/site.esss.co/fc960fa4-share-cursos-online-esp.jpg" alt="" class="product_img">
            <div class="product__description">
                <h3 class="product_title">Nombre del curso</h3>
                <span class="product_price">S/.50</span>
            </div>
            <i class="product__icon fa fa-cart-plus"></i>
        </div>
    </section>
</div>
<script>
$.ajax({
        url: url + 'admin/curso/buscar/'<?php echo "$buscador" ?>,
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            json.map((valores) => {
                $(".cards__ofert").append(`
                <div class="card__ofert card2__ofert">
                <div class="container__ofert">
                <div class="ribbon">OFERTA</div>
                <img class="img__ofert"  src="${valores.CURS_IMAGEN}" alt="las vegas">
                    </div>
                    <div class="details__ofert">
                    <h3>${valores.CURS_NOMBRE}</h3>
                        <p>${valores.CURS_DESCRIPCION}</p>
                        <p><span style="text-decoration:line-through">${valores.CURS_DISCOUNT}</span></p>
                        <span style="font-size:14px; color:#AAA">Ahora:</span>
                        <span style="color:#f8971d; font-size:20px"><strong> S/.${valores.CURS_PRECIO}</strong></span>
                        <div class="table-buy">
                        <a href="#" class="pricing-action">Ver Oferta</a>
                        </div>    
                        </div>
                    </div>`)
            })
            console.log(json)
        }
    })

</script>

<?php
include_once "./vistas/cliente/component/footer.php";
?>