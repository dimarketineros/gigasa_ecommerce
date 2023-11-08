<!-- main header -->
<header class="main-header">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="top-left pull-left">
                    <ul class="info clearfix">
                        <li><i class="flaticon-email"></i><a
                                href="mailto:<?=$mail_1;?>"><?=$mail_1;?></a></li>
                        <li><i class="flaticon-global"></i> <?=$dir_short?></li>
                    </ul>
                </div>
                <div class="top-right pull-right">
                    <ul class="social-links clearfix">
                        <li><a href="<?=$facebook?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?=$facebook?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?=$facebook?>"><i class="fab fa-vimeo-v"></i></a></li>
                        <li><a href="<?=$facebook?>"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                    <div class="language">
                        <!---
                        <div class="lang-btn">
                            <span class="flag"><img src="assets/images/icons/icon-lang.png" alt=""
                                    title="English"></span>
                            <span class="txt">English</span>
                            <span class="arrow fa fa-angle-down"></span>
                        </div>
                        <div class="lang-dropdown">
                            <ul>
                                <li><a href="index.php">German</a></li>
                                <li><a href="index.php">Italian</a></li>
                                <li><a href="index.php">Chinese</a></li>
                                <li><a href="index.php">Russian</a></li>
                            </ul>
                        </div>
                        --->
                    </div>

                    <div class="price-box">
                        <!---
                        <span>USD</span>
                        <ul class="price-list clearfix">
                            <li><a href="index.php">USD</a></li>
                            <li><a href="index.php">UK</a></li>
                            <li><a href="index.php">URO</a></li>
                            <li><a href="index.php">Spanish</a></li>
                        </ul>
                        --->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box">
                    <a href="./">
                        <img src="assets/images/logo.png" alt=""></a>
                </figure>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="./">Inicio</a>
                                </li>
                                <li><a href="about.php">Nosotros</a>
                                </li>
                                <li><a href="service.php">Servicios</a>
                                </li>                                
                                <li class="dropdown"><a href="shop.php">Productos<span>Categorías</span></a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 column">
                                                <ul>
                                                    <li>
                                                        <h4>Categorías</h4>
                                                    </li>
                                                    <?= get_cat();?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!----
                                <li class="dropdown"><a href="cart.php">Car</a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 column">
                                                <ul>
                                                    <li>
                                                        <h4>Other Shop Page</h4>
                                                    </li>
                                                    <li><a href="cart.php">Cart Page</a></li>
                                                    <li><a href="checkout.php">Checkout Page</a></li>
                                                    <li><a href="my-account.php">My Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 column">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                --->
                                <li><a href="contact.php">Contacto</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="menu-right-content clearfix">
                    <li>
                        <div class="search-btn">
                            <button type="button" class="search-toggler"><i
                                    class="flaticon-search"></i></button>
                        </div>
                    </li>
                    <li><a href="index.php"><i class="flaticon-like"></i></a></li>
                    <li><a href="index.php"><i class="flaticon-user"></i></a></li>
                    <li class="shop-cart">
                        <a href="shop.php"><i class="flaticon-shopping-cart-1"></i><span>3</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.php"><img src="assets/images/small-logo.png"
                                alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="./"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><?=$dir?></li>
                        <li><a href="tel:<?=$phone_1?>">+<?=$phone_1?></a></li>
                        <li><a href="mailto:<?=$mail_1;?>"><?=$mail_1;?></a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="./"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="./"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="./"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="./"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="./"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
