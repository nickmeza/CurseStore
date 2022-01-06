<?php include_once "./vistas/cliente/component/header.php"; ?>
<!-- <div style="height:80px"></div> -->

<body>
    <main class="detalleCurso__container">
        
    </main>
</body>

<!-- <div class="detalleCurso__container"></div> -->
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
                $(".detalleCurso__container").append(`
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
                            <button class="cta-select">Añadir a la cesta</button>
                            <button class="cta-add">Comprar ahora</button>
                        </div>
                    </div>
                    <div class="cover"><img src="https://www.hn.cl/wp-content/uploads/2020/11/BDM-1.png" alt="matebook"></div>
                </section>
                <img class="big-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/big-eclipse.svg" alt="">
                <img class="medium-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/mid-eclipse.svg" alt="">
                <img class="small-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/small-eclipse.svg" alt="">


    <div class="dC__container__body">
        <ul>
            <li>
                <span></span>
                <div class="title">Title</div>
                <div class="descripcion">descripcion</div>
            </li>
            <li>
                <span></span>
                <div class="title">Title</div>
                <div class="descripcion">descripcion</div>
            </li>
            <li>
                <span></span>
                <div class="title">Title</div>
                <div class="descripcion">descripcion</div>
            </li>
        </ul>
    </div>`)
            })
            console.log(json)
        }
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