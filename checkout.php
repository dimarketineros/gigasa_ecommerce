<!DOCTYPE html>
<html lang="es">
<?php include_once 'assets/php/pixel.php'; ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Template - Cheackout</title>

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
                    <h1>Checkout Page</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="index.php">Home</a></li>
                        <li>Checkout Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- checkout-section -->
        <section class="checkout-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 upper-column">
                        <div class="upper-box">
                            <div class="customer single-box">Returning Customer? <a href="#">Click here to Login</a></div>
                            <div class="coupon single-box">Have a Coupon? <a href="#">Click here to enter your code</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="inner-box">
                            <div class="billing-info">
                                <h4 class="sub-title">Billing Details</h4>
                                <form action="#" method="post" class="billing-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>First Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Last Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Company Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="company_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Email Address*</label>
                                            <div class="field-input">
                                                <input type="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone Number*</label>
                                            <div class="field-input">
                                                <input type="text" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Country*</label>
                                            <div class="select-column select-box">
                                                <select class="selectmenu" id="ui-id-1">
                                                    <option selected="selected">Select Option</option>
                                                    <option>United State</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Address*</label>
                                            <div class="field-input">
                                                <input type="text" name="address" class="address">
                                                <input type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Town/City*</label>
                                            <div class="field-input">
                                                <input type="text" name="town_city">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>State*</label>
                                            <div class="select-column select-box">
                                                <select class="selectmenu" id="ui-id-2">
                                                    <option selected="selected">Select Option</option>
                                                    <option>United State</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Zip Code*</label>
                                            <div class="field-input">
                                                <input type="text" name="zip">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="create-acc">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control material-checkbox">
                                                        <input type="checkbox" class="material-control-input">
                                                        <span class="material-control-indicator"></span>
                                                        <span class="description">Create an Account?</span>
                                                    </label>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="additional-info">
                                <div class="note-book">
                                    <label>Order Notes</label>
                                    <textarea name="note_box" placeholder="Notes about your order, e.g. special notes for your delivery"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="inner-box">
                            <div class="order-info">
                                <h4 class="sub-title">Your Order</h4>
                                <div class="order-product">
                                    <ul class="order-list clearfix">
                                        <li class="title clearfix">
                                            <p>Product</p>
                                            <span>Total</span>
                                        </li>
                                        <li>
                                            <div class="single-box clearfix">
                                                <img src="assets/images/resource/shop/order-1.jpg" alt="">
                                                <h6>Side-Tie Tank</h6>
                                                <span>$35.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-box clearfix">
                                                <img src="assets/images/resource/shop/order-2.jpg" alt="">
                                                <h6>Must-Have Easy Tank</h6>
                                                <span>$25.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-box clearfix">
                                                <img src="assets/images/resource/shop/order-3.jpg" alt="">
                                                <h6>Woven Crop Cami</h6>
                                                <span>$90.00</span>
                                            </div>
                                        </li>
                                        <li class="sub-total clearfix">
                                            <h6>Sub Total</h6>
                                            <span>$150.50</span>
                                        </li>
                                        <li class="order-total clearfix">
                                            <h6>Order Total</h6>
                                            <span>$150.50</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-info">
                                <h4 class="sub-title">Payment Proccess</h4>
                                <div class="payment-inner">
                                    <div class="option-block">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Direct bank transfer</span>
                                            </label>
                                        </div>
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                    <div class="option-block">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Paypal<a href="checkout.php">What is paypal?</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="checkout.php" class="theme-btn-two">Place Your Order<i class="flaticon-right-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout-section end -->


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
