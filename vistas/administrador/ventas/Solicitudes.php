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

    /* modal edit solicitudes */
    .edit__solicitudes {
        padding: 8px;
    }

    .content__solicitudes {
        display: flex;
        gap: 10px;
    }

    .content__izquierda {
        flex: 10;
    }

    .item__curso {
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .tittle__h4 {
        width: 50px;
    }

    .content__derecha {
        flex: 6;
    }

    .button-48 {
        appearance: none;
        background-color: #fff;
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

    .content__passed {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .quetion__passed {
        width: 100%;
        background: #bfe3d48f;
        border-radius: 10px;
        margin-bottom: 10px;
        padding: 10px;
    }

    .question__aprobal {
        flex: 6;
        display: flex;
        justify-content: center;
    }

    .buttons__aprobal {
        display: flex;
        gap: 10px;
        justify-content: center;
    }

    @media (max-width: 1000px) {
        .content__solicitudes {
            flex-direction: column;
        }

        .quetion__passed {
            width: 80%;
            background: #bfe3d48f;
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 10px;
        }
    }

    @media (max-width: 500px) {
        .quetion__passed {
            width: 100%;
        }
    }
</style>

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2><b>Confirmar Ventas</b></h2>
                    </div>
                    <div class="col-xs-7">
                       
                        <a class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Exportar</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CLIENTE</th>
                        <th>TOTAL</th>
                        <th>FECHA DE PEDIDO</th>
                        
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="tbody__orden">

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


<!-- Modal del editar orden-->
<div class="modal fade" id="editSolicitudes" tabindex="-1" role="dialog" aria-labelledby="editTitleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar ventas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_editar_title_modulo">
                <div class="modal-body">
                    <div class="edit__solicitudes">
                        <div class="content__solicitudes">
                            <div class="content__izquierda">
                                <div class="datos__cliente">

                                </div>
                                <div class="tabla__cursos">

                                </div>
                            </div>
                            <div class="content__derecha">
                                <div class="content__passed">
                                    <div class="quetion__passed">
                                        <div class="question__aprobal">
                                            <h5>Confirmar Voucher</h5>
                                        </div>
                                        <div class="buttons__aprobal">
                                            <span class="button-48" onclick="chageAprovalOrder(1)"><span class="text">Confirmar</span></span>
                                            <span class="button-48" onclick="chageAprovalOrder(2)"><span class="text">No Confirmar</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="voucher__cliente">
                                    <img id="imagenVoucher" width="90%" src="https://www.ejemplode.com/images/uploads/voucher.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
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
    var idOrder = 0;
    $.ajax({
        url: url + 'admin/solicitudes/get_estado',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            json.map((valores, idx) => {
                $(".tbody__orden").append(`
                <tr>
                    <td>${valores.ORD_ID}</td>
                    <td>
                        <a>${valores.PER_NOMBRE +' '+valores.PER_APELLIDO}</a>
                    </td>
                    <td style="width: 400px;">S/.${valores.ORD_TOTAL_PRICE}</td>
                    <td style="width: 400px;">${valores.ORD_DATE_ORDER}</td>
                    
                    <td><span class="status text-warning">&bull;</span>  ${valores.ORD_STATUS==1?"activo":"inactivo"}</td>
                    <td style="width: 100px;">
                        <a class="settings" onclick="mostrarDatos(${valores.ORD_ID});setIdOrder(${valores.ORD_ID});" title="Settings" data-toggle="modal" data-target="#editSolicitudes"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                    </td>
                </tr>
                `)
            })
            curseCategoria = document.getElementsByClassName("navigation__categoria")
        }
    })

    function setIdOrder(id) {
        idOrder = id
    }

    function chageAprovalOrder(statusOrder) {
        var formdata = new FormData();
        formdata.append("ORD_APROVAL", "" + statusOrder)
        formdata.append("ORD_ID", "" + idOrder)
        console.log(statusOrder, idOrder)
        $.ajax({
            type: 'POST',
            url: url + "admin/curso/updateAprovalOrder",
            data: formdata,
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
                console.log(msg)
                //location.href = url + "admin/categoria";
            }
        })
    }

    function mostrarDatos(id) {
        console.log(id)
        //
        $.ajax({
            url: url + 'admin/curso/getCursosByOrder/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                $(".tabla__cursos").empty();
                json.map((valores, idx) => {
                    $(".tabla__cursos").append(`
                    <div class="item__curso">
                        <div class="imagen__curso"><img src="${valores.CURS_IMAGEN}" width="130px" height="80px" style="object-fit: cover;" alt="${valores.CURS_NOMBRE}"></div>
                        <div class="datos__curso">
                            <div class="title__curso">
                                <h5><b>${valores.CURS_NOMBRE}</b></h5>
                            </div>
                            <div class="title__curso">
                                <p>${valores.CURS_DESCRIPCION}</p>
                            </div>
                        </div>
                        <div class="datos__curso">
                            <div class="title__curso">
                                <h4 class="tittle__h4"> S/. <b>${valores.ODT_SUBTOTAL}</b></h4>
                            </div>
                        </div>
                    </div>
                    `)
                })
            }
        })
        $.ajax({
            url: url + 'admin/ventas/getDataOrderById/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                console.log(json)
                $("#imagenVoucher").attr("src", url + json.ORD_VOUCHER);
                $(".datos__cliente").empty().append(`
                        <h4><b>Cliente:</b> ${json.PER_NOMBRE}</h4>
                        <h4><b>Total:</b> ${json.ORD_TOTAL_PRICE}</h4>
                    `)
            }
        })
    }
</script>

<?php
include_once "./vistas/administrador/component/footer.php";
?>