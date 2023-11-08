<!DOCTYPE html>
<html lang="es">
<?php
include_once 'assets/php/pixel.php';
include_once 'assets/php/info.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>
        <?= $name_site ?>
    </title>

    <?php
    include_once 'assets/php/resources.php';
    ?>


</head>
<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <?php
        include_once 'assets/php/functions.php';

        include_once 'assets/php/view/loader.php';
        
        include_once 'assets/php/view/search_pop.php';

        include_once 'assets/php/view/menu_header.php';

        $arr = get_detail_serv();

        ?>

        <!-- product-details -->
        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Nuestros Servicios</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="index.php">Inicio</a></li>
                        <li>Servicios</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->
        <!-- service-page-section -->
        
        <section class="service-page-section">
            <div class="auto-container">
                <?php for ($i = 0; $i < count($arr); $i++) {  
                    if ($i % 2 == 0) {
                    ?>
                    <div class="service-block-two mb-100">
                        <div class="inner-box">
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                    <div class="content-box ml-30 mr-100">
                                        <h2><a href="service.php"><?=$arr[$i]['name']?></a></h2>
                                        <p>
                                            <?=$arr[$i]['tags'].'<br>'.$arr[$i]['detail'].'<br>'.$arr[$i]['cal']?>
                                        </p>
                                        <a href="service.php" class="theme-btn-one">Contactar<i class="flaticon-right-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image-box mr-30" data-label="<?=$arr[$i]['coments']?>">
                                        <img src="assets/<?= separe($arr[$i]['img'], $cel = 0) ?>" 
                                            alt="<?=$arr[$i]['name']?>" title="<?=$arr[$i]['name']?>">
                                    </figure>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <?php
                    } else {
                    ?>
                    <div class="service-block-two mb-100">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image-box mr-30" data-label="<?=$arr[$i]['coments']?>">
                                        <img src="assets/<?= separe($arr[$i]['img'], $cel = 0) ?>" 
                                            alt="<?=$arr[$i]['name']?>" title="<?=$arr[$i]['name']?>">
                                    </figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                    <div class="content-box ml-30 mr-100">
                                        <h2><a href="service.php"><?=$arr[$i]['name']?></a></h2>
                                        <p>
                                        <?=$arr[$i]['tags'].'<br>'.$arr[$i]['detail'].'<br>'.$arr[$i]['cal']?>
                                        </p>
                                        <a href="service.php" class="theme-btn-one">Contactar<i class="flaticon-right-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }                    
                    ?>
                    <?php  } ?>
                </div>
            </div>
        </section>
        <!-- service-page-section end -->

        <!-- cta-section end -->
        <?php include_once 'assets/php/view/footer.php'; ?>

    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->

</html>