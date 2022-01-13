<?php include_once "./vistas/cliente/component/header.php"; ?>

<style>
    .container__search {
        margin-top: 100px;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 50px;
        min-height: 40vh;
    }

    .container__date__Search {
        display: flex;
        gap: 10px;
        padding: 10px 30px 10px 0;
        width: 90vw;
        cursor: pointer;
        height: auto;
        line-height: 10px;
        justify-content: space-between;
        margin: 0;
        border-bottom: 1px solid #ccc
    }

    .container__date__Search-inside {
        display: flex;
        gap: 10px;
        cursor: pointer;
        height: auto;
        line-height: 10px;
        margin: 0;

    }

    .align__text-s {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .container__date__Search-inside:hover {
        background-color: #f6f8fa;
    }

    .icons__search {
        display: flex;
        line-height: 10px;
        justify-content: center;
        gap: 20px;
    }
</style>

<body>
    <?php ?>
    <?php if (strlen($buscador) > 0) { ?>
        <div class="container__search">
            <h1>Resultados de la busqueda:</h1>
            <div class="resultado__search">
                <?php
                $dates__search;
                $date__search = Curso_Modelo::getByName($buscador);
                if (count($date__search) > 0) {
                    $dates__search = $date__search;
                    foreach ($dates__search as $date__s) {
                        $name__search = $date__s['CURS_NOMBRE'];
                ?>
                        <div>
                            <div class="container__date__Search">
                                <div class="container__date__Search-inside" onclick="window.location.href='<?php echo $GLOBALS['BASE_URL'] ?>curso/detalle/<?php echo $name__search ?>'">
                                    <img src="<?php echo $date__s['CURS_IMAGEN'] ?>" alt="" srcset="" width="80">
                                    <div class="align__text-s">
                                        <span style="font-weight: bold"><?php echo $date__s['CURS_NOMBRE'] ?></span>
                                        <span><?php echo $date__s['CURS_DESCRIPCION'] ?></span>
                                    </div>
                                </div>
                                <div class="icons__search">
                                    <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/buscador/favorite.svg" alt="" height="30">
                                    <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/buscador/cart-plus-solid.svg" height="30">
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <h1>Lo sentimos, no hemos encontrado resultados disponibles</h1>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="container__search">
            <h1>Ingrese dato a buscar</h1>
        </div>
    <?php } ?>
</body>


<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    function search__detail_curse(date__search) {
        console.log("date searc hg");
        console.log(date__search);
        window.location.href = `${url}curso/detalle/${date__search}`;
    }
</script>

<?php include_once "./vistas/cliente/component/footer.php"; ?>