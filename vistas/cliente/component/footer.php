
<style>
.pie{
    background-color: black;
}
</style>


<footer class="pie row ">
    s
</footer>

<script>

</script>





<!-- LOADING-->
<div class="body-2 loading">
    <div class="dots-loader"></div>
</div>
<!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
}</script>
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
</body>
</html>