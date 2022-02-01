<?php
include_once "./vistas/cliente/component/header.php";
?>
<style>
    .content__progreso {
        margin-top: 100px;
    }

    .titulo__progreso {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.8rem 0.8rem 0.8rem 1.6rem;
        border: 1px solid #d1d7dc;
        background-color: #fff;
    }

    .titulo__progreso>h4 {
        margin: 0px !important;
    }

    .cursos__progreso {
        width: 100%;
    }

    .video__progreso {
        flex: 7;
    }

    .modulo__progreso {
        flex: 3;
    }

    .flex {
        display: flex;
    }

    .content__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.8rem 1.6rem;
        background: #f7f9fa;
        width: 100%;
    }

    .iframe__progreso {
        display: block;
        width: 100%;
        height: 400px;
    }

    .content__item {
        overflow-y: hidden;
        height: 58.84px;
        transition: height 3s;
    }

    .sub__modulo__title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.8rem 1.6rem;
        border: 1px solid #d1d7dc;
        width: 100%;
    }

    .content__item.active {
        height: max-content;
    }

    .toggle__item__content {
        width: 40px;
        height: 40px;
        display: flex;
        font-size: 20px;
        transition: transform .3s;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 100;
    }

    .toggle__item__content.active {
        transform: rotate(90deg);

    }

    .video__content:hover {
        background: #f7f9fa;
    }

    .video__content {
        cursor: pointer;
        display: flex;
        align-items: flex-start;
        gap: 1.6rem;
        color: #1c1d1f;
        padding: 0.8rem 1.6rem;
    }

    .content__content {
        max-height: 80vh;
        overflow-y: auto;
    }

    .minutos__videos {
        color: #6a6f73;
    }
</style>
<div class="content__progreso">
    <div class="flex">
        <div class="video__progreso">
            <iframe class="iframe__progreso" src="https://www.youtube.com/embed/raSv24T4cjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="modulo__progreso">
            <div class="titulo__progreso">
                <h4>Contenido del curso</h4>
            </div>
            <div class="cursos__progreso">
                <div class="content__content">
                    <div class="content__item">
                        <div class="content__header" onclick="aparecerCursos(0)">
                            <div>
                                <b style="font-size: 16px;">Seccion 1:Introducción</b><br>
                                <b>4/4 | 25 min</b>
                            </div>
                            <div>
                                <div class="toggle__item__content"><img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/arrow-bottom.svg"></div>
                            </div>
                        </div>
                        <div class="content__body">
                            <div class="sub__modulo">
                                <div class="sub__modulo__title">
                                    <b>Sub-Modulo</b>
                                </div>
                                <div class="videos__modulo">
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>1. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>10 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>2. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>15 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub__modulo">
                                <div class="sub__modulo__title">
                                    <b>Sub-Modulo</b>
                                </div>
                                <div class="videos__modulo">
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>2. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>15 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>2. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>15 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__header" onclick="aparecerCursos(1)">
                            <div>
                                <b style="font-size: 16px;">Seccion 1:Introducción</b><br>
                                <b>4/4 | 25 min</b>
                            </div>
                            <div>
                                <div class="toggle__item__content"><img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/arrow-bottom.svg"></div>
                            </div>
                        </div>
                        <div class="content__body">
                            <div class="sub__modulo">
                                <div class="sub__modulo__title">
                                    <b>Sub-Modulo</b>
                                </div>
                                <div class="videos__modulo">
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>1. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>10 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>2. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>15 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub__modulo">
                                <div class="sub__modulo__title">
                                    <b>Sub-Modulo</b>
                                </div>
                                <div class="videos__modulo">
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>2. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>15 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video__content">
                                        <div class="checkbox__video">
                                            <input type="checkbox" name="STATUS_VIDEO" id="status">
                                        </div>
                                        <div class="datos__video">
                                            <div class="title__video">
                                                <span>2. Video de introducción</span>
                                            </div>
                                            <div class="minutos__videos">
                                                <span>15 min.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const itemsModule = document.getElementsByClassName('content__item')
    const itemsModuleArrow = document.getElementsByClassName('toggle__item__content')

    function aparecerCursos(ids) {
        itemsModule[ids].classList.toggle('active');
        itemsModuleArrow[ids].classList.toggle('active');
    }
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>