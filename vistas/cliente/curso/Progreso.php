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
        <?php
        $i = 0;
        $i2 = 0;
        $data_mod = array();
        $dateModulo = Modulo_Modelo::getAllbyCurse($mod);
        $idModuloSelected = SubModulo_Modelo::getidModuloBySubmodulo($subModulo);

        if (isset($dateModulo)) {
            $data_mod = $dateModulo;
            foreach ($data_mod as $contador) {
                $dateSModulo = SubModulo_Modelo::getbyMod($contador['MOD_ID']);
                foreach ($dateSModulo as $values_moduloss) {
                    $i2++;
                }
                $i++;
            }
        }
        if (isset($idVideo)) {
            $video_dato = Video_Modelo::getOne($idVideo);
        } else {
            $video_submodulo = Video_Modelo::getAllVideoSubmodul($subModulo);
        }

        ?>
        <?php if (isset($idVideo) && isset($video_dato)) {
        ?>
            <div class="video__progreso">

                <iframe class="iframe__progreso" src="<?php echo "https://www.youtube.com/embed/" . substr($video_dato["VI_URL"], 32, 39) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <?php } else { ?>
            <div class="video__progreso">
                <iframe class="iframe__progreso" src="<?php echo "https://www.youtube.com/embed/" . substr($video_submodulo[0]["VI_URL"], 32, 39) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <?php } ?>

        <div class="modulo__progreso">
            <div class="titulo__progreso">
                <h4>Contenido del curso:<?php echo $buscador ?> </h4>
            </div>
            <div class="cursos__progreso">
                <div class="content__content">

                    <?php
                    $i = 0;
                    foreach ($data_mod as $value) {  ?>
                        <div class="content__item <?php if ($value["MOD_ID"] == $idModuloSelected["MOD_ID"]) {
                                                        echo "active";
                                                    } ?>">
                            <div class="content__header" onclick="aparecerCursos(<?php echo $i ?>)">
                                <div>
                                    <b style="font-size: 16px;"> <?php echo $value['MOD_NOMBRE'] ?></b><br>
                                    <b>4/4 | 25 min</b>
                                </div>
                                <div>
                                    <div class="toggle__item__content <?php if ($value["MOD_ID"] == $idModuloSelected["MOD_ID"]) {
                                                                            echo "active";
                                                                        } ?>"><img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/detail_curse/arrow-bottom.svg"></div>
                                </div>
                            </div>
                            <div class="content__body">
                                <?php
                                $j = 0;

                                $dateSModulo = SubModulo_Modelo::getbyMod($value['MOD_ID']);

                                foreach ($dateSModulo as $submodulo) {  ?>
                                    <div class="sub__modulo">
                                        <div class="sub__modulo__title">
                                            <b><?php echo $submodulo['SMOD_NOMBRE'] ?></b>
                                        </div>
                                        <div class="videos__modulo">
                                            <?php
                                            $k = 0;
                                            $dataVideos = Video_Modelo::getAllVideoSubmodul($submodulo['SMOD_ID']);
                                            var_dump($submodulo['SMOD_ID']);
                                            foreach ($dataVideos as $videito) {  ?>

                                                <div class="video__content">
                                                    <div class="checkbox__video">
                                                        <input onchange='crearCheck(<?php echo $videito["VI_ID"]; ?>)' <?php if ($videito["CHECK_ESTADO"] == 1) {
                                                                                                                            echo "checked";
                                                                                                                        }  ?> type="checkbox" name="STATUS_VIDEO" id="status">
                                                    </div>
                                                    <a href="<?php echo $GLOBALS['BASE_URL'] . 'curso/progreso/' . strtr($data[3], " ", "-") . "/" . $subModulo . "/" . $videito['VI_ID']; ?>">
                                                        <div class="datos__video">
                                                            <div class="title__video">
                                                                <span><?php echo $videito['VI_DESCRIPCION'] ?></span>
                                                            </div>
                                                            <div class="minutos__videos">
                                                                <span>10 min.</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    <?php $i++;
                    } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>

<script>
    const itemsModule = document.getElementsByClassName('content__item')
    const itemsModuleArrow = document.getElementsByClassName('toggle__item__content')

    function aparecerCursos(ids) {
        itemsModule[ids].classList.toggle('active');
        itemsModuleArrow[ids].classList.toggle('active');
    }
    //createVideoCheck
    function crearCheck(idvideo) {
        alert(idvideo)
        var formData = new FormData();
        formData.append("", "");
        $.ajax({
            type: 'POST',
            url: url + "admin/curso/createVideoCheck",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg);
            }
        });
    }
</script>
<?php
include_once "./vistas/cliente/component/footer.php";
?>