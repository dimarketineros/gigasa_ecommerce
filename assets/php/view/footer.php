<!-- main-footer -->
<footer class="main-footer light">
    <div class="footer-top">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="./"><img src="assets/images/footer-logo.png"
                                            alt=""></a></figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Insumos Térmicos</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="./">Terminos y condiciones</a></li>
                                        <li><a href="./">Boletín</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Sitio</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="./">Inicio</a></li>
                                        <li><a href="about.php">Nosotros</a></li>
                                        <li><a href="service.php">Servicios</a></li>
                                        <li><a href="shop.php">Productos</a></li>
                                        <li><a href="contact.php">Contacto</a></li>
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
                                    <h3>Dirección</h3>
                                </div>
                                <ul class="info-list clearfix">
                                    <li onclick="window.open('<?= $dir_link; ?>',<?= $size_view; ?>);"><i class="flaticon-maps-and-flags"></i><a><?=$dir?></li>
                                    <li><i class="flaticon-phone-ringing"></i><a href="tel:<?=$phone_2?>"><?=$phone_2?></a></li>
                                    <li><i class="fab fa-whatsapp"></i><a href="mailto:<?=$whats?>"><?=$whats?></a></li>                                    
                                    <li><i class="flaticon-email"></i><a href="mailto:<?=$mail_1?>"><?=$mail_1?></a></li>
                                    
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>Mantente en contacto</h3>
                                </div>
                                <ul class="footer-social clearfix">
                                    <li onclick="window.open('<?= $facebook; ?>',<?= $size_view; ?>);" ><a><i class="fab fa-facebook-f"></i></a></li>
                                    <li onclick="window.open('<?= $facebook; ?>',<?= $size_view; ?>);" ><a><i class="fab fa-twitter"></i></a></li>
                                    <li onclick="window.open('<?= $facebook; ?>',<?= $size_view; ?>);" ><a><i class="fab fa-instagram"></i></a></li>
                                    <li onclick="window.open('<?= $facebook; ?>',<?= $size_view; ?>);" ><a><i class="fab fa-whatsapp"></i></a></li>
                                </ul>                                
                                <div class="widget-content">
                                    <p>Deseo recibir mas información</p>
                                    <form action="contact.php" method="GET" class="newsletter-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="ejemplo@gmail.com" required="">
                                            <button type="submit" class="theme-btn-two">Suscribirse</button>
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
            <div id="legend_end" class="copyright pull-right">
                <p><a href="./">Insumos Térmicos </a> &copy; 2020 All Right Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-long-arrow-alt-up"></i>
</button>