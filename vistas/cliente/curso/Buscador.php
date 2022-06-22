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
        display: flex;
        line-height: 10px;
        justify-content: center;
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
</style>

<body>
    <?php ?>
    <?php if (strlen($buscador) > 0) { ?>
        <div class="container__search">
            <span class="title__search">Resultados de la busqueda:</span>
            <div class="resultado__search">
                <?php
                $dates__search;
                $date__search = Curso_Modelo::getByName($buscador);
                $cursosId = Curso_Modelo::getIdCursosByidUser($idUsuario);
                if (count($date__search) > 0) {
                    $dates__search = $date__search;
                    foreach ($dates__search as $date__s) {
                        $name__search = $date__s['CURS_NOMBRE'];
                ?>
                        <div>
                            <div class="container__date__Search">
                                <div class="container__date__Search-inside" onclick="window.location.href='<?php echo $GLOBALS['BASE_URL'] ?>curso/detalle/<?php echo $name__search ?>'">
                                    <img src="<?php echo $GLOBALS['BASE_URL'] ?><?php echo $date__s['CURS_IMAGEN'] ?>" alt="" srcset="" width="80">
                                    <div class="align__text-s">
                                        <span style="tittle__align__Search"><?php echo $date__s['CURS_NOMBRE'] ?></span>
                                        <span class="descripcion"><?php echo $date__s['CURS_DESCRIPCION'] ?></span>
                                    </div>
                                </div>
                                <div class="icons__search">
                                    <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/buscador/favorite.svg" alt="" onclick="anadirFavoritos(<?php echo $date__s['CURS_ID'] ?>)" height="30">
                                    <?php
                                    $encontrado = false;
                                    foreach ($cursosId as $cursoId) {
                                        if ($cursoId['CURS_ID'] == $date__s['CURS_ID']) {
                                            $encontrado = true;
                                            break;
                                        }
                                    }
                                    if (!$encontrado) { ?>
                                        <img src="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/buscador/cart-plus-solid.svg" onclick="anadirCarrito(<?php echo $date__s['CURS_ID'] ?>)" height="30">
                                    <?php } ?>
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
            Swal.fire({
                title: 'Correcto',
                text: 'Se Guardo Correctamente',
                imageUrl: url + 'publico/img/success.gif',
                imageHeight: 200,
                imageAlt: 'Custom image',
                background: '#ececf2'
            })
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