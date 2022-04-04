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
        max-height: 500px;
        overflow-y: auto;
        flex: 10;
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
    <form id="form_crearCurso" method="POST" enctype="multipart/form-data">
        <div class="content__admin ">
            <div class="izquierda__modulo">
                <div class="formulario__curso">
                    <h2>Datos de Curso</h2>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" name="CURS_NOMBRE" id="CURS_NOMBRE">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" name="CURS_DESCRIPCION" id="CURS_DESCRIPCION">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Precio:</label>
                            <input type="number" class="form-control" name="CURS_PRECIO" id="CURS_PRECIO">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Categoria:</label>
                            <select name="CAT_ID" class="form-control" id="CAT_ID">
                                <?php foreach ($dataCategoria as $categoria) {  ?>
                                    <option value="<?php echo $categoria['CAT_ID'] ?>">
                                        <?php echo $categoria['CAT_NAME'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <!-- <input type="text" class="form-control" name="CAT_ID" id="CAT_ID"> -->
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Profesor:</label>
                            <select name="PROF_ID" class="form-control" id="PROF_ID">
                                <?php foreach ($dataProfesores as $profesores) { ?>
                                    <option value="<?php echo $profesores['PROF_ID']; ?>">
                                        <?php echo $profesores['PER_NOMBRE'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <!-- <input type="text" class="form-control" name="PROF_ID" id="PROF_ID"> -->
                            <!-- dataProfesores -->
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Imagen:</label>
                            <input type="file" class="form-control" name="CURS_IMAGEN" id="CURS_IMAGEN">
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="col-form-label">Video:</label>
                            <textarea class="form-control" name="CURS_URL_VIDEO" id="CURS_URL_VIDEO"></textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
            <div class="derecha__modulo">
                <div class="capa__modulo">
                    <div class="titulo__admin">
                        <h2>Modulo</h2>
                    </div>
                    <div id="contenedor__modulos" class="formulario__modulo">
                        <div id="idmodulo__0" class="modulo__global formulario__modulo">
                            <div style="border: black 1px solid; display: flex;height: 50px;padding-left : 20px;padding-right: 5px;">
                                <!-- TITULO DEL MODULOOO -->
                                <div class="modulo__title">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <textarea name="" id="modulotitle__input0" onkeyup="setTitleModulo(0)" oncontextmenu="return false" onclick="showModal('editTitle','nombre_edit_title','modulo',0)" placeholder="Nombre del modulo" class="none__input modulo__input" id="" cols="30" rows="1"></textarea>
                                    <div class="options__modulo">
                                        <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                        <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                        <i class="fa fa-trash icon__module" onclick="eliminarModulo(0)" aria-hidden="true"></i>
                                        <svg onclick="setTamano(0)" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                            <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN DEL TITULO DEL MODULOOO -->
                            <div id="submodulo__modulo0" class="sub__modulos">
                                <!-- INICIO DEL SUBMODULO -->
                                <!-- FIN DEL SUBMODULO -->
                            </div>
                            <div class="agregar__submodulo">
                                <span class="button-48" onclick="agregarSubmodulo(0)"><span class="text">Añadir Submodulo</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="agregar__modulo">
                        <span class="button-48" onclick="agregarModulo()"><span class="text">Añadir Modulo</span></span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Modal del Agregar Submodulo -->
<div class="modal fade" id="editSubmodulo" tabindex="-1" role="dialog" aria-labelledby="editTitleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_title_submodulo">
                <div class="modal-body">
                    <div class="content__submodulo">
                        <div class="formulario__submodulo">
                            <div class="form-group">
                                <label for="nombre_edit_submodulo" class="col-form-label">Nombre del Submodulo:</label>
                                <input type="text" class="form-control" name="nombre_submodulo" id="nombre_submodulo">
                            </div>
                            <div class="form-group">
                                <label for="descrip_edit_title" class="col-form-label">Direccion:</label>
                                <textarea name="description_submodulo" placeholder="Descripcion" class="form-control" id="description_submodulo" cols="30" rows="4"></textarea>
                            </div>
                            <div class="videos__submodulo">
                                <div class="videos__content modulo__title">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <textarea name="" id="modulotitle__input0" onkeyup="setTitleModulo(0)" placeholder="Link del Video" class="none__input modulo__input" id="" cols="30" rows="1"></textarea>
                                    <div class="options__modulo">
                                        <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                        <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                        <i class="fa fa-trash icon__module" onclick="eliminarModulo(0)" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <span class="button-48" onclick="agregarVideo()"><span class="text">Añadir Video</span></span>
                            </div>
                        </div>
                        <div class="previsualizador__video">
                            <div class="cover"><iframe src="https://www.youtube.com/embed/8XrhGs5-0rI" title="YouTube video player" frameborder="0" rel=0 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal del Agregar Modulo -->
<div class="modal fade" id="editTitle" tabindex="-1" role="dialog" aria-labelledby="editTitleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_title_modulo">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre_edit_title" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre_modulo" id="nombre_modulo">
                    </div>
                    <div class="form-group">
                        <label for="descrip_edit_title" class="col-form-label">Direccion:</label>
                        <textarea name="description_modulo" placeholder="Descripcion" class="form-control" id="description_modulo" cols="30" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    var moduloDNI = 0;
    var modulosArray = [{
        idmodulo: 0,
        descripcion: "",
        titulo: "",
        submodulos: []
    }];
    const modulos = document.getElementsByClassName("modulos")
    const contenedoModulos = document.getElementById("contenedor__modulos")
    var contadorModulos = 0;
    var contadorSubModulo = 0;

    function showModal(idmodal, idinputeditor, where, position) {
        $('#' + idmodal + '').modal('show').on('shown.bs.modal', function() {
            $('#' + idinputeditor + '').trigger('focus')
        })
        if (where == "modulo") {
            console.log(modulosArray)
            $('#nombre_modulo').val(modulosArray[position].titulo)
            $('#description_modulo').val(modulosArray[position].descripcion)
            $('#form_editar_title_modulo').submit(function(event) {
                const fields = $(this).serializeArray()
                modulosArray[position].titulo = fields[0].value;
                modulosArray[position].descripcion = fields[1].value;
                event.preventDefault();
                $('#' + idmodal + '').modal('hide').on('hidden.bs.modal', function() {
                    $('#form_editar_title_modulo').unbind()
                })
            });

            alert('modulo' + position)

        } else {
            $('#nombre_modulo').val(modulosArray[position].titulo)
            $('#description_modulo').val(modulosArray[position].descripcion)
            $('#form_editar_title_modulo').submit(function(event) {
                const fields = $(this).serializeArray()
                modulosArray[position].titulo = fields[0].value;
                modulosArray[position].descripcion = fields[1].value;
                event.preventDefault();
                $('#' + idmodal + '').modal('hide').on('hidden.bs.modal', function() {
                    $('#form_editar_title_modulo').unbind()
                })
            });
            alert('submodulo' + position)
        }

    }

    function eliminarModulo(idmodulo) {
        $("#idmodulo__" + idmodulo).remove();
        let position = modulosArray.findIndex(array => array.idmodulo === idmodulo)
        modulosArray.splice(position, 1)
        console.log(modulosArray)
    }

    function agregarModulo() {
        contadorModulos++;
        modulosArray.push({
            idmodulo: contadorModulos,
            descripcion: "",
            titulo: "",
            submodulos: []
        })
        const moduloDiv = document.createElement('div');
        //modulo__global idmodulo__0
        moduloDiv.className = 'modulo__global formulario__modulo';
        moduloDiv.id = `idmodulo__${contadorModulos}`
        var stringHTML = `  <div style="border: black 1px solid; display: flex;height: 50px;padding-left : 20px;padding-right: 5px;">
                                <!-- TITULO DEL MODULOOO -->
                                <div class="modulo__title">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <textarea name=""  id="modulotitle__input${contadorModulos}" onkeyup="setTitleModulo(${contadorModulos})" oncontextmenu="return false" onclick="showModal('editTitle','nombre_edit_title','modulo',${contadorModulos})" placeholder="Nombre del modulo" class="none__input modulo__input" id="" cols="30" rows="1"></textarea>
                                    <div class="options__modulo">
                                        <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                        <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                        <i class="fa fa-trash icon__module" onclick="eliminarModulo(${contadorModulos})" aria-hidden="true"></i>
                                        <svg onclick="setTamano(${contadorModulos})" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                            <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN DEL TITULO DEL MODULOOO -->
                            <div id="submodulo__modulo${contadorModulos}" class="sub__modulos">
                                <!-- INICIO DEL SUBMODULO -->

                                <!-- FIN DEL SUBMODULO -->
                            </div>
                            <div class="agregar__submodulo">
                                <span class="button-48" onclick="agregarSubmodulo(${contadorModulos})"><span class="text">Añadir Submodulo</span></span>
                            </div>`
        moduloDiv.innerHTML = stringHTML;
        contenedoModulos.append(moduloDiv)
    }

    function agregarSubmodulo(idmodulo) {
        for (let i = 0; i < modulosArray.length; i++) {
            const element = modulosArray[i];
            if (element.idmodulo == idmodulo) {
                modulosArray[i].submodulos.push({
                    descripcion: "",
                    idsubmodulo: contadorSubModulo,
                    titulo: "",
                    video: []
                })
            }
        }
        console.log(modulosArray)
        const moduloSubmodulo = document.getElementById("submodulo__modulo" + idmodulo)
        const subModuloDiv = document.createElement('div');
        subModuloDiv.className = "sub__modulo";
        var stringHTML = ` 
                        <div style="border: black 1px solid; display: flex;height: 40px;padding: 0 5px 0 20px;">
                            <div class="submodulo__title">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                                <textarea name="" id="submodulotitle__input${contadorSubModulo}" onkeyup="setTitleSubModulo(${contadorSubModulo})" placeholder="Sub-Modulo" oncontextmenu="return false" onclick="showModal('editSubmodulo','nombre_edit_submodulo','submodulo',${contadorSubModulo})" class="none__input sub__modulo__input" id="" cols="30" rows="1"></textarea>
                                <div class="options__submodulo">
                                    <i class="fa fa-eye icon__module" aria-hidden="true"></i>
                                    <i class="fa fa-pencil icon__module" aria-hidden="true"></i>
                                    <i class="fa fa-trash icon__module" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>`;
        subModuloDiv.innerHTML = stringHTML;
        moduloSubmodulo.append(subModuloDiv)
        contadorSubModulo++
    }

    function setTitleSubModulo(idmodulo) {
        buscar(modulosArray, idmodulo, $("#submodulotitle__input" + idmodulo).val())
        console.log(modulosArray)
    }

    function buscar(array, idsubmodulo, subModuloTitle) {
        for (let i = 0; i < array.length; i++) {
            const element = array[i];
            for (let j = 0; j < element.submodulos.length; j++) {
                var submodulo = element.submodulos[j];
                if (submodulo.idsubmodulo == idsubmodulo) {
                    submodulo.titulo = subModuloTitle
                }
            }
        }
    }

    function setTitleModulo(idmodulo) {
        const filtered = modulosArray.filter(function(element) {
            return element.idmodulo == idmodulo;
        });
        filtered[0].titulo = $("#modulotitle__input" + idmodulo).val();
        for (let i = 0; i < modulosArray.length; i++) {
            const element = modulosArray[i];
            if (element.idmodulo == idmodulo) {
                element.titulo = filtered[0].titulo
            }
        }
        console.log(modulosArray)
    }

    $("#form_editar_categoria").submit(function(event) {
        event.preventDefault();
    })

    function setTamano(idmodulo) {
        const moduloSetTamno = document.getElementById("idmodulo__" + idmodulo)
        moduloSetTamno.classList.toggle("ocultar__modulo")
    }

    $("#form_crearCurso").submit(function(event) {
        //jQuery('#btnAgregar').attr("disabled", "disabled");
        event.preventDefault();
        console.log(new FormData(this))
        $.ajax({
            type: 'POST',
            url: url + "admin/curso/create",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                //location.href = url + "admin/curso";
            }
        });
    })
</script>
<?php
include_once "./vistas/administrador/component/footer.php";
?>