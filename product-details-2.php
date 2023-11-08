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

        if (isset($_GET['prod_id']) && !empty($_GET['prod_id'])) {
            $id = $_GET['prod_id'];
        } else {
            $id = null;
        }
            $arr = get_detail_prod($id);
        ?>

        <!-- product-details -->
        <?php
        if (!empty($arr)) {
            for ($i = 0; $i < count($arr); $i++) {
                ?>
                <section class="product-details product-details-2">
                    <div id="fixed_lat" class="auto-container">
                        <div class="product-details-content">
                            <div class="row align-items-center clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="bxslider">
                                        <?= get_container($arr[$i]['img']) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="product-info">
                                        <h3>
                                            <?= $arr[$i]['name'] ?>
                                        </h3>
                                        <div class="customer-review clearfix">
                                            <ul class="rating-box clearfix">
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                            </ul>
                                            <div class="reviews"><a href="./">(5 Reviews)</a></div>
                                        </div>

                                        <div class="other-links">
                                            <ul class="clearfix">
                                                <li>SKU:
                                                    <?= $arr[$i]['id'] ?>
                                                </li>
                                                <li>Category: <a href="shop.php?category=<?=$arr[$i]['category']?>&pag=1">
                                                        <?= $arr[$i]['category'] ?>
                                                    </a></li>
                                            </ul>
                                        </div>        
                                        <span class="item-price">$
                                            <?= $arr[$i]['price'] ?>
                                        </span>                                                                        
                                        <div class="text">
                                            <p>
                                                <?= $arr[$i]['detail'] ?>
                                            </p>
                                            <p>
                                                <?= $arr[$i]['coments'] ?>
                                            </p>
                                        </div>


                                        <div class="othre-options clearfix">
                                            <div class="item-quantity">
                                                <input id="cantidad" class="quantity-spinner" type="text" value="1" name="quantity">
                                            </div>
                                            <div class="btn-box">
                                                <button type="button" class="theme-btn-two" onclick="add_cart(<?=$arr[$i]['id']?>)">Añadir</button>
                                            </div>
                                            <ul class="info clearfix">
                                                <li><a href="product-details-2.php"><i class="flaticon-heart"></i></a></li>
                                                <li><a href="product-details-2.php"><i class="flaticon-search"></i></a></li>
                                            </ul>
                                            <br>
                                            <div class="btn-box">
                                                <button type="button" id="call-what" class="theme-btn-two">
                                                    <i class="fab fa-whatsapp"></i>
                                                Cotiza ahora</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="related-product">
                            <div class="sec-title style-two">
                                <h2>Productos recomendados</h2>
                                <p>
                                    <?= $name_site ?>
                                </p>
                                <span class="separator"
                                    style="background-image: url(assets/images/icons/separator-2.png);"></span>
                            </div>
                            <div class="recomended owl-carousel clearfix">
                                <?= get_similar($arr[$i]['category']) ?>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <!-- product-details end -->
            <?php
            }
        } else {
            include_once 'assets/php/view/not_found.php';
        }
        include_once 'assets/php/view/footer.php';
        ?>

    </div>

    <style>
.owl-carousel .owl-stage-outer {
  overflow: visible !important;
  transform: translateZ(0);
}

.owl-carousel .image-box {
  position: relative;
  z-index: 1;
}
        
    </style>
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
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/js/bxslider.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
    <script>
        $('.recomended').owlCarousel({
            margin: 15,
            loop: false,
            autoplay: true,
            nav: true,
            autoplayTimeOut: 2500,
            autoplayHoverPause: true,
            dots:false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.owl-prev').text('')
        $('.owl-next').text('')
    </script>    
</body>
<!-- End of .page_wrapper -->

</html>