<?php
include_once "./vistas/administrador/component/header.php";
?>
<style>
    .table-responsive {
        margin: 30px 0;
    }

    .table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
        border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 15px;
        background: #299be4;
        color: #fff;
        padding: 16px 30px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }

    .table-title .btn {
        color: #566787;
        float: right;
        font-size: 13px;
        background: #fff;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }

    .table-title .btn:hover,
    .table-title .btn:focus {
        color: #566787;
        background: #f2f2f2;
    }

    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }

    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }

    table.table tr th:first-child {
        width: 60px;
    }

    table.table tr th:last-child {
        width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
    }

    table.table td a {
        font-weight: bold;
        color: #566787;
        align-items: center;
        text-decoration: none;
    }

    table.table td a:hover {
        color: #2196F3;
    }

    table.table td a.settings {
        color: #2196F3;
        cursor: pointer;
    }

    table.table td a.delete {
        color: #F44336;
        cursor: pointer;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table .avatar {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }

    .status {
        font-size: 30px;
        margin: 2px 2px 0 0;
        display: inline-block;
        vertical-align: middle;
        line-height: 10px;
    }

    .text-success {
        color: #10c469;
    }

    .text-info {
        color: #62c9e8;
    }

    .text-warning {
        color: #FFC107;
    }

    .text-danger {
        color: #ff5b5b;
    }

    .pagination {
        float: right;
        margin: 0 0 5px;
    }

    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }

    .pagination li a:hover {
        color: #666;
    }

    .pagination li.active a,
    .pagination li.active a.page-link {
        background: #03A9F4;
    }

    .pagination li.active a:hover {
        background: #0397d6;
    }

    .pagination li.disabled i {
        color: #ccc;
    }

    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }

    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
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
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2><b>Descuentos</b></h2>
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
                        <th>DESCRIPCION</th>
                        <th>PORCENTAJE</th>
                        <th>INICIO</th>
                        <th>FINAL</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="tbody__descuento">

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
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar descuento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_agregar_descuento" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name" class="col-form-label">Porcentaje de descuento:</label>
                        <input type="text" class="form-control" name="DESCUENTO" id="descuento">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Descripcion:</label>
                        <input type="text" class="form-control" name="DESCRIPCION" id="descripcion">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Inicio:</label>
                        <input type="text" class="form-control" name="INICIO" id="inicio">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Final:</label>
                        <input type="text" class="form-control" name="FINAL" id="final">
                        
                    </div>

                    <div class="form-group">
        <label>Month</label>
        <select id="my-select" style="width: 100%;" multiple="multiple">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
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
        url: url + 'admin/descuento/admin_Descuento_get_all',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            console.log(json)
            json.map((valores, idx) => {
                $(".tbody__descuento").append(`
                <tr>
                    <td>${valores.DESC_ID}</td>
                    <td>
                        <a>${valores.DESC_DESCRIPTION}</a>
                    </td>
                    <td style="width: 400px;">${valores.DESC_PORCENT}</td>
                    <td style="width: 400px;">${valores.DESC_STAR}</td>
                    <td style="width: 400px;">${valores.DESC_END}</td>

                    <td><span class="status text-warning">&bull;</span>  ${valores.DESC_STATUS==1?"activo":"inactivo"}</td>
                    <td style="width: 100px;">
                        <a class="settings" onclick="mostrarDatos(${valores.DESC_ID});" title="Settings" data-toggle="modal" data-target="#editModal"  ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="delete" onclick="eliminar(${valores.DESC_ID});" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                    </td>
                </tr>
                `)
            })
            console.log(json)
            curseCategoria = document.getElementsByClassName("navigation__categoria")
        }
    })

    $("#form_agregar_descuento").submit(function(event) {
        event.preventDefault();
        console.log(new FormData(this))
        $.ajax({
            type: 'POST',
            url: url + "admin/descuento/admin_descuento_agregar",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                location.href = url + "admin/descuento";  
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

<script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>
<script>
    // Initialize multiple select on your regular select
    $("#my-select").multipleSelect({
        filter: true
    });
</script>
<?php
include_once "./vistas/administrador/component/footer.php";
?>