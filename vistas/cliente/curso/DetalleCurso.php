<?php include_once "./vistas/cliente/component/header.php"; ?>
<!-- <div style="height:80px"></div> -->

<body>
    <main class="detalleCurso__container">
    </main>
    <div class="contenido__curso">
        <div class="intro-text--cc">
            <p>Contenido del curso</p>
            <span>90 secciones • 79 h 13 m de duración total</span>
        </div>
        <div class="curso__modulo">
            <div class="curso__modulo_header">
                <p class="curso__modulo_title">Introduccion al Desarrollo y Diseño Web <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg></p>
                <p class="curso__modulo_tiempo">3 clases• 6 min</p>
            </div>
            <div class="curso__modulo_body">
                <div class="curso__modulo_clase">
                    <div class="curso__modulo_title_container">
                        <span>Introduccion al curso</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>

                    <p class="curso__modulo_clase_duracion">
                        02:13
                    </p>
                </div>
                <div class="curso__modulo_descripcion">
                    <p>Veamos algunas de las herramientas que serán necesarias a lo largo del curso,
                        no te preocupes, de momento no es necesario instalar nada, habrá videos para cada parte
                    </p>
                </div>
            </div>
        </div>
    </div>
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
                            <button class="cta-anadir-cesta">Añadir a la cesta</button>
                            <button class="cta-add">Comprar ahora</button>
                        </div>
                    </div>
                    <div class="cover"><img src="${valores.CURS_IMAGEN}" alt="matebook"></div>
                </section>
                <img class="big-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/big-eclipse.svg" alt="">
                <img class="medium-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/mid-eclipse.svg" alt="">
                <img class="small-circle" src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/small-eclipse.svg" alt="">
                
                
                `)
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