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
                <div class="slider-item">
                    <div class="slider-1" style="background-image:url('<?php echo $GLOBALS['BASE_URL'] . $dato['BANNER_IMAGEN'] ?>')">
                        <div class="slider-caption">
                            <div class="container">
                                <h5 class="text-info-2"><?php echo $dato['BANNER_IMAGEN'] ?></h5>

                                <h1 class="text-info-1">You can learn anything</h1>

                                <p class="text-info-3">For free. For everyone</p>
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
<div class="main__categoria">
    
</div>
<!-- Ofertas -->
<div class="cards__ofert">
    <div class="card__ofert card1__ofert">
        <div class="container__ofert">
            <img class="img__ofert" src="https://ichef.bbci.co.uk/news/640/cpsprodpb/870D/production/_111437543_197389d9-800f-4763-8654-aa30c04220e4.png" alt="las vegas">
        </div>
        <div class="details__ofert">
            <h3>Tecnología</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
        </div>
    </div>
</div>

<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>

<script>
    const slider = document.querySelector('.cards__ofert')
    const card_categoria = document.querySelector('.card__categoria')
    const toggle_categoria = document.querySelector('.toggle__categoria')
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
                <img class="img__ofert"  src="${valores.CURS_IMAGEN}" alt="las vegas">
                    </div>
                    <div class="details__ofert">
                    <h3>${valores.CURS_NOMBRE}</h3>
                        <p>${valores.CURS_DESCRIPCION}</p>
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
                <div class="card__categoria">
                    <div class="content__categoria cat${idx}" style="--urlimg: url('${valores.CAT_IMAGEN}');">
                        <h2> ${valores.CAT_NAME} <br><span>${valores.CAT_DESCRIPCION}</span></h2>
                    </div>
                    <ul class="navigation__categoria">
                        <li>
                            <a href="#">
                                Edit Profile
                            </a>
                        </li>
                    </ul>
                    <div class="toggle__categoria togcat${idx}">↓</div>
                </div>
                `)
            })
            toggle_categoria.onclick = function() {
                card_categoria.classList.toggle('active');
            }
            console.log(json)
        }
    })
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>