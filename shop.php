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

        //include_once 'assets/php/view/loader.php';

        include_once 'assets/php/view/search_pop.php';

        include_once 'assets/php/view/menu_header.php';

        ?>
        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1><?=get_title()?></h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="./">Inicio</a></li>
                        <li>Productos</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->
        <?php 
        if(isset($_GET['category'])&&!empty($_GET['category'])){
            $cat = $_GET['category'];
            /** @COUNT PRODUCTS */
            $total_productos = set_count($cat);
        }else{
            $cat = false;
            /** @COUNT PRODUCTS * */
            $total_productos = set_count($cat); 
        }

        
        $total_productos = $total_productos[0]['total'];
        $productos_por_pagina = 6;
        $total_paginas = ceil($total_productos / $productos_por_pagina);


        if (isset($_GET['pag'])&&!empty($_GET['pag'])) {
            $pagina_actual = $_GET['pag'];
        } else {
            $pagina_actual = 1;
        }
  
        $indice_inicial = ($pagina_actual - 1) * $productos_por_pagina;
        $indice_final = $indice_inicial + $productos_por_pagina - 1;


        $arr = get_prod($cat, $indice_inicial, $productos_por_pagina);
        if(!empty($arr)){
            $params = $_SERVER['QUERY_STRING'];
            $real_prod = count($arr);
        }else{
            include_once 'assets/php/view/not_found.php';
            include_once 'assets/php/view/footer.php';
            //die();
            exit();
        }


        ?>
        <section class="shop-page-section sidebar-page-container shop-page-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="sidebar shop-sidebar">
                            <div class="sidebar-widget search-widget">
                                <form action="index.html" method="post" class="search-form">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search..." required="">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget categories-widget">
                                <div class="widget-title">
                                    <h3>Categorías</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="categories-list clearfix">
                                    <li><a href="shop.php?pag=1">Todos los productos</a></li>
                                        <?= get_cat(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                        <div class="sidebar-content">
                            <!---TITLE PRDUCTOS--->
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left clearfix">
                                    <div class="text">
                                        <p>Mostrando <?=$indice_inicial.' - '.$real_prod.' de '.$total_productos?> Resultados</p>
                                    </div>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="menu-box">
                                        <a href="shop.html"><i class="flaticon-menu"></i></a>
                                        <a href="shop.html"><i class="flaticon-list"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!---SHOW PRODUCTOS--->
                            <div class="our-shop">
                                <div class="row clearfix">
                                    <?php
                                        for ($i = 0; $i < count($arr); $i++) {
                                    ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-6 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img onclick="window.location.href='product-details-2.php?prod_id=<?=$arr[$i]['id']?>';"
                                                        src="assets/<?=separe($arr[$i]['img'], $cel = 0) ?>" 
                                                        alt="<?=$arr[$i]['name']?>" 
                                                        title="<?=$arr[$i]['name']?>">
                                                        <ul class="info-list clearfix">
                                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                                            <li><a href="product-details.html">Añadir</a></li>
                                                            <li>
                                                                <a href="assets/<?=separe($arr[$i]['img'], $cel = 0) ?>" class="lightbox-image" data-fancybox="gallery">
                                                                    <i class="flaticon-search"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </figure>
                                                    <div class="lower-content">
                                                        <a href="product-details.html"><?=$arr[$i]['name']?></a>
                                                        <span class="price">$ <?=$arr[$i]['price']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="pagination-wrapper centred">
                                <ul class="pagination clearfix">
                                    <?= prev_v($indice_inicial, $params, $pagina_actual)?>
                                    
                                    <!--- NUMBERS -->
                                    <?php for ($i = 1; $i <= $total_paginas; $i++) { 
                                        if($i == $pagina_actual){?>
                                            <li><a href="shop.php<?=uri_get($i, $params).$i;?>" class="active"><?=$i?></a></li>
                                        <?php }else{ ?>
                                            <li><a href="shop.php<?=uri_get($i, $params).$i;?>"><?=$i?></a></li>
                                        <?php } 
                                     }?>
                                    <?=next_x($indice_inicial, $params, $pagina_actual, $total_productos)?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    <script src="assets/js/jquery-ui.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->

</html>