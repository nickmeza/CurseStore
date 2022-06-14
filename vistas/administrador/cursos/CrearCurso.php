<?php
include_once "./vistas/administrador/component/header.php";
?>
<style>
    nav>.nav.nav-tabs {

        border: none;
        color: #fff;
        background: #272e38;
        border-radius: 0;

    }

    nav>div a.nav-item.nav-link,
    nav>div a.nav-item.nav-link.active {
        border: none;
        padding: 18px 25px;
        color: #fff;
        background: #272e38;
        border-radius: 0;
    }

    nav>div a.nav-item.nav-link.active:after {
        content: "";
        position: relative;
        bottom: -60px;
        left: -10%;
        border: 15px solid transparent;
        border-top-color: #2196F3;
    }

    .tab-content {
        background: #ffffff;
        line-height: 25px;
        border: 1px solid #ddd;
        border-top: 5px solid #2196F3;
        border-bottom: 5px solid #2196F3;
        padding: 30px 25px;
    }

    nav>div a.nav-item.nav-link:hover,
    nav>div a.nav-item.nav-link:focus {
        border: none;
        background: #2196F3;
        color: #fff;
        border-radius: 0;
        transition: background 0.20s linear;
    }



    .outer {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        font-family: arial;
        line-height: 20x;
        padding: 20px;
    }

    .centrarrr {
        text-align: center;
    }

    .izq {
        text-align: start;
    }

    .der {
        text-align: end;
    }

    .medio {
        align-items: center;
    }

    .flex-container {
        background-color: #D0F1F7;
        display: flex;
        flex-direction: row;
        /* border: 2px solid black; */
    }

    .flex-container-modulo {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .flex-container-modulo2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .faq-content {
        background-color: #ffffff;
        padding: 5px 20px;
        border-radius: 5px;
    }
    .container-flex-tabs{
        display: flex;
        flex-direction: column;
    }
    

    summary {
        background-color: #2196f3;
        color: #fff;
        padding: 16px;
        border-radius: 5px;
        cursor: pointer;
        position: relative;
        font-size: 20px;
        outline: none;
        margin: 20px 0px;

    }



    details[open] summary~* {
        animation: smooth 0.4s ease-in-out;
    }

    @keyframes smooth {
        0% {
            opacity: 0;
            margin-top: -10px;
        }

        100% {
            opacity: 1;
            margin-top: 0px;
        }
    }

    details>summary::after {
        position: absolute;
        content: "+";
        right: 25px;
    }

    details[open]>summary::after {
        position: absolute;
        content: "-";
        right: 25px;
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                
            </div>

        </div>
    </div>
</div>
<!-- AGREGAR VIDEO-->
<div class="modal fade" id="agregarVideoModal" tabindex="-1" role="dialog" aria-labelledby="agregarVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarVideoModalLabel">Agregar Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_agregarVideo" method="POST" enctype="multipart/form-data">
                <div class="content__admin ">
                    <div class="formulario__video">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-form-label">id submodulito:</label>
                                <input type="text" class="form-control" name="SMOD_ID" id="SMOD_ID">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label">Descripcion:</label>
                                <input type="text" class="form-control" name="VI_DESCRIPCION" id="VI_DESCRIPCION">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label">Url:</label>
                                <input type="text" class="form-control" name="VI_URL" id="VI_URL">
                            </div>
                        </div>
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary ">Agregar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- AGREGAR SUBMODULO-->
<div class="modal fade" id="agregarSubModuloModal" tabindex="-1" role="dialog" aria-labelledby="agregarSubModuloModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarSubmodulo">Agregar Submodulo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_agregarSubmodulo" method="POST" enctype="multipart/form-data">
                <div class="content__admin ">
                    <div class="formulario__submodulo">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-form-label">id modulito:</label>
                                <input type="text" class="form-control" name="MOD_ID" id="MOD_ID_ADD">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" name="SMOD_NOMBRE" id="SMOD_NOMBRE_ADD">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label">Descripcion:</label>
                                <input type="text" class="form-control" name="SMOD_DESCRIPCION" id="SMOD_DESCRIPCION_ADD">
                            </div>
                        </div>
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary ">Agregar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- EDITAR MODULO-->
<div class="modal fade" id="editarModuloModal" tabindex="-1" role="dialog" aria-labelledby="editarModuloModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_modulo" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group" style="display: non">
                        <label for="name" class="col-form-label" mbr>id:</label>
                        <input type="text" class="form-control" name="MOD_ID" id="MOD_ID_EDI">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="MOD_NOMBRE" id="MOD_NOMBRE_EDI">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="MOD_DESCRIPCION" id="MOD_DESCRIPCION_EDI">
                    </div>
                    <label class="switch">
                        <input type="checkbox" id="MOD_ESTADO_EDI" name="MOD_ESTADO">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button id="BUTON_EDI_MODULO" type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- EDITAR SUBMODULO-->
<div class="modal fade" id="editarSubModuloModal" tabindex="-1" role="dialog" aria-labelledby="editarSubModuloModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_submodulo" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group" style="display: non">
                        <label for="name" class="col-form-label" mbr>id:</label>
                        <input type="text" class="form-control" name="SMOD_ID" id="SMOD_ID">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="SMOD_NOMBRE" id="SMOD_NOMBRE">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="SMOD_DESCRIPCION" id="SMOD_DESCRIPCION">
                    </div>
                    <label class="switch">
                        <input type="checkbox" id="edit_estado" name="SMOD_ESTADO">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- EDITAR VIDEO-->
<div class="modal fade" id="editarVideoModal" tabindex="-1" role="dialog" aria-labelledby="editarVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_video" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group" style="display: non">
                        <label for="name" class="col-form-label" mbr>id:</label>
                        <input type="text" class="form-control" name="VID_ID" id="VID_ID">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="VID_NOMBRE" id="VID_NOMBRE">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="VID_DESCRIPCION" id="VID_DESCRIPCION">
                    </div>
                    <label class="switch">
                        <input type="checkbox" id="edit_estado" name="VID_ESTADO">
                        <span class="slider round"></span>
                    </label>
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
    function GetModuloData() {

        $("#nav-tab").empty()
        $("#nav-tabContent").empty()
        $.ajax({
            url: url + 'admin/modulo/admin_modulo_get_by_id/<?php echo $url[3] ?>',
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                console.log(json)
                json.map((valores, idx) => {

                    $("#nav-tab").append(`
                    
                    
                    <a class="nav-item nav-link" id="nav-${idx}-tab" data-toggle="tab" href="#nav-${idx}" role="tab" aria-controls="nav-home" aria-selected="true">${valores.MOD_NOMBRE} </a>
                        
                
                    
                    `)
                    $("#nav-tabContent").append(`
                    
                    <div class="tab-pane fade ${idx==0?"":"fade"}" id="nav-${idx}" role="tabpanel" aria-labelledby="nav-${idx}-tab">
                    <div style="justify-content: flex-star ; padding: 10px;">
                    <div class="flex-container-modulo">
                        <div>
                            <h1>${valores.MOD_NOMBRE}</h1>
                            <p>${valores.MOD_DESCRIPCION}</p>
                        </div>
                        <div class="flex-container-modulo2" >
                            <div  style="flex-grow:2;">
                                <a  class="btn btn-primary" id="editarmodulo" data-toggle="modal" data-target="#editarModuloModal" data-id="${valores.MOD_ID}"><span>Editar</span></a>
                                <a  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span>Eliminar</span></a>
                            </div>
                            <div>
                                <a  class="btn btn-primary" id="agregarsubmodulo" data-toggle="modal" data-target="#agregarSubModuloModal" data-id="${valores.MOD_ID}"><i class="material-icons" >&#xE147;</i> <span>Agregar</span></a>
                            </div>
                         </div>
                    </div>
                    </div>
                    <div class="outer">

                    ${
                        valores.submodulos.map((submodulitos,idx)=> 
                        `<details>
                            <summary>${submodulitos.SMOD_NOMBRE}
                                <a style="cursor:pointer;" class="settings" id="editarsubmodulo" data-toggle="modal" data-target="#editarSubModuloModal" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a style="cursor:pointer;" class="delete" onclick="eliminar(${valores.CURS_ID});" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            
                            </summary>
                            <div class="faq-content">
                            <p>${submodulitos.SMOD_DESCRIPCION}</p>
                            
                            ${
                                
                                submodulitos.video.map((videitos,idx)=> `
                                <div class="flex-container">
                                    <div style="flex-grow:1;">
                                        <img src="https://i.blogs.es/1d8f99/youtube/450_1000.jpg" height="82" alt="">
                                    </div>
                                    <div style="flex-grow:10;">
                                        <h3>   ${videitos.VI_DESCRIPCION}</h3>
                                        <a href='${videitos.VI_URL}'>${videitos.VI_URL}</a>
                                    </div>
                                    <div  style="flex-grow:1;">
                                        <a style="cursor:pointer;" class="settings" onclick="showModal(${valores.CURS_ID});"id="editarvideo" data-toggle="modal" data-target="#editarVideoModal" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a style="cursor:pointer;" class="delete" onclick="eliminar(${valores.CURS_ID});" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                    </div>
                                </div>`
                                )
                                
                            }
                            <div class="flex-container" Style="margin-top: 20px;">
                                <div style="flex-grow:1;">
                                    <img src="https://i.blogs.es/1d8f99/youtube/450_1000.jpg" height="82" alt="">
                                </div>
                                <div style="flex-grow:10;">
                                    <h1>
                                    <a id="agregarvideo" data-toggle="modal" data-target="#agregarVideoModal" data-id="${submodulitos.SMOD_ID}" style="cursor:pointer;"> Agregar Video</a>
                                    </h1>
                                </div>
                            </div>
                        
                        </details>`)
                    }
                    
            

        `)
                })
                $("#nav-tab").append('<a class="nav-item nav-link" id="nav-add-tab" data-toggle="tab" href="#nav-add" role="tab" aria-controls="nav-add" aria-selected="false">+</a>')
                $("#nav-tabContent").append(`<div class="tab-pane fade " id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
                    <form id="form_crearModulo" method="POST" enctype="multipart/form-data">
                        <div class="content__admin" style="padding: 30px;">
                            <h2 style="padding: 10px;">Crear Modulo</h2>
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" name="MOD_NOMBRE" id="MOD_NOMBRE">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label">Descripcion:</label>
                                <textarea class="form-control" style="height: 100px;" name="MOD_DESCRIPCION" id="MOD_DESCRIPCION"></textarea>
                            </div>
                        </div>
                        <div class="centrarrr">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>`)
                $("#form_crearModulo").submit(function(event) {
        // jQuery('#btnAgregar').attr("disabled", "disabled");
        event.preventDefault();
        console.log(new FormData(this))
        $.ajax({
            type: 'POST',
            url: url + "admin/modulo/create/<?php echo $url[3] ?>",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                Swal.fire(
                    'MODULO AGREADO!',
                    'FUNCION EXITOSA!',
                    'success'
                )
                location.href = url + "admin/crear_curso/<?php echo $url[3] ?>";
            }
        });

    })
                
            }
        })
    }
    GetModuloData()


    $("#form_crearSubModulo").submit(function(event) {
        // jQuery('#btnAgregar').attr("disabled", "disabled");
        event.preventDefault();
        console.log(new FormData(this))
        $.ajax({
            type: 'POST',
            url: url + "admin/submodulo/create/",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                Swal.fire(
                    'SUBMODULO AGREADO!',
                    'FUNCION EXITOSA!',
                    'success'
                )
                location.href = url + "admin/crear_curso/<?php echo $url[3] ?>";
            }
        });
        console.log("paso")

    })
    $(document).on("click", "#agregarvideo", function () {
        $("#SMOD_ID").val($(this).data("id"))

    })
    $(document).on("click", "#agregarsubmodulo", function () {
        $("#MOD_ID_ADD").val($(this).data("id"))
        console.log( $(this).data("id"))
    })
    $(document).on("click", "#editarmodulo", function () {
        $("#MOD_ID_EDI").val($(this).data("id"))
        $.ajax({
            url: url + 'admin/modulo/modulo_get_one/' + $(this).data("id"),
            type: 'GET',
            dataType: 'json',
            
            success: function(json) {
                console.log(json)
                $("#MOD_NOMBRE_EDI").val(json.MOD_NOMBRE)
                $("#MOD_DESCRIPCION_EDI").val(json.MOD_DESCRIPCION)
                $("#MOD_ESTADO_EDI").prop("checked",json.MOD_ESTADO=="1")
            },
            complete: function(xhr, status) {
                if (status == "success") {
                    
                }
            },
        })
        console.log( $(this).data("id"))
    })
    $("#form_editar_modulo").submit(function(event) {
        event.preventDefault();
        $("#BUTON_EDI_MODULO").attr("disabled",true)
        $("#MOD_ESTADO_EDI").val() == "on" ? $("#MOD_ESTADO_EDI").val(1) : $("#MOD_ESTADO_EDI").val(0)
        const id = $("#MOD_ID_EDI").val()
        var formdata= new FormData(this)
        if($("#MOD_ESTADO_EDI").val() == 0){
            formdata.append("MOD_ESTADO","0")
        }
        $.ajax({
            type: 'POST',
            url: url + "admin/modulo/modulo_editar/" + id,
            contentType: false,
            cache: false,
            data:formdata,
            processData: false,
            success: function(msg) {
                console.log(msg)
                GetModuloData()
                $("#BUTON_EDI_MODULO").attr("disabled",false)
                $('#editarModuloModal').modal('hide')     
            }
        });
        
    })
</script>
<?php
include_once "./vistas/administrador/component/footer.php";
?>