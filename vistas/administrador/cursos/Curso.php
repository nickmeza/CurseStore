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
        display: inline-block;
        text-decoration: none;
    }

    table.table td a:hover {
        color: #2196F3;
    }

    table.table td a.settings {
        color: #2196F3;
    }

    table.table td a.delete {
        color: #F44336;
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


<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>



<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2><b>Cursos</b></h2>
                    </div>
                    <div class="col-xs-7">
                        <a href="#" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>
                        <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Exportar</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CATEGORIA</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="tbody_cursos">

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

<div class="modal fade" id="editCurso" tabindex="-1" role="dialog" aria-labelledby="editTitleModal" aria-hidden="true">
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
    function showModal(idCurso) {
        $('#editCurso').modal('show').on('shown.bs.modal', function() {
            $('#CURS_NOMBRE').trigger('focus')
        })
        alert(idCurso)

        $.ajax({
            url: url + 'admin/curso/getOne/' + idCurso,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                console.log(json)
                $('#CURS_NOMBRE').val(json.CURS_NOMBRE)
                $('#CURS_DESCRIPCION').val(json.CURS_DESCRIPCION)
                $('#CURS_PRECIO').val(json.CURS_PRECIO)
                $('#CAT_ID').val(json.CAT_ID)
                $('#PROF_ID').val(json.PROF_ID)
                $('#CURS_URL_VIDEO').val(json.CURS_URL_VIDEO)
                //curseCategoria = document.getElementsByClassName("navigation__categoria")
            }
        })
    }
    $.ajax({
        url: url + 'admin/curso/getAll',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            console.log(json)
            json.map((valores, idx) => {

                $(".tbody_cursos").append(`
                <tr>
                    <td>${valores.CURS_ID}</td>
                    <td>
                        <a><img src="${url + valores.CURS_IMAGEN}" class="avatar" alt=""> ${valores.CURS_NOMBRE}</a>
                    </td>
                    <td style="width: 400px;">${valores.CURS_DESCRIPCION}</td>

                    <td><span class="status text-warning">&bull;</span>  ${valores.CURS_ESTADO==1?"activo":"inactivo"}</td>
                    <td style="width: 100px;">
                        <a class="settings" onclick="showModal(${valores.CURS_ID});" title="Settings" data-toggle="modal" data-target="#editModal"  ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="delete" onclick="eliminar(${valores.CURS_ID});" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>   
                        <a class="delete" onclick="deshabilitar(${valores.CURS_ID});" title="Delete" data-toggle="tooltip"><label class="switch">
                        <input ${validarEstado(valores.CURS_ESTADO)}  type="checkbox" id="edit_estado" name="BANNER_STATUS">
                        <span onclick ='deshabilitar(${valores.CURS_ID},${valores.CURS_ESTADO})'class="slider round"></span>
                        </label></a>
                        </td>
                </tr>
                `)
            })
            console.log(json)
            curseCategoria = document.getElementsByClassName("navigation__categoria")
        }
    })

    function deshabilitar(cursoId, cursoEstado) {

        var estado = cursoEstado == 1 ? 0 : 1
        var formdata = new FormData()
        formdata.append("estado", estado)
        formdata.append("id", cursoId)
        $.ajax({
            type: 'POST',
            url: url + "admin/curso/updateDeshabilitar",
            data: formdata,
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                location.href = url + "admin/curso";
            }
        });


    }

    function validarEstado(estado) {
        if (estado == 1) {
            return "checked"
        }
        return ""
    }
</script>

<?php
include_once "./vistas/administrador/component/footer.php";
?>