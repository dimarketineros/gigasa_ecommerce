<!DOCTYPE html>
<html lang="es">
<?php include_once 'assets/php/pixel.php'; ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Template acount</title>
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
                    <h1>My Account</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="index.php">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- myaccount-section -->
        <section class="myaccount-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box login-inner">
                            <div class="upper-inner">
                                <h3>Log in</h3>
                                <p>Log in to access all your resources</p>
                            </div>
                            <form action="my-account.php" method="post" class="default-form">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" required="">
                                </div>
                                <div class="form-group">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">Remember me</span>
                                        </label>
                                    </div>
                                    <a href="my-account.php" class="recover-password">Lost your password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn-two">Log In<i class="flaticon-right-1"></i></button>
                                </div>
                            </form>
                            <div class="lower-inner centred">
                                <span>or</span>
                                <ul class="social-links clearfix">
                                    <li><a href="my-account.php"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                    <li><a href="my-account.php"><i class="fab fa-google-plus-g"></i>Google</a></li>
                                </ul>
                                <p>Don't Have an Account? <a href="my-account.php">Sign up Now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box signup-inner">
                            <div class="upper-inner">
                                <h3>Create An Account</h3>
                                <p>Log in to access all your resources</p>
                            </div>
                            <form action="my-account.php" method="post" class="default-form">
                                <div class="form-group">
                                    <label>Your name</label>
                                    <input type="text" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" required="">
                                </div>
                                <div class="form-group">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">I agree to terms & Policy.</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn-two">Sign Up<i class="flaticon-right-1"></i></button>
                                </div>
                            </form>
                            <div class="lower-inner centred">
                                <span>or</span>
                                <ul class="social-links clearfix">
                                    <li><a href="my-account.php"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                    <li><a href="my-account.php"><i class="fab fa-google-plus-g"></i>Google</a></li>
                                </ul>
                                <p>Already have an account? <a href="my-account.php">Log In Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- myaccount-section end -->


        <!-- main-footer -->
        <footer class="main-footer light">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget logo-widget">
                                        <figure class="footer-logo"><a href="index.php"><img src="assets/images/footer-logo-2.png" alt=""></a></figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>Category</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a href="index.php">Men</a></li>
                                                <li><a href="index.php">Women</a></li>
                                                <li><a href="index.php">Kids</a></li>
                                                <li><a href="index.php">Accessories</a></li>
                                                <li><a href="index.php">Shoe</a></li>
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
                                                <li><a href="index.php">News & Tips</a></li>
                                                <li><a href="index.php">About Us</a></li>
                                                <li><a href="index.php">Terms & Conditions</a></li>
                                                <li><a href="index.php">Our Shop</a></li>
                                                <li><a href="index.php">Contact Us</a></li>
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
                        <li><a href="index.php"><img src="assets/images/resource/card-1.png" alt=""></a></li>
                        <li><a href="index.php"><img src="assets/images/resource/card-2.png" alt=""></a></li>
                        <li><a href="index.php"><img src="assets/images/resource/card-3.png" alt=""></a></li>
                        <li><a href="index.php"><img src="assets/images/resource/card-4.png" alt=""></a></li>
                    </ul>
                    <div class="copyright pull-right">
                        <ul class="footer-social clearfix">
                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <p><a href="index.php">Castro</a> &copy; 2020 All Right Reserved</p>
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
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->
</html>
