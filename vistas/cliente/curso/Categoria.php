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
        border-bottom: 1px solid #ccc;
    }

    .container__date__Search-inside {
        display: flex;
        width: 100%;
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
        align-items: center;
        display: flex;
        line-height: 15px;
        justify-content: space-between;
        padding: 0 10px 0 10px;
        gap: 20px;
    }

    @media screen and (max-width: 1024px) {
        .descripcion {
            display: none;
        }

        .title__search {
            font-size: 1rem
        }
    }

    .title__search {
        font-size: 3rem;
        font-weight: bold;
    }

    @media screen and (max-width: 455px) {
        .descripcion {
            display: none;
        }

        .title__search {
            font-size: 2rem;

        }

        .container__date__Search-inside img {
            display: none;
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
            border-bottom: 1px solid #ccc;
        }

        .tittle__align__Search {
            font-weight: 0;
        }
    }

    .tittle__align__Search {
        font-weight: bold
    }

    .container {
        width: 100%;
        max-width: 1200px;
        height: 430px;
        display: flex;
        flex-direction: row;

    }

    .container .card {
        min-width: 170px;
        width: 15%;
        height: 230px;
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        margin: 20px;
        text-align: center;
        transition: all 0.25s;
    }

    .container .card:hover {
        transform: translateY(-15px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
    }

    .container .card .imgprincipal {
        width: 150px;
        height: 100px;
    }

    .container .card h4 {
        font-weight: 600;
    }

    .container .card p {
        padding: 0 1rem;
        font-size: 16px;
        font-weight: 300;
    }

    .container .card a {
        font-weight: 500;
        text-decoration: none;
        color: #3498db;
    }
</style>

<body>
    <?php ?>
    <?php if (strlen($buscador) > 0) { ?>
        <div class="container__search">
            <span class="title__search">Resultados de la búsqueda:</span>
            <div class="resultado__search">
                <div class="container">
                    <?php
                    $dates__search;
                    $date__search = Categoria_Modelo::getByName($buscador);
                    $cursosId = Curso_Modelo::getIdCursosByidUser($idUsuario);
                    if (count($date__search) > 0) {
                        $dates__search = $date__search;
                        foreach ($dates__search as $date__s) {
                            $name__search = $date__s['CURS_NOMBRE'];
                    ?>

                            <div class="card">
                                <center><img class="imgprincipal" src="<?php echo $GLOBALS['BASE_URL'] . $date__s['CURS_IMAGEN'] ?> "></center>
                                <h4 style="cursor: pointer;" onclick="location.href='<?php echo $GLOBALS['BASE_URL'] ?>curso/detalle/<?php echo $name__search ?>'" style="justify-content: left;"><?php echo $date__s['CURS_NOMBRE'] ?></h4>
                                <p><?php echo $date__s['CURS_DESCRIPCION'] ?></p>
                                <div class="icons__search">
                                    <h4>S/.<?php echo $date__s['CURS_PRECIO'] ?></h4>
                                    <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/buscador/favorite.svg" alt="" onclick="anadirFavoritos(<?php echo $date__s['CURS_ID'] ?>)" height="25px;">
                                    <?php
                                    $encontrado = false;
                                    foreach ($cursosId as $cursoId) {
                                        if ($cursoId['CURS_ID'] == $date__s['CURS_ID']) {
                                            $encontrado = true;
                                            break;
                                        }
                                    }
                                    if (!$encontrado) { ?>
                                        <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/buscador/cart-plus-solid.svg" onclick="anadirCarrito(<?php echo $date__s['CURS_ID'] ?>)" height="25px;">
                                    <?php } ?>
                                </div>
                            </div>

                        <?php }
                    } else { ?>
                        <h1>Lo sentimos, no hemos encontrado resultados disponibles</h1>
                    <?php } ?>


                </div>
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
    function anadirFavoritos(id) {
        var encontrado = false
        var idfavorito = localStorage.getItem('idfavorito') ? JSON.parse(localStorage.getItem('idfavorito')) : []
        for (let i = 0; i < idfavorito.length; i++) {
            const element = idfavorito[i];
            if (element == id) {
                encontrado = true
            }
        }

        if (!encontrado) {
            idfavorito.push(id)
            localStorage.setItem('idfavorito', JSON.stringify(idfavorito))
            console.log(localStorage.getItem('idfavorito'));
            Swal.fire(
                'Añadido',
                'Correctamente',
                'success'
            )
        } else {
            Swal.fire(
                'Ya se Añadido',
                'Correctamente',
                'info'
            )
        }

    }

    function anadirCarrito(id) {
        var encontrado = false
        var idcurso = localStorage.getItem('idcurso') ? JSON.parse(localStorage.getItem('idcurso')) : []
        for (let i = 0; i < idcurso.length; i++) {
            const element = idcurso[i];
            if (element == id) {
                encontrado = true
            }
        }

        if (!encontrado) {
            idcurso.push(id)
            localStorage.setItem('idcurso', JSON.stringify(idcurso))
            console.log(localStorage.getItem('idcurso'));
            Swal.fire(
                'Añadido',
                'Correctamente',
                'success'
            )
        } else {
            Swal.fire(
                'Ya se Añadido',
                'Correctamente',
                'info'
            )
        }
        location.reload()
    }

    function search__detail_curse(date__search) {
        console.log("date searc hg");
        console.log(date__search);
        window.location.href = `${url}curso/detalle/${date__search}`;
    }
</script>



<?php include_once "./vistas/cliente/component/footer.php"; ?>