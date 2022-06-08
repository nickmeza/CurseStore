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
                        <h2><b>Correos</b></h2>
                    </div>
                    <div class="col-xs-7">

                        <a href="<?php echo $GLOBALS['BASE_URL'] ."admin/correos/exportar"?>" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Exportar</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CLIENTE</th>
                        <th>CORREO</th>
                        <th>ASUNTO</th>
                        <th>DESCRIPCION</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="tbody__correo">

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
<!-- VER orden-->
<div class="modal fade" id="editSolicitudes" tabindex="-1" role="dialog" aria-labelledby="editTitleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Detalle del Correo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_title_modulo">
                <div class="modal-body">
                    <div class="datos__correo"></div>
                    <div class="tabla__correos"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>

<script>
    $.ajax({
        url: url + 'admin/correos/getCorreosData',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            console.log(json)
            json.map((valores, idx) => {
                $(".tbody__correo").append(`
                <tr>
                    <td>${idx+1}</td>
                    <td>${valores.PER_NOMBRE+" "+ valores.PER_APELLIDO}</td>
                    <td>${valores.COR_CORREO}</td>
                    <td >${valores.COR_ASUNTO}</td>
                    <td style="width: 400px;">${valores.COR_DESCRIPCION.substr(0,30)}${valores.COR_DESCRIPCION.length>30?'...':''}</td>

                    <td style="width: 100px;">
                    <a class="settings" onclick="mostrarDatos(${valores.COR_ID});setIdCorreo(${valores.COR_ID});" title="Settings" data-toggle="modal" data-target="#editSolicitudes"  ><i class="fa fa-eye" aria-hidden="true"></i></a> 
                    </td>
                   
                </tr>
                `)
            })
        },
        complete: function(x, y) {
            console.log(x)
        }
    })


    // function mostrarDatos(valores) {
    //     console.log(valores);
    //     $.ajax({
    //         url: url + 'admin/correos/getCursosByOrder/' + valores,
    //         type: 'GET',
    //         dataType: 'json',
    //         success: function(json) {
    //             $("#edit_nombre").val(json.COR_NOMBRE)
    //             $("#edit_asunto").val(json.COR_ASUNTO)
    //             $("#edit_description").val(json.COR_DESCRIPCION)

    //         },
    //     })
    // }
    function setIdCorreo(id) {
        idOrder = id
    }

    function mostrarDatos(id) {
        console.log(id)
        //
        $.ajax({
            url: url + 'admin/correos/getDataCorreoById/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                $(".tabla__correos").empty();
                console.log(json)
                $(".tabla__correos").append(`
                    <div class="item__correo">
                        <div class="datos__correo">
                        <br>
                            <div class="title__correo">
                                <h4>Cliente: <b>${json.PER_NOMBRE+" "+ json.PER_APELLIDO}</b></h4>
                            </div>
                            <div class="title__correo">
                                <h4>Correo: <b>${json.COR_CORREO}</b></h4>
                            </div>
                            <div class="title__correo">
                                <h4>Asunto: <b>${json.COR_ASUNTO}</b></h4>
                            </div>
                            <div class="title__correo">
                                <h4 >Descripcion: </h4><p style>${json.COR_DESCRIPCION}</p>
                            </div>
                        </div>
                    </div>
                    `)
            }
        })
    }
</script>
<?php
include_once "./vistas/administrador/component/footer.php";
?>