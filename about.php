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

    <title><?= $name_site?></title>

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


        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Acerca de nosotros</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="./">Inicio</a></li>
                        <li>Nosotros</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text-inner">
                            <h2>Instrumentos  <br/><span>e</span> Insumos Térmicos</h2>
                            <h3>...</h3>
                            <p>Somos una empresa mexicana con más de 15 años de experiencia en procesos que requieren calor controlado; creando ideas propias y versátiles de manera proactiva para el desarrollo óptimo de cada proyecto. </p>
                            <p>Contamos con un departamento de ingeniería especializado en fabricación, mantenimiento, selección e instalación de materiales refractarios y aislantes, así como, curado y sinterizado de revestimientos.</p>
                            <a href="contact.php" class="theme-btn-one">Contáctanos<i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <figure class="image-box"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="outer-container clearfix">
                <div class="content-column">
                    <div class="inner-column">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h2>¿Por qué somos tu mejor opción?</h2>
                                <p>Instrumentos e Insumos Térmicos y Control S.A de C.V.</p>
                                <span class="separator" style="background-image: url(assets/images/icons/separator-3.png);"></span>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="icon-box"><i class="flaticon-truck"></i></div>
                                            <h3>Free Shipping</h3>
                                            <p>Free shipping on oder over $100</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="icon-box"><i class="flaticon-24-7"></i></div>
                                            <h3>Support 24/7</h3>
                                            <p>Contact us 24 hours a day, 7 days a week</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="icon-box"><i class="flaticon-credit-card"></i></div>
                                            <h3></h3>
                                            <p>Los mejores precios del mercado</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="icon-box"><i class="flaticon-undo"></i></div>
                                            <h3>Seguimiento</h3>
                                            <p>Atención personalizada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-column" style="background-image: url(assets/images/background/chooseus-bg-1.jpg);"></div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- main-footer -->
        <footer class="main-footer light">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget logo-widget">
                                        <figure class="footer-logo"><a href="./"><img src="assets/images/footer-logo-2.png" alt=""></a></figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>Category</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a href="./">Men</a></li>
                                                <li><a href="./">Women</a></li>
                                                <li><a href="./">Kids</a></li>
                                                <li><a href="./">Accessories</a></li>
                                                <li><a href="./">Shoe</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>Useful Link</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a href="./">News & Tips</a></li>
                                                <li><a href="./">About Us</a></li>
                                                <li><a href="./">Terms & Conditions</a></li>
                                                <li><a href="./">Our Shop</a></li>
                                                <li><a href="./">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget contact-widget">
                                        <div class="widget-title">
                                            <h3>Contact</h3>
                                        </div>
                                        <ul class="info-list clearfix">
                                            <li><i class="flaticon-maps-and-flags"></i>4708 Ruecker Wall, Kassandratown, HI</li>
                                            <li><i class="flaticon-phone-ringing"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                            <li><i class="flaticon-email"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget newsletter-widget">
                                        <div class="widget-title">
                                            <h3>Newsletter</h3>
                                        </div>
                                        <div class="widget-content">
                                            <p>4708 Ruecker Wall, Kassandratown, HI 97729</p>
                                            <form action="contact.php" method="post" class="newsletter-form">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                                    <button type="submit" class="theme-btn-three">Subscribe</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <ul class="cart-list pull-left clearfix">
                        <li><a href="./"><img src="assets/images/resource/card-1.png" alt=""></a></li>
                        <li><a href="./"><img src="assets/images/resource/card-2.png" alt=""></a></li>
                        <li><a href="./"><img src="assets/images/resource/card-3.png" alt=""></a></li>
                        <li><a href="./"><img src="assets/images/resource/card-4.png" alt=""></a></li>
                    </ul>
                    <div class="copyright pull-right">
                        <ul class="footer-social clearfix">
                            <li><a href="./"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="./"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="./"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="./"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <p><a href="./">Castro</a> &copy; 2020 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
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
