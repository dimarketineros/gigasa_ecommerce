<!DOCTYPE html>
<html lang="es">
<?php include_once 'assets/php/pixel.php'; ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Template  - Car </title>
<?php
    include_once 'assets/php/info.php';
        include_once 'assets/php/resources.php'; 
    ?>
</head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper">
    <?php
        include_once 'assets/php/view/loader.php';

        include_once 'assets/php/view/search_pop.php';

        include_once 'assets/php/view/menu_header.php';
    ?>
        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Cart Page</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="./">Home</a></li>
                        <li>Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- cart section -->
        <section class="cart-section cart-page">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th class="prod-column">Product Name</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th class="price">Price</th>
                                        <th class="quantity">Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="flaticon-close"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <a href="#"><img src="assets/images/resource/shop/cart-1.jpg" alt=""></a>
                                                </div>
                                                <div class="prod-title">
                                                    Black Boys Shirt
                                                </div>    
                                            </div>
                                        </td>
                                        <td class="price">$50.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="flaticon-close"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <a href="#"><img src="assets/images/resource/shop/cart-2.jpg" alt=""></a>
                                                </div>
                                                <div class="prod-title">
                                                    Girls Print Tops
                                                </div>    
                                            </div>
                                        </td>
                                        <td class="price">$50.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="flaticon-close"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <a href="#"><img src="assets/images/resource/shop/cart-3.jpg" alt=""></a>
                                                </div>
                                                <div class="prod-title">
                                                    Baby Backpacks
                                                </div>    
                                            </div>
                                        </td>
                                        <td class="price">$70.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$70.00</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
                <div class="othre-content clearfix">
                    <div class="coupon-box pull-left clearfix">
                        <input type="text" placeholder="Enter coupon code...">
                        <button type="submit" class="theme-btn-two">Apply coupon<i class="flaticon-right-1"></i></button>
                    </div>
                    <div class="update-btn pull-right">
                        <button type="submit" class="theme-btn-one">Update Cart<i class="flaticon-right-1"></i></button>
                    </div>
                </div>
                <div class="cart-total">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                            <div class="total-cart-box clearfix">
                                <h4>Cart Totals</h4>
                                <ul class="list clearfix">
                                    <li>Subtotal:<span>$150</span></li>
                                    <li>Order Total:<span>$150</span></li>
                                </ul>
                                <a href="cart.php" class="theme-btn-two">Proceed to Checkout<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->


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
                                            <li><i class="flaticon-phone-ringing"></i><a href="tel:<?=$phone_1?>">+2(30<?=$phone_1?></a></li>
                                            <li><i class="flaticon-email"></i><a href="mailto:<?=$mail_1?>"><?=$mail_1?></a></li>
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
        <button class="scroll-top scroll-to-target" data-target=".php">
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
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->
</.php>
