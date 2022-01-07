<?php
include_once "./vistas/administrador/component/header.php";
?>
<style>
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
        background: #ebecef;
    }

    .modulo__input {
        min-height: 36.5px;
        font-size: 20px;
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
        max-height: 500px;
        overflow-y: auto;
        background: #D2DEF5;
        flex: 6;
    }

    .formulario__modulo>div {
        margin: 20px 0 20px 0;
    }

    .modulo__title {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .sub__modulo:focus {
        overflow: auto;
        background: #ecf1ff;
    }

    .video__modulo:focus {
        overflow: auto;
        background: #f5f7fb;
    }

    .options__modulo {
        display: flex;
        gap: 8px;
    }

    .options__modulo>i {
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
        padding: 0 70px 0 20px;
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

    @media only screen and (max-width:50em) {
        .content__admin {
            flex-direction: column;
        }
    }
</style>
<div class="container__admin container">
    <form id="form_editar_categoria" method="POST" enctype="multipart/form-data">
        <div class="content__admin ">
            <div class="izquierda__modulo">
                <div class="formulario__curso">
                    <h2>Datos de Curso</h2>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" name="CAT_NAME" id="edit_name">
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Descripcion:</label>
                            <input type="text" class="form-control" name="CAT_DESCRIPCION" id="edit_description">
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="col-form-label">Imagen:</label>
                            <textarea class="form-control" name="CAT_IMAGEN" id="edit_imagen"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="derecha__modulo">
                <div class="">
                    <div class="titulo__admin">
                        <h2>Modulo</h2>
                    </div>
                    <div class="formulario__modulo">
                        <div style="border: black 1px solid; display: flex;height: 50px;padding: 20px;">
                            <div class="modulo__title">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                                <textarea name="" placeholder="Nombre del modulo" class="none__input modulo__input" id="" cols="30" rows="1"></textarea>
                                <div class="options__modulo">
                                    <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                    <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                    <i class="fa fa-trash icon__module" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="modulo__descripcion">
                            <textarea name="" placeholder="Descripcion" class="none__input modulo__input" id="" cols="30" rows="1"></textarea>
                        </div>
                        <div class="sub__modulos">
                            <div class="sub__modulo">
                                <div style="border: black 1px solid; display: flex;height: 40px;padding: 20px;">
                                    <div class="submodulo__title">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        <textarea name="" placeholder="Sub-Modulo" class="none__input sub__modulo" id="" cols="30" rows="1"></textarea>
                                        <div class="options__modulo">
                                            <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                            <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                            <i class="fa fa-trash icon__module" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="submodulo__videos">
                                    <div style="border: black 1px solid; display: flex;height: 40px;padding: 20px;">
                                        <div class="sub__modulo_video">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                            <textarea name="" placeholder="video" class="none__input video__modulo" id="" cols="30" rows="1"></textarea>
                                            <div class="options__modulo">
                                                <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                                <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                                <i class="fa fa-trash icon__module" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub__modulo">
                                <div style="border: black 1px solid; display: flex;height: 40px;padding: 20px;">
                                    <div class="submodulo__title">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        <textarea name="" placeholder="Sub-Modulo" class="none__input sub__modulo" id="" cols="30" rows="1"></textarea>
                                        <div class="options__modulo">
                                            <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                            <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                            <i class="fa fa-trash icon__module" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="submodulo__videos">
                                    <div style="border: black 1px solid; display: flex;height: 40px;padding: 20px;">
                                        <div class="sub__modulo_video">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                            <textarea name="" placeholder="video" class="none__input video__modulo" id="" cols="30" rows="1"></textarea>
                                            <div class="options__modulo">
                                                <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                                <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                                <i class="fa fa-trash icon__module" aria-hidden="true"></i>
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
        <div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </form>
</div>

<script>

</script>
<?php
include_once "./vistas/administrador/component/footer.php";
?>