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

    .flex-container {
        display: flex;
        flex-wrap: wrap;
        align-content: space-around;
        background-color: #ffffff;
        padding: 10px;
        border: 2px solid black;
    }

    .flex-container div {
        background-color: #EBEBEB;
        width: 530px;
        margin: 10px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
        border: 2px solid black;
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


    .faq-content {
        background-color: #ffffff;
        padding: 5px 20px;
        border-radius: 5px;
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
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div style="justify-content: flex-star ; padding: 10px;">
                        <h1>TITULO DEL MODULO</h1>
                        <p>1Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                    </div>
                    <div class="outer">
                        <details>
                            <summary>Sub Modulo 1</summary>
                            <div class="faq-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </details>

                        <details>
                            <summary>Sub Modulo 2</summary>
                            <div class="faq-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </details>
                        <details>
                            <summary>Sub Modulo 3</summary>
                            <div class="faq-content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
                            </div>
                        </details>
                        <details>
                            <summary>Sub Modulo 4</summary>
                            <div class="faq-content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                        </details>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    2Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    3Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    4Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
                <div class="tab-pane fade " id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
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
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>

<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
    function GetModuloData() {


        $.ajax({
            url: url + 'admin/modulo/admin_modulo_get_by_id/<?php echo $url[3] ?>',
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                console.log(json)
                json.map((valores, idx) => {

                    $("#nav-tab").append(`
        
                 <a class="nav-item nav-link" id="nav-${idx}-tab" data-toggle="tab" href="#nav-${idx}" role="tab" aria-controls="nav-home" aria-selected="true">${valores.MOD_NOMBRE}</a>
        
        
                    `)
                    $("#nav-tabContent").append(`
        
                         <div class="tab-pane fade" id="nav-${idx}" role="tabpanel" aria-labelledby="nav-${idx}-tab">
                         <div style="justify-content: flex-star ; padding: 10px;">
                        <h1>${valores.MOD_NOMBRE}</h1>
                        <p>${valores.MOD_DESCRIPCION}</p>
                    </div>
                    <div class="outer">
                        ${
                            valores.submodulos.map((submodulitos,idx)=> `<details>
                            <summary>${submodulitos.SMOD_NOMBRE}</summary>
                            <div class="faq-content">
                                <p>${submodulitos.SMOD_DESCRIPCION}</p>
                            </div>
                        </details>`)
                        }
                    </div>
                          </div>
        `)
                })
                $("#nav-tab").append('<a class="nav-item nav-link" id="nav-add-tab" data-toggle="tab" href="#nav-add" role="tab" aria-controls="nav-add" aria-selected="false">+</a>')
                console.log(json)
                curseCategoria = document.getElementsByClassName("navigation__categoria")
            }
        })
    }
    GetModuloData()


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
</script>
<?php
include_once "./vistas/administrador/component/footer.php";
?>