<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo $GLOBALS['BASE_URL'] ?>publico/img/icon.png" />
    <title>Registrar</title>
    <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/js-cookie/js.cookie.js"></script>
    <script>
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/' + Cookies.get('color-skin') + '.css');
        } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('#color-skins').attr('href', '<?php echo $GLOBALS['BASE_URL'] ?>assets/css/color-1.css');
        }
    </script>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins');

        /* BASIC */
        body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
        }

        a {
            color: #92badd;
            display: inline-block;
            text-decoration: none;
            font-weight: 400;
        }

        h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin: 40px 8px 10px 8px;
            color: #cccccc;
        }

        /* STRUCTURE */
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

        .button-48:after {
            background-color: #FFFFFF;
        }

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }

        #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: relative;
            padding: 0px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
        }


        /* TABS */

        h2.inactive {
            color: #cccccc;
        }

        h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #5fbae9;
        }


        /* FORM TYPOGRAPHY*/

        input[type=button],
        input[type=submit],
        input[type=reset] {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        input[type=button]:hover,
        input[type=submit]:hover,
        input[type=reset]:hover {
            background-color: #39ace7;
        }

        input[type=button]:active,
        input[type=submit]:active,
        input[type=reset]:active {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        input[type=text] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type=text]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type=text]:placeholder {
            color: #cccccc;
        }

        input[type=text]:placeholder {
            color: #cccccc;
        }

        .div_password_content {
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 95%;
        }

        input[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            width: 90%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type=password]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type=password]:placeholder {
            color: #cccccc;
        }


        /* ANIMATIONS */


        /* Simple CSS3 Fade-in-down Animation */

        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }


        /* Simple CSS3 Fade-in Animation */

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fadeIn {
            opacity: 0;
            -webkit-animation: fadeIn ease-in 1;
            -moz-animation: fadeIn ease-in 1;
            animation: fadeIn ease-in 1;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            animation-duration: 1s;
        }

        .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
        }


        /* Simple CSS3 Fade-in Animation */

        .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.2s;
        }

        .underlineHover:hover {
            color: #0d0d0d;
        }

        .underlineHover:hover:after {
            width: 100%;
        }


        /* OTHERS */

        *:focus {
            outline: none;
        }

        #icon {
            width: 60%;
        }

        * {
            box-sizing: border-box;
        }

        *:focus {
            outline: none;
        }

        #icon {
            width: 60%;
        }

        * {
            box-sizing: border-box;
        }
    </style>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 onclick="window.location='<?php echo $GLOBALS['BASE_URL'] ?>login'" class="inactive underlineHover"> Iniciar Sesi??n</h2>
            <h2 class="active">Registrarse </h2>

            <!-- Icon -->


            <!-- Login Form -->
            <form id="form_registrar">
                <input type="text" id="name" class="fadeIn second" name="NOMBRE" placeholder="Nombre completo">
                <input type="text" id="apellido" class="fadeIn second" name="APELLIDO" placeholder="Apellido">
                <input type="text" id="direccion" class="fadeIn second" name="DIRECCION" placeholder="Direcci??n">
                <input type="text" id="usuario" class="fadeIn third" name="USUARIO" placeholder="Usuario">
                <input type="text" id="correo" class="fadeIn third" name="CORREO" placeholder="Correo electronico">
                <div style="display: flex;" class="div_password_content">
                    <input type="password" id="contrasena" class="fadeIn third" name="CONTRASENA" placeholder=" Contrase??a">
                    <div style="height:52px;">
                        <button onclick="mostrarPassword()" style="height:52px;" class="button-48" type="button"><i id="pass_eye" class="fa fa-eye" aria-hidden="true"></i></button>
                    </div>
                </div>
                <input type="submit" class="fadeIn fourth" value="Registrate">
            </form>

            <div id="formFooter">
                <a onclick="window.location='<?php echo $GLOBALS['BASE_URL'] ?>login'" class="underlineHover"> ??Ya tienes una cuenta? Inicia sesi??n</a>
            </div>


            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
            <script>
                function mostrarPassword() {
                    var cambio = document.getElementById("contrasena");
                    if (cambio.type == "password") {
                        cambio.type = "text";
                        $('#pass_eye').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                    } else {
                        cambio.type = "password";
                        $('#pass_eye').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                    }
                }
                $(document).ready(function() {
                    //CheckBox mostrar contrase??a
                    $('#ShowPassword').click(function() {
                        $('#contrasena').attr('type', $(this).is(':checked') ? 'text' : 'password');
                    });
                });
                $("#form_registrar").submit(function(event) {
                    event.preventDefault();
                    console.log(new FormData(this))
                    $.ajax({
                        type: 'POST',
                        url: url + "admin/usuario/cliente/RegistrarCliente",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(msg) {
                            console.log(msg)

                            location.href = url;
                        }
                    });
                })
            </script>
</body>

</html>