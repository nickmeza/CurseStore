<?php
include_once "./vistas/cliente/component/header.php";
?>
<div style="height:80px"></div>
<div class="detalleCurso__container">

</div>
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
                var id_video_yt = id__Yt.slice(32,43)
                console.log("hola = "+id_video_yt);
                $(".detalleCurso__container").append(`

                <div class="detalleCurso__header">
        <div class="detalleCurso__Htitle_descripcion">
            <h1>${valores.CURS_NOMBRE}</h1>
            <span>${valores.CURS_DESCRIPCION}</span>
        </div>
        <div class="detalleCurso__Hcard">
            <div class="dC__H_video">
            <iframe  src="https://www.youtube.com/embed/${id_video_yt}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h1>S/. ${valores.CURS_PRECIO}</h1>
            <button class="dC__añadir_cesta"><span>Añadir a la cesta</span></button>
            <button class="dc__comprar_ahora"><span>Comprar ahora</span></button>
        </div>
    </div>
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
<?php
include_once "./vistas/cliente/component/footer.php";
?>