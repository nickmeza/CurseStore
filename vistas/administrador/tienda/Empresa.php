<?php
include_once "./vistas/administrador/component/header.php";
?>
<style>
    .button-48 {
        appearance: none;
        background-color: #d4e3eaeb;
        border: 1px solid #ff00003b;
        width: 100%;
        box-sizing: border-box;
        color: #000000;
        cursor: pointer;
        display: inline-block;
        font-family: Clarkson, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1em;
        margin: 0;
        opacity: 1;
        outline: 0;
        padding: 1em 2.2em;
        position: relative;
        text-align: center;
        text-decoration: none;
        text-rendering: geometricprecision;
        text-transform: uppercase;
        transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1), background-color 100ms cubic-bezier(.694, 0, 0.335, 1), color 100ms cubic-bezier(.694, 0, 0.335, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        white-space: nowrap;
    }

    .button-48:before {
        animation: opacityFallbackOut .5s step-end forwards;
        backface-visibility: hidden;
        background-color: #EBEBEB;
        clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        transform: translateZ(0);
        transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
        width: 100%;
    }

    .button-48:hover:before {
        animation: opacityFallbackIn 0s step-start forwards;
        clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
    }

    .button-48:after {
        background-color: #FFFFFF;
    }

    .button-48 span {
        z-index: 1;
        position: relative;
    }

    .none__input {
        background: #0000;
        border-radius: 3px;
        overflow: hidden;
        overflow-wrap: break-word;
        height: 28px;
        border: none;
        box-shadow: none;
        font-weight: 600;
        margin: -4px 0;
        max-height: 256px;
        min-height: 20px;
        padding: 4px 8px;
        resize: none;
    }

    .modulo__input:focus {
        overflow: auto;
        outline: none;
        background: #ebecef;
    }

    .modulo__input {
        min-height: 36.5px;
        font-size: 20px;
        width: 100%;
    }

    .container__admin {
        width: 100%;
    }

    .content__admin {
        display: flex;
        background: #fff;
        gap: 20px;
    }

    .izquierda__modulo {
        padding: 0 10px;
        flex: 6;
    }

    .derecha__modulo {
        padding: 0 30px 0 10px;
        flex: 6;
        padding: 10px;
    }

    .formulario__modulo>div {
        margin: 20px 0 20px 0;
    }

    .modulo__title {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        gap: 8px;
    }

    .sub__modulo__input:focus {
        overflow: auto;
        background: #ecf1ff;
    }

    .sub__modulo__input {
        outline: none;
        width: 100%;
        margin: 0 10px 0 10px;
    }

    .video__modulo:focus {
        overflow: auto;
        background: #f5f7fb;
    }

    .options__modulo {
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .options__modulo>i {
        cursor: pointer;
    }

    .options__submodulo {
        display: flex;
        gap: 8px;
        padding-right: 8px;
        align-items: center;
    }

    .options__submodulo>i {
        cursor: pointer;
    }

    .submodulo__title {
        display: flex;
        justify-content: space-between;
        width: 100%;
        align-items: center;
    }

    .icon__module:active {
        transform: scale(1.2);
        color: red;
    }

    .sub__modulos {
        padding: 0 0 0 30px;
    }

    .submodulo__videos {
        padding: 0 20px;
    }

    .sub__modulo_video {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .sub__modulo>div {
        margin: 20px 0 20px 0;
    }

    .capa__modulo {
        padding: 2px 8px;
        box-shadow: rgb(14 30 37 / 12%) 0px 2px 2px 0px, rgb(14 30 37 / 32%) 0px 2px 8px 0px;
        border-radius: 3px;
    }

    .content__submodulo {
        display: flex;
        gap: 15px;
    }

    .content__submodulo>div {
        flex: 6;
    }

    .ocultar__modulo {
        height: 75px;
        overflow-y: hidden;
    }

    .centrarrr{
        text-align: center;
    }

    .agregar__submodulo {
        padding-left: 30px;
    }

    .modulo__global {
        transition: height 2s;
    }

    .videos__content {
        margin: 10px 0 20px 0;
    }

    @media only screen and (max-width:50em) {
        .content__admin {
            flex-direction: column;
        }

        .content__submodulo {
            flex-direction: column;
        }
    }
</style>
<div class="container__admin container">
    <form id="form_crearEmpresa" method="POST" enctype="multipart/form-data">
        <div class="content__admin ">
            <div class="izquierda__modulo">
                <div class="formulario__curso">
                    <h2>Datos de la Empresa</h2>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Ruc:</label>
                            <input type="text" class="form-control" name="EMP_RUC" id="EMP_RUC">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" name="EMP_NOMBRE" id="EMP_NOMBRE">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Direccion:</label>
                            <input type="text" class="form-control" name="EMP_DIRECCION" id="EMP_DIRECCION">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Telefono:</label>
                            <input type="text" class="form-control" name="EMP_TELEFONO" id="EMP_TELEFONO">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Telefono 2:</label>
                            <input type="text" class="form-control" name="EMP_TELEFONO2" id="EMP_TELEFONO2">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Numero de Trabajadores:</label>
                            <input type="number" class="form-control" name="EMP_N_TRABAJADOR" id="EMP_N_TRABAJADOR">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Código CIIU:</label>
                            <input type="text" class="form-control" name="EMP_CODIGO_CIIU" id="EMP_CODIGO_CIIU">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Fecha de Registro:</label>
                            <input type="text" class="form-control" name="EMP_FECHA" id="EMP_FECHA">
                        </div>
                    </div>
                </div>

            </div>
            <div class="derecha__modulo">
                <div class="formulario__curso">

                    <h3>Redes Sociales</h3>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Correo Electronico:</label>
                            <input type="text" class="form-control" name="EMP_CORREO" id="EMP_CORREO">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Facebook:</label>
                            <input type="text" class="form-control" name="EMP_FACEBOOK" id="EMP_FACEBOOK">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Instagram:</label>
                            <input type="text" class="form-control" name="EMP_INSTAGRAM" id="EMP_INSTAGRAM">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Linkedin:</label>
                            <input type="text" class="form-control" name="EMP_LINKEDIN" id="EMP_LINKEDIN">
                        </div>
                        <div class="form-group " style="display: none;">
                            <label for="name" class="col-form-label">ID:</label>
                            <input type="text" class="form-control" name="EMP_ID" id="EMP_ID">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="centrarrr">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>

<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    $.ajax({
        type: "GET",
        url: url + "admin/empresa/getAll",
        success: function(msg) {
            console.log(msg)
            let json= JSON.parse(msg)
            console.log(json)
            $("#EMP_RUC").val(json[0].EMP_RUC)
            $("#EMP_NOMBRE").val(json[0].EMP_NOMBRE)
            $("#EMP_DIRECCION").val(json[0].EMP_DIRECCION)
            $("#EMP_TELEFONO").val(json[0].EMP_TELEFONO)
            $("#EMP_TELEFONO2").val(json[0].EMP_TELEFONO2)
            $("#EMP_N_TRABAJADOR").val(json[0].EMP_N_TRABAJADOR)
            $("#EMP_CODIGO_CIIU").val(json[0].EMP_CODIGO_CIIU)
            $("#EMP_FECHA").val(json[0].EMP_FECHA)
            $("#EMP_CORREO").val(json[0].EMP_CORREO)
            $("#EMP_FACEBOOK").val(json[0].EMP_FACEBOOK)
            $("#EMP_INSTAGRAM").val(json[0].EMP_INSTAGRAM)
            $("#EMP_LINKEDIN").val(json[0].EMP_LINKEDIN)
            $("#EMP_ID").val(json[0].EMP_ID)

        },
    })
    $("#form_crearEmpresa").submit(function(event) {
        event.preventDefault();
        console.log("llegamos")
        let id= $("#EMP_ID").val()
        $.ajax({
            type: 'POST',
            url: url + "admin/empresa/update/" + id,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                location.href = url + "admin/empresa";
            },
            error: function(xhr, opciones, error) {
                console.log("error" + error);
            }
        });
    });
    $("#form_crearEmpresa").submit(function(event) {
        event.preventDefault();
        console.log("llegamos")
        let id= $("#EMP_ID").val()
        $.ajax({
            type: 'POST',
            url: url + "admin/empresa/update/" + id,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                location.href = url + "admin/empresa";
            },
            error: function(xhr, opciones, error) {
                console.log("error" + error);
            }
        });
    });
</script>
<?php
include_once "./vistas/administrador/component/footer.php";
?>