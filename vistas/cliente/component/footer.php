<style>
  ul {
    margin: 0px;
    padding: 0px;
  }

  .footer-section {
    background: #151414;
    position: relative;
  }

  .footer-cta {
    border-bottom: 1px solid #373636;
  }

  .single-cta i {
    color: #ff5e14;
    font-size: 30px;
    float: left;
    margin-top: 8px;
  }

  .cta-text {
    padding-left: 15px;
    display: inline-block;
  }

  .cta-text h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
  }

  .cta-text span {
    color: #757575;
    font-size: 15px;
  }

  .footer-content {
    position: relative;
    z-index: 2;
  }

  .footer-pattern img {
    position: absolute;
    top: 0;
    left: 0;
    height: 330px;
    background-size: cover;
    background-position: 100% 100%;
  }

  .footer-logo {
    margin-bottom: 30px;
  }

  .footer-logo img {
    max-width: 200px;
  }

  .footer-text p {
    margin-bottom: 14px;
    font-size: 14px;
    color: #7e7e7e;
    line-height: 28px;
  }

  .footer-social-icon span {
    color: #fff;
    display: block;
    font-size: 20px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
  }

  .footer-social-icon a {
    color: #fff;
    font-size: 16px;
    margin-right: 15px;
  }

  .footer-social-icon i {
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 38px;
    border-radius: 50%;
  }

  .facebook-bg {
    background: #3B5998;
  }

  .twitter-bg {
    background: #55ACEE;
  }

  .google-bg {
    background: #DD4B39;
  }

  .footer-widget-heading h3 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 40px;
    position: relative;
  }

  .footer-widget-heading h3::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -15px;
    height: 2px;
    width: 50px;
    background: #ff5e14;
  }

  .footer-widget ul li {
    display: inline-block;
    width: 50%;
    margin-bottom: 12px;
  }

  .footer-widget ul li a:hover {
    color: #ff5e14;
  }

  .footer-widget ul li a {
    color: #878787;
    text-transform: capitalize;
  }

  .subscribe-form {
    position: relative;
    overflow: hidden;
  }

  .subscribe-form input {
    width: 100%;
    padding: 14px 28px;
    background: #2E2E2E;
    border: 1px solid #2E2E2E;
    color: #fff;
  }

  .subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
  }

  .subscribe-form button i {
    color: #fff;
    font-size: 22px;
    transform: rotate(-6deg);
  }

  .copyright-area {
    background: #202020;
    padding: 25px 0;
  }

  .copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #878787;
  }

  .copyright-text p a {
    color: #ff5e14;
  }

  .footer-menu li {
    display: inline-block;
    margin-left: 20px;
  }

  .footer-menu li:hover a {
    color: #ff5e14;
  }

  .footer-menu li a {
    font-size: 14px;
    color: #878787;
  }
</style>

<footer class="footer-section">
  <div class="container">
    <div class="footer-content pt-5 pb-5">
      <div class="row">
        <div class="col-xl-4 col-lg-4 mb-50">
          <div class="footer-widget">
            <div class="footer-logo">

              <a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a>
            </div>
            <div class="footer-text">
              <p>Cursos especializados impartidos por líderes de la industria de la tecnología.</p>
            </div>
            <div class="footer-social-icon">
              <span>Siguénos</span>
              <a href="" id ="fb" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
              <a href="" id ="ig" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="" id ="lk" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>


            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
          <div class="footer-widget">
            <div class="footer-widget-heading">
              <h3>Enlaces directos</h3>
            </div>
            <ul>
              <li><a href="<?php echo $GLOBALS['BASE_URL']   ?>">Inicio</a></li>
              <li><a href="<?php echo $GLOBALS['BASE_URL']   ?>nosotros">Nosotros</a></li>
              <li><a href="<?php echo $GLOBALS['BASE_URL']   ?>nosotros">Contáctanos</a></li>

            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
          <div class="footer-widget">
            <div class="footer-widget-heading">
              <h3>Suscribete</h3>
            </div>
            <div class="footer-text mb-25">
              <p>Es muy facil estar al tanto de nuestras novedades,cursos y promociones,solo tienes que suscribirte</p>
            </div>
            <div class="subscribe-form">
              <form action="#">
                <input type="text" placeholder="Ingresa tu Correo Electrónico">
                <button><i class="fab fa-telegram-plane"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
          <div class="copyright-text">
            <p>Copyright &copy; 2021, Todos los derechos reservados <a href="https://codepen.io/anupkumar92/">Michellexd</a></p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
          <div class="footer-menu">
            <ul>
              <li><a href="<?php echo $GLOBALS['BASE_URL']   ?>">Inicio</a></li>
              <li><a href="#">Términos</a></li>
              <li><a href="#">Privacidad</a></li>
              <li><a href="#">Política</a></li>
              <li><a href="<?php echo $GLOBALS['BASE_URL']   ?>nosotros">Contáctanos</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

</script>





<!-- LOADING-->
<!-- <div class="body-2 loading">
    <div class="dots-loader"></div>
</div> -->
<!-- JAVASCRIPT LIBS-->
<script>
  if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
  } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
  }

  


</script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/appear/jquery.appear.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/count-to/jquery.countTo.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/wow-js/wow.min.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/libs/isotope/fit-columns.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/js/pages/homepage.js"></script>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>assets/js/views/header.js"></script>
<!-- Direccion js -->
<script src="<?php echo $GLOBALS['BASE_URL'] ?>./direccion.js"></script>
<!-- HEADER JS -->
<script src="<?php echo $GLOBALS['BASE_URL'] ?>publico/js/search.js"></script>
<script>
  
  $.ajax({
        type: "GET",
        url: url + "admin/empresa/getAll",
        success: function(msg) {
            console.log(msg)
            let json= JSON.parse(msg)
            console.log(json)
            $("#fb").val(json[0].EMP_FACEBOOK)
            $("#ig").attr("href",json[0].EMP_INSTAGRAM)
            $("#lk").val(json[0].EMP_LINKEDIN)


        },
    })

  var contador = JSON.parse(localStorage.getItem("idcurso")).length
  $('.contador').after("<p> " + contador + " </p>")

</script>
</body>

</html>