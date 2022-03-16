<?php
include_once "./vistas/cliente/component/headerPerfil.php";
?>
<style>
    html,
    body {
        margin: 0;
        padding: 0;
    }

    body {
        width: 100%;
        height: 100%;
        font-family: sans-serif;
        letter-spacing: 0.03em;
        line-height: 1.6;
    }

    .title {
        text-align: center;
        font-size: 40px;
        color: #6a6a6a;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        height: 430px;
        display: flex;
        justify-content: center;
        margin: auto;
    }

    .container .card {
        width: 30%;
        height: 430px;
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

    .container .card img {
        width: 330px;
        height: 220px;
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
<div class="title__aprendizaje">
    <h1 class="title">Favoritos</h1>
    <div class="container">

    </div>
</div>
<br>
<div class="content__aprendizaje">
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    var idcurso = localStorage.getItem('idfavorito') ? JSON.parse(localStorage.getItem('idfavorito')) : []

    var formdata = new FormData();
    formdata.append('ids', JSON.stringify(idcurso))
    $.ajax({
        type: 'POST',
        url: url + "admin/curso/getByIds",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function(msg) {
            console.log(JSON.parse(msg))
            const resultado = JSON.parse(msg);
            resultado.map((valores, idx) => {
                $(".container").append(`
                <div class="card">
                    <img src=${valores.CURS_IMAGEN}">
                    <h4>${valores.CURS_NOMBRE}</h4>
                    <p>${valores.CURS_DESCRIPCION}</p>
                    <a href=${url+"curso/progreso/"+valores.CURS_NOMBRE}>Leer mas </a>
                    </div>`)
            })
            //location.href = url + "admin/categoria";
        }
    });
</script>
<?php
include_once "./vistas/cliente/component/footerPerfil.php";
?>