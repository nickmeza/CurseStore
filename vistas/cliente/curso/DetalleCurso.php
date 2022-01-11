<?php include_once "./vistas/cliente/component/header.php"; ?>

<body>
    <main class="detalleCurso___container"></main>
    <?php
    $i = 0;
    $i2 = 0;
    $data_mod = array();
    $mod = Curso_Modelo::getOneIdByName($buscador);
    $dateModulo = Modulo_Modelo::getAllbyCurse($mod);
    if (isset($dateModulo)) {
        $data_mod = $dateModulo;
        foreach ($data_mod as $contador) {
            $dateSModulo = SubModulo_Modelo::getbyMod($contador['MOD_ID']);
            foreach ($dateSModulo as $values_moduloss) {
                $i2++;
            }
            $i++;
        }
    ?>
        <div class="contenido__curso">
            <div class="intro-text--cc">
                <p>Contenido del curso</p>
                <span><?php echo $i ?> secciones • <?php echo $i2 ?> módulos • Horas de pura de duración total</span>
            </div>
            <nav class="nav__dc">
                <ul class="nav__dc__lista">
                    <?php foreach ($data_mod as $value) { ?>
                        <li class="lista__item lista__item--click">
                            <div class="lista__button list__button--click">
                                <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/play-dc.svg" alt="" class="lista__img">
                                <a href="#" class="nav__link"><?php echo $value['MOD_NOMBRE'] ?></a>
                                <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/arrow-bottom.svg" alt="" class="lista__arrow">
                            </div>
                            <?php
                            $data_smod = array();
                            $dateSModulo = SubModulo_Modelo::getbyMod($value['MOD_ID']);
                            if (isset($dateSModulo)) {
                                $data_smod = $dateSModulo;
                            ?>
                                <ul class="list__show">
                                    <?php foreach ($data_smod as $value_smod) { ?>
                                        <li class="lista__inside">
                                            <a href="#" class="nav__link nav__link--inside"><?php echo $value_smod['SMOD_NOMBRE'] ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    <?php
    } else { ?>
        <div class="data_available" style="padding: 30px;">
            data available
        </div>
    <?php } ?>
</body>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>

<script>
    //Descuento
    $.ajax({
        url: url + 'admin/curso/getByName/<?php echo $buscador ?>',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            json.map((valores) => {
                var id__Yt = valores.CURS_URL_VIDEO;
                var id_video_yt = id__Yt.slice(32, 43)
                console.log("hola = " + id_video_yt);
                $(".detalleCurso___container").append(`
                <section class="presentation">
                    <div class="introduction">
                        <div class="intro-text">
                            <h1>${valores.CURS_NOMBRE}</h1>
                            <p>
                                ${valores.CURS_DESCRIPCION}
                            </p>
                        </div>
                        <div class="coste">
                            <p>S/. ${valores.CURS_PRECIO}</p>
                        </div>
                        <div class="cta">
                            <button class="cta-anadir-cesta">Añadir a la cesta</button>
                            <button class="cta-add">Comprar ahora</button>
                        </div>
                    </div>
                    <div class="cover">
                        <img src="${valores.CURS_IMAGEN}" alt="matebook">
                    </div>
                </section>
                <img class="big-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/big-eclipse.svg" alt="">
                <img class="medium-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/mid-eclipse.svg" alt="">
                <img class="small-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/small-eclipse.svg" alt="">
                
                
                `)
            })
            console.log(json)
        }
    })

    let listElements = document.querySelectorAll('.list__button--click');
    listElements.forEach(listElements => {
        listElements.addEventListener('click', () => {
            listElements.classList.toggle('arrow');
            let height = 0;
            let menu = listElements.nextElementSibling;
            if (menu.clientHeight == "0") {
                height = menu.scrollHeight;
            }

            menu.style.height = height + "px";

        })
    })

    // var tag = document.createElement('script');
    // tag.src = "https://www.youtube.com/iframe_api";
    // var firstScriptTag = documento.getElementsByClassName('dC__H_video')[0];
    // firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // var player;
    // function onYouTubeIframeAPIReady() {
    //     player = new YT.Player('dC__H_video')
</script>
<?php include_once "./vistas/cliente/component/footer.php"; ?>