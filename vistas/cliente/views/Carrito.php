<?php
include_once "./vistas/cliente/component/header.php";
?>
<div class="container">
    <h1>Cesta</h1>
    <div class="carrito__compras">
        <div class="carrito__derecha">
            <div>
                <div>
                    <div class="titulo__carrito">
                        <h3>N cursos en la cesta</h3>
                    </div>
                    <div class="content__carrito">
                    </div>
                </div>
                <!-- <div>
                    <div class="titulo__carrito">
                        <h3>N cursos en la cesta</h3>
                    </div>
                    <div class="content__carrito2">
                    </div>
                </div> -->
            </div>

        </div>
        <div class="carrito__izquierda">
            <div>
                <div class="titulo__carrito">
                    <h3>Costos</h3>
                </div>
                <div class="pago__carrito">
                    <div class="total__carrito">

                    </div>
                    <div class="subtotal">

                    </div>
                    <div class="descuento">

                    </div>

                    <!-- HTML !-->
                    <button class="button-48" role="button" onclick="location.href='/metodo_pago'"><span class="text">Comprar</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    var precioTotal = 0
    var subTotal = 0
    var descuento = 0
    var idcurso = localStorage.getItem('idcurso') ? JSON.parse(localStorage.getItem('idcurso')) : []

    var formdata = new FormData();
    formdata.append('ids', JSON.stringify(idcurso))
    $.ajax({
        type: 'POST',
        url: url + "admin/curso/getByIds",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function(msg) {
            console.log(JSON.parse(msg))
            const resultado = JSON.parse(msg);
            $(".titulo__carrito h3").text(resultado.length + ' cursos en la cesta')
            resultado.map((valores, idx) => {
                CalcularPrecio(valores.CURS_PRECIO, valores.CURS_PRECIO, valores.CURS_PRICE_DISCOUNT ? valores.CURS_PRICE_DISCOUNT : 0)
                $(".content__carrito").append(`
                    <div class="card__carrito">
                    <div class="datelle__curso">
                        <div class="imagen__curso">
                            <img width="100%" height="100%" src="${valores.CURS_IMAGEN}">
                        </div>
                        <div class="descripcion__curso">
                            <div class="datos__curso">
                                <p class="p__carrito p__name">${valores.CURS_NOMBRE}</p>
                                <p class="p__carrito">${valores.CURS_DESCRIPCION}</p>
                            </div>
                            <div class="price__detail">
                            ${valores.CURS_DISCOUNT?
                            `<p class="p__carrito p__precio">S/. ${valores.CURS_DISCOUNT}</p>`:
                            ``
                            }
                            <p class="p__carrito ${valores.CURS_DISCOUNT?'':'p__precio'}"> S/. ${valores.CURS_PRECIO}</p>

                            </div>
                        </div>
                        <div class="precios__curso">
                        
                            ${valores.CURS_DISCOUNT?
                            `<p class="p__carrito p__precio">S/. ${valores.CURS_DISCOUNT}</p>`:
                            ``
                            }
                            <p class="p__carrito ${valores.CURS_DISCOUNT?'':'p__precio'}"> S/. ${valores.CURS_PRECIO}</p>

                        </div>
                        <div class="opciones__curso">
                            <div class='box-left'>
                                <i onclick =borrarCarrito(${valores.CURS_ID}) class='fa fa-times'></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="p__carrito">${valores.CURS_MODULOS} Modulos -  ${valores.CURS_VIDEOS} Videos</p>
                    </div>
                </div>`)
            })
            //location.href = url + "admin/categoria";
        }
    });

    function CalcularPrecio(precio, subprecio, descuentos) {


        subTotal = Number(subprecio) + Number(subTotal)
        console.log(subTotal)
        $('.subtotal').html("<p class='p__carrito p__separate'><b>S/" + subTotal + "</b>Sub Total</p>")

        descuento = Number(descuentos) + Number(descuento)
        console.log(descuento)
        $('.descuento').html("<p class='p__carrito p__separate'><b>S/" + descuento + "</b>Descuento</p>")

        precioTotal = Number(precio) + Number(precioTotal) - Number(descuentos)
        console.log(precioTotal)
        $('.total__carrito').html("<h1>S/" + precioTotal + "</h1>")
    }

    function borrarCarrito(idCurso) {
        let carrito = JSON.parse(localStorage.getItem('idcurso'))
        console.log(carrito.indexOf(idCurso))
        carrito.splice(carrito.indexOf(idCurso), 1)
        localStorage.setItem('idcurso', JSON.stringify(carrito))
        //location.reload()

    }
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>