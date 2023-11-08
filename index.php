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
        ?>




        <!--BANNER PRINCIPAL -->
        <section class="banner-style-one">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="banner-carousel owl-theme owl-carousel">
                <?= get_banner() ?>
            </div>
        </section>

        <!--CATEGORIES-->
        <section class="topcategory-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Nuestro principales productos</h2>
                    <p>la mejor calidad de productos</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="row clearfix">
                    <?= get_principal(); ?>
                </div>
            </div>
        </section>


        <!-- shop-section -->
        <section class="shop-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Nuestros Productos</h2>
                    <p>Instrumentos e Insumos Térmicos y Control S.A de C.V.</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="sortable-masonry">
                    <div class="filters">
                        <ul class="filter-tabs filter-btns centred clearfix">
                            <li class="active filter" data-role="button" data-filter=".best_seller">Best Seller</li>
                            <li class="filter" data-role="button" data-filter=".new_arraivals">New Arraivals</li>
                            <li class="filter" data-role="button" data-filter=".top_rate">Top Rate</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                        <?= get_limit_prod() ?>
                        <!--
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/resource/shop/shop-2.jpg" alt="">
                                    <span class="category green-bg">New</span>
                                    <ul class="info-list clearfix">
                                        <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details-2.php">Add to cart</a></li>
                                        <li><a href="assets/images/resource/shop/shop-2.jpg" class="lightbox-image"
                                                data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details-2.php">Multi-Way Ultra Crop Top</a>
                                    <span class="price">$50.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller top_rate">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/resource/shop/shop-3.jpg" alt="">
                                    <ul class="info-list clearfix">
                                        <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details-2.php">Add to cart</a></li>
                                        <li><a href="assets/images/resource/shop/shop-3.jpg" class="lightbox-image"
                                                data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details-2.php">Side-Tie Tank</a>
                                    <span class="price">$40.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/resource/shop/shop-4.jpg" alt="">
                                    <ul class="info-list clearfix">
                                        <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details-2.php">Add to cart</a></li>
                                        <li><a href="assets/images/resource/shop/shop-4.jpg" class="lightbox-image"
                                                data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details-2.php">Cold Crewneck Sweater</a>
                                    <span class="price">$60.30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller top_rate">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/resource/shop/shop-5.jpg" alt="">
                                    <ul class="info-list clearfix">
                                        <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details-2.php">Add to cart</a></li>
                                        <li><a href="assets/images/resource/shop/shop-5.jpg" class="lightbox-image"
                                                data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details-2.php">Side-Tie Tank</a>
                                    <span class="price">$35.30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/resource/shop/shop-6.jpg" alt="">
                                    <ul class="info-list clearfix">
                                        <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details-2.php">Add to cart</a></li>
                                        <li><a href="assets/images/resource/shop/shop-6.jpg" class="lightbox-image"
                                                data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details-2.php">Must-Have Easy Tank</a>
                                    <span class="price">$25.30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals top_rate">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/resource/shop/shop-7.jpg" alt="">
                                    <span class="category red-bg">Hot</span>
                                    <ul class="info-list clearfix">
                                        <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details-2.php">Add to cart</a></li>
                                        <li><a href="assets/images/resource/shop/shop-7.jpg" class="lightbox-image"
                                                data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details-2.php">Woven Crop Cami</a>
                                    <span class="price">$90.30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/resource/shop/shop-8.jpg" alt="">
                                    <ul class="info-list clearfix">
                                        <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details-2.php">Add to cart</a></li>
                                        <li><a href="assets/images/resource/shop/shop-8.jpg" class="lightbox-image"
                                                data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details-2.php">Must-Have Easy Tank</a>
                                    <span class="price">$20.30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ---->
                    </div>
                </div>
                <div class="more-btn centred"><a href="shop.php" class="theme-btn-one">View All Products<i
                            class="flaticon-right-1"></i></a></div>
            </div>
        </section>


        <!-- shop-section end -->


        <!-- cta-section -->
        <section class="cta-section">
            <div class="image-layer" style="background-image: url(assets/images/background/1.jpg);"></div>
            <div class="auto-container">
                <div class="cta-inner centred">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                    </div>
                    <h2>Todos los Materiales que Necesitas en un Sólo Lugar</h2>
                    <p>Insumos Térmicos</p>
                    <a href="shop.php" class="theme-btn-one">Ir a productos<i class="flaticon-right-1"></i></a>
                </div>
            </div>
        </section>

    <?php include_once 'assets/php/view/footer.php';?>

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