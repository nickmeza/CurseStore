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
                        <div class="card__carrito">
                            <div class="datelle__curso">
                                <div class="imagen__curso">
                                    <img width="100%" height="100%" src="https://www.segg.es/media/noticias/344/cursos.jpg">
                                </div>
                                <div class="descripcion__curso">
                                    <div class="datos__curso">
                                        <p class="p__carrito p__name">Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL</p>
                                        <p class="p__carrito">Por Juan Pablo De la torre Valdez, Creador de Código Con Juan - Aprende Con Proyectos Reales</p>
                                    </div>
                                    <div class="price__detail">
                                        <p class="p__carrito p__precio">49,90 S/</p>
                                        <p class="p__carrito">329,90 S/</p>
                                    </div>
                                </div>
                                <div class="precios__curso">
                                    <p class="p__carrito p__precio">49,90 S/</p>
                                    <p class="p__carrito">329,90 S/</p>
                                </div>
                                <div class="opciones__curso">
                                    <div class='box-left'>
                                        <i class='fa fa-times'></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="p__carrito">estrellas</p>
                                <p class="p__carrito">clases - modulos - nivel</p>
                                <p class="p__carrito">opciones</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="titulo__carrito">
                        <h3>N cursos en la cesta</h3>
                    </div>
                    <div class="content__carrito">
                        <div class="card__carrito">
                            <div class="datelle__curso">
                                <div class="imagen__curso">
                                    <img width="100%" height="100%" src="https://www.segg.es/media/noticias/344/cursos.jpg">
                                </div>
                                <div class="descripcion__curso">
                                    <div class="datos__curso">
                                        <p class="p__carrito p__name">Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL</p>
                                        <p class="p__carrito">Por Juan Pablo De la torre Valdez, Creador de Código Con Juan - Aprende Con Proyectos Reales</p>
                                    </div>
                                    <div class="price__detail">
                                        <p class="p__carrito p__precio">49,90 S/</p>
                                        <p class="p__carrito">329,90 S/</p>
                                    </div>
                                </div>
                                <div class="precios__curso">
                                    <p class="p__carrito p__precio">49,90 S/</p>
                                    <p class="p__carrito">329,90 S/</p>
                                </div>
                                <div class="opciones__curso">
                                    <a href="">Eliminar</a>
                                    <a href="">Guardar</a>

                                </div>
                            </div>
                            <div>
                                <p class="p__carrito">estrellas</p>
                                <p class="p__carrito">clases - modulos - nivel</p>
                                <p class="p__carrito">opciones</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="carrito__izquierda">
            <div>
                <div class="titulo__carrito">
                    <h3>Costos</h3>
                </div>
                <div class="pago__carrito">
                    <div class="total__carrito">
                        <h1>S/49,90</h1>
                    </div>
                    <p class="p__carrito p__separate"><b>S/329,90</b>Sub Total</p>
                    <p class="p__carrito p__separate"><b>S/280</b>Descuento</p>
                    <!-- HTML !-->
                    <button class="button-48" role="button" onclick="location.href='/metodo_pago'"><span class="text">Comprar</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
           var idcurso = localStorage.getItem('idcurso') ?JSON.parse(localStorage.getItem('idcurso')):[]

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
                        resultado.map((valores, idx) => {
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
                                        <p class="p__carrito p__precio">S/. ${valores.CURS_PRECIO}</p>
                                        <p class="p__carrito">329,90 S/</p>
                                    </div>
                                </div>
                                <div class="precios__curso">
                                    <p class="p__carrito p__precio"> S/. ${valores.CURS_PRECIO}</p>
                                    <p class="p__carrito">329,90 S/</p>
                                </div>
                                <div class="opciones__curso">
                                    <div class='box-left'>
                                        <i class='fa fa-times'></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="p__carrito">estrellas</p>
                                <p class="p__carrito">clases - modulos - nivel</p>
                                <p class="p__carrito">opciones</p>
                            </div>
                        </div>`)
                        })
                        //location.href = url + "admin/categoria";
                    }
                });
          
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>