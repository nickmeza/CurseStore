<?php
include_once "./vistas/administrador/component/header.php";
?>
div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class="col-xs-7">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>
                        <a class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Exportar</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DIRECCIÓN</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="tbody__categoria">

                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text"> Mostrar <b>5</b> de <b>25</b>Entradas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Atrás</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_agregar_profesor" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="PER_NAME" id="name">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" name="PER_DIRECCION" id="description">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_profesor" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group" style="display: none;">
                        <label for="name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="PER_NAME" id="edit_id">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" name="PER_DIRECCION" id="edit_name">
                    </div>
                    <label class="switch">
                        <input type="checkbox" id="edit_estado" name="CAT_ESTADO">
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
    $.ajax({
        url: url + 'admin/cliente/getAll',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            json.map((valores, idx) => {
                $(".tbody__categoria").append(`
                <tr>
                    <td>${valores.CAT_ID}</td>
                    <td>
                        <a><img src="${valores.CAT_IMAGEN}" class="avatar" alt=""> ${valores.CAT_NAME}</a>
                    </td>
                    <td style="width: 400px;">${valores.CAT_DESCRIPCION}</td>

                    <td><span class="status text-warning">&bull;</span>  ${valores.CAT_ESTADO==1?"activo":"inactivo"}</td>
                    <td style="width: 100px;">
                        <a class="settings" onclick="mostrarDatos(${valores.CAT_ID});" title="Settings" data-toggle="modal" data-target="#editModal"  ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="delete" onclick="eliminar(${valores.CAT_ID});" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                    </td>
                </tr>
                `)
            })
            console.log(json)
            curseCategoria = document.getElementsByClassName("navigation__categoria")
        }
    })

    $("#form_agregar_categoria").submit(function(event) {
        event.preventDefault();
        console.log(new FormData(this))
        $.ajax({
            type: 'POST',
            url: url + "admin/categoria/create",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                location.href = url + "admin/categoria";
            }
        });
    })
    //form_editar_categoria


    function eliminar(id) {
        $.ajax({
            url: url + 'admin/categoria/delete/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                //location.href = url + "admin/categoria";
            },
            complete: function(xhr, status) {
                if (status == "success") {
                    alert("correcto")
                    location.href = url + "admin/categoria";
                }
            },
        })
    }

    function mostrarDatos(valores) {
        console.log(valores);
        $.ajax({
            url: url + 'admin/categoria/getById/' + valores,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                $("#edit_name").val(json.CAT_NAME)
                $("#edit_description").val(json.CAT_DESCRIPCION)
                $("#edit_imagen").val(json.CAT_IMAGEN)
                $("#edit_id").val(json.CAT_ID)
                json.CAT_ESTADO == "1" ? $("#edit_estado").prop('checked', true) : $("#edit_estado").prop('checked', false);
            },
        })
    }
    $("#form_editar_categoria").submit(function(event) {
            event.preventDefault();
            $("#edit_estado").val() == "on" ? $("#edit_estado").val(1) : $("#edit_estado").val(0)
            const id = $("#edit_id").val()
            $.ajax({
                type: 'POST',
                url: url + "admin/categoria/update/" + id,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(msg) {
                    console.log(msg)
                    location.href = url + "admin/categoria";
                }
            });
        })
</script>

<?php
include_once "./vistas/administrador/component/footer.php";
?>