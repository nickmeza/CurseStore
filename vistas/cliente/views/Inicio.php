<?php 
include_once "./vistas/cliente/component/header.php";
?>

<div class="section slider-logo">
    <?php
    $datos = array();
    if (isset($categoria)) {
        $datos = $var_require;
    ?>
        <div class="container">
            <div class="slider-logo-wrapper">
                <div class="slider-logo-content">
                    <div class="carousel-logos owl-carousel" style="justify-content: center;text-align: center;">
                        <?php foreach ($datos as $dato) { ?>
                            <div class="logo-iteam item">
                                <a target="_blank" href="<?php if (isset($dato['enlace_pagina'])) {
                                                                echo $dato['enlace_pagina'];
                                                            } else {
                                                                echo "#";
                                                            } ?>">
                                    <img src="<?php if (isset($dato['imagen'])) {
                                                    echo $GLOBALS['BASE_URL'] . $dato['imagen'];
                                                } else {
                                                    echo $GLOBALS['BASE_URL'] . "assets/images/logo/logo-carousel-2.png";
                                                }  ?>" alt="" class="img-responsive" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="slider-logo-wrapper">
                <div class="slider-logo-content">
                    <div class="carousel-logos owl-carousel">
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive" /></a></div>
                        <div class="logo-iteam item"><a href="#"><img src="<?php echo $GLOBALS['BASE_URL'] ?>assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive" /></a></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php 
include_once "./vistas/cliente/component/footer.php";
?>