<?php include_once "./vistas/cliente/component/header.php"; ?>

<style>
    .container__search {
        margin-top: 100px;
        padding-left: 50px;
        padding-right: 50px;
    }
</style>

<body>
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
                            <div onclick="window.location.href='<?php echo $GLOBALS['BASE_URL'] ?>curso/detalle/<?php echo $name__search ?>'">
                            <!-- <div onclick="search__detail_curse(<?php echo $date__s['CURS_NOMBRE'] ?>)"> -->
                            <?php var_dump($name__search)?>
                                <?php echo $date__s['CURS_NOMBRE'] ?>
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

    function search__detail_curse(date__search){
        console.log("date searc hg");
        console.log(date__search);
        window.location.href = `${url}curso/detalle/${date__search}`;
    }
</script>

<?php include_once "./vistas/cliente/component/footer.php"; ?>