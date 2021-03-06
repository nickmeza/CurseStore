<?php
include_once "./vistas/cliente/component/header.php";
?>
<!-- slider -->
<div class="section slider-logo" style="margin-top: 80px;">
    <?php
    $datos = array();


    if (isset($banner)) {
        $datos = $banner;
        $i = 0;
    ?>
        <div class="section slider-banner set-height-top">
            <?php foreach ($datos as $dato) { ?>
                <div class="slider-item" style="background-image: url(<?php echo $GLOBALS['BASE_URL'] ?><?php echo $dato['BANNER_IMAGEN'] ?>);">
                    <div class="slider-1" style="background-image: url(<?php echo $GLOBALS['BASE_URL'] ?><?php echo strtr($dato['BANNER_IMAGEN'], " ", "%20"); ?>);">
                        <div class="slider-caption">
                            <div class="container">
                                <h5 class="text-info-2"><?php echo $dato['BANNER_TITULO']; ?></h5>

                                <h1 class="text-info-1"></h1>

                                <p class="text-info-3"></p>
                                <button class="btn btn-green"><span>Start learning now !</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++;
            } ?>
        </div>
    <?php } else { ?>

        <div class="section slider-banner set-height-top">
            <div class="slider-item">
                <div class="slider-1">
                    <div class="slider-caption">
                        <div class="container">
                            <h5 class="text-info-2">You only have to know one thing</h5>

                            <h1 class="text-info-1">You can learn anything</h1>

                            <p class="text-info-3">For free. For everyone</p>
                            <button class="btn btn-green"><span>Start learning now !</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-2">
                    <div class="slider-caption">
                        <div class="container">
                            <h5 class="text-info-2">You only have to know one thing</h5>

                            <h1 class="text-info-1">You can learn anything</h1>

                            <p class="text-info-3">For free. For everyone</p>
                            <button class="btn btn-green"><span>Start learning now !</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-3">
                    <div class="slider-caption">
                        <div class="container">
                            <h5 class="text-info-2">You only have to know one thing</h5>

                            <h1 class="text-info-1">You can learn anything</h1>

                            <p class="text-info-3">For free. For everyone</p>
                            <button class="btn btn-green"><span>Start learning now !</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<!-- Categorias -->
<div class="content__categorias">
    <div class="title_categoria">
        <h2>Categorias</h2>
    </div>

    <div class="main__categoria">

    </div>
</div>


<!-- Ofertas -->
<div class="cards__ofert">

</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>

<script>
    const slider = document.querySelector('.cards__ofert')
    const card_categoria = document.getElementsByClassName('card__categoria')
    const toggle_categoria = document.querySelector('.toggle__categoria')
    var curseCategoria = [];
    //Descuento
    $.ajax({
        url: url + 'admin/curso/getCursosDescuento',
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
                        <p><span style="text-decoration:line-through">Antes:S/.${valores.CURS_PRECIO}</span></p>
                        <span style="font-size:14px; color:#AAA">Ahora:</span>
                        <span style="color:#f8971d; font-size:20px"><strong> S/.${valores.CURS_DISCOUNT}</strong></span>
                        <div class="table-buy">
                        <a href="<?php echo $GLOBALS['BASE_URL'] ?>curso/detalle/${cambioSpace(valores.CURS_NOMBRE)}" class="pricing-action">Ver Oferta</a>
                        </div>    
                        </div>
                    </div>`)
            })
            console.log(json)
        }
    })
    //Categoria
    $.ajax({
        url: url + 'admin/categoria/getAll',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            json.map((valores, idx) => {
                $(".main__categoria").append(`
                <div class="card__categoria" onclick="location.href='${url +'categoria/'+ valores.CAT_NAME.replace(' ','-')}'">
                    <div class="content__categoria" style="--urlimg: url('${url + valores.CAT_IMAGEN}');">
                        <h3> ${valores.CAT_NAME} <br><span>${valores.CAT_DESCRIPCION}</span></h3>
                    </div>
                </div>
                `)
            })
            console.log(json)
            curseCategoria = document.getElementsByClassName("navigation__categoria")
        }
    })

    function cambioSpace(texto) {
        return texto.replace(/\s+/g, '-')
    }

    function aparecerCursos(idx, cat_id) {
        // card_categoria[idx].classList.toggle('active');
        $.ajax({
            url: url + 'admin/curso/getCursosDescuento',
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                json.map((valores) => {
                    const li = document.createElement('li')
                    const HTMLstring = `
                <div style="display:flex; width: 100%;">
                    <img style="width: 30%;" src="https://i.blogs.es/e1feab/google-fotos/450_1000.jpg" alt="">
                    <div style="width: 70%;">
                        <h3>${valores.CURS_NOMBRE + cat_id}</h3>
                        <p>${valores.CURS_DESCRIPCION}</p>
                    </div>
                </div>
                `;
                    li.innerHTML = HTMLstring;
                    curseCategoria[idx].append(li)
                })

                console.log(json)
            }
        })
    }
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>