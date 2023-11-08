<?php


function get_banner()
{
    include 'assets/db/conexion_db.php';
    $sql = "SELECT * FROM `banner`;";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            ?>
            <div class="slide-item">
                <div class="auto-container">
                    <div class="content-inner">
                        <div class="content-box">
                            <h1><br /><span>15</span>AÑOS DE <BR>EXPERIENCIA</h1>
                            <h3>Insumos Térmicos</h3>
                            <p>EXPERTOS EN MATERIALES PARA FABRICACIÓN Y MANTENIMIENTO DE HORNOS INDUSTRIALES</p>
                            <div class="btn-box">
                                <a href="./" class="theme-btn-one">Contáctanos<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                        <figure class="image-box image-1"><img src="assets/images/banner/banner-image-1.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="slide-item">
            <div class="auto-container">
                <div class="content-inner">
                    <div class="content-box">
                        <h3>No encontrado</h3>
                        <p>No se han encontrado resultados</p>
                        <div class="btn-box">
                            <a href="./" class="theme-btn-one">Contáctanos<i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                    <figure class="image-box image-1"><img src="assets/images/banner/banner-image-1.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <?php
    }
}

/*
 *
 * SEPARATE IMGS 
 * 
 */
function separe($var, $cel)
{
    $arr = explode("#", $var);
    $img = $arr[$cel];
    $img = str_replace('./', '', $img);
    if ($img == '') {
        $img = 'none';
    } else {
    }
    return $img;
}
function get_principal()
{
    include 'assets/db/conexion_db.php';
    $sql = "SELECT product.*, principal_products.id_prod, principal_products.enlace FROM `product` 
    LEFT JOIN `principal_products` ON principal_products.id_prod = product.id
    WHERE principal_products.id_prod = product.id";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="<?= $row['id'] ?>00ms"
                    data-wow-duration="1500ms">
                    <figure class="image-box">
                        <img src="assets/<?= separe($row['img'], $cel = 0) ?>" title="<?= $row['detail'] ?>"
                            alt="<?= $row['detail'] ?>">
                    </figure>
                    <h5><a href="./">
                            <?= $row['name'] ?>
                        </a></h5>
                </div>
            </div>
            <?php
        }
    } else {

    }
}

function get_limit_prod()
{
    include 'assets/db/conexion_db.php';
    $sql = "SELECT * FROM `product` WHERE `category` != 'Servicios' ORDER BY RAND() LIMIT 0, 12;";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $id = $row['id'];
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals top_rate">
                <div class="shop-block-one">
                    <div class="inner-box">
                        <figure class="image-box" onclick="window.location.href='product-details-2.php?prod_id=<?= $id ?>';">
                            <img id="<?= $row['id'] ?>" onmouseover="cambiarImagen<?= $id ?>()"
                                onmouseout="restaurarImagen<?= $id ?>()" src="assets/<?= separe($row['img'], $cel = 0) ?>"
                                alt="<?= $row['name'] ?>" title="<?= $row['name'] ?>">
                            <ul class="info-list clearfix">
                                <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                <li><a href="product-details-2.php">Añadir al carrito</a></li>
                                <li><a href="assets/<?= separe($row['img'], $cel = 0) ?>" class="lightbox-image"
                                        data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <a href="product-details-2.php?prod_id=<?= $id ?>">
                                <?= $row['name'] ?>
                            </a>
                            <span class="price">$
                                <?= $row['price'] ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function cambiarImagen<?= $id ?>() {
                    document.getElementById("<?= $id ?>").src = "assets/<?= separe($row['img'], $cel = 1) ?>";
                    document.getElementById("<?= $id ?>").style.transform ='s   cale(1.2)';
                 }
                 function restaurarImagen<?= $id ?>() {
                     document.getElementById("<?= $id ?>").src = "assets/<?= separe($row['img'], $cel = 0) ?>";
                     document.getElementById("<?= $id ?>").style.transform = 'scale(1.1)';
                 }
            </script>
            <?php
        }
    } else {

    }
}
function get_detail_prod($id)
{
    include 'assets/db/conexion_db.php';
    $sql = "SELECT * FROM `product` WHERE `id` = '$id';";
    $result = $con->query($sql);
    $fila = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $fila[] = $row;
        }
    } else {
        $fila = '';
    }
    return $fila;
}
function get_detail_serv()
{
    include 'assets/db/conexion_db.php';
    $sql = "SELECT * FROM `product` WHERE `category` = 'Servicios';";
    $result = $con->query($sql);
    $fila = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $fila[] = $row;
        }
    } else {
        $fila = '';
    }
    return $fila;
}
function get_container($arr)
{
    if (!empty($arr)) {
        $arr_n = explode("#", $arr);
        for ($i = 0; $i < count($arr_n); $i++) {
            ?>
            <div class="slider-content">
                <div class="slider-pager">
                    <ul class="thumb-box">
                        <?= get_gallery($arr) ?>
                    </ul>
                </div>
                <div class="product-image">
                    <figure class="image">
                        <img src="assets/<?= separe($arr, $cel = $i) ?>" alt="">
                        <a href="assets/<?= separe($arr, $cel = $i) ?>" class="lightbox-image"><i class="flaticon-search-2"></i></a>
                    </figure>
                </div>
            </div>
            <?php
        }
    } else {

    }
}
function get_gallery($var)
{
    $arr = explode("#", $var);
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = str_replace('./', '', $arr[$i]);
        if ($i == 0) { ?>
            <li>
                <a class="active" data-slide-index="<?= $i ?>" href="#">
                    <figure><img src="assets/<?= $arr[$i] ?>" alt=""></figure>
                </a>
            </li>
        <?php } else { ?>
            <li>
                <a data-slide-index="<?= $i ?>" href="#">
                    <figure><img src="assets/<?= $arr[$i] ?>" alt=""></figure>
                </a>
            </li>
            <?php
        }
    }
?>
<?php
}

function get_similar($cat)
{
    include 'assets/db/conexion_db.php';
    $sql = "SELECT * FROM `product` WHERE `category` LIKE '%$cat%';";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            ?>
            <div class="item shop-block">
                <div class="shop-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img id="img_rec" 
                                onclick="window.location.href='product-details-2.php?prod_id=<?=$row['id']?>';"
                                src="assets/<?= separe($row['img'], $cel = 0) ?>" title="<?= $row['name'] ?>"
                                alt="<?= $row['name'] ?>">
                            <span class="category green-bg">Nuevo</span>
                            <ul id="add_to" class="info-list clearfix">
                                <li><a href="./"><i class="flaticon-heart"></i></a></li>
                                <li><a href="product-details-2.php">Añadir al carrito</a></li>
                                <li><a href="assets/<?= separe($row['img'], $cel = 0) ?>" class="lightbox-image"
                                        data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                            </ul>
                        </figure>
                        <div class="lower-content">
                            <a href="product-details-2.php">
                                <?= $row['name'] ?>
                            </a>
                            <span class="price">$
                                <?= $row['price'] ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
    }
}

function get_cat()
{
    include 'assets/db/conexion_db.php';
    $sql = "SELECT id, category FROM `product` WHERE `category` != 'Servicios' GROUP BY `category`;";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            ?>
            <li>
                <a href="shop.php?category=<?= $row['category']?>&pag=1">
                    <?= $row['category'] ?>
                </a>
            </li>
            <?php
        }
    } else {
        echo "<li><a href='./'>Volver a inicio</a></li>";
    }

}

function get_prod($cat=false, $indice_inicial, $productos_por_pagina)
{
    include 'assets/db/conexion_db.php';
    if($cat!=false){
        $sql = "SELECT * FROM `product` WHERE 
        `category` != 'Servicios' AND 
        `category` = '$cat' LIMIT $indice_inicial, $productos_por_pagina
        ;";  
    }else{
      $sql = "SELECT * FROM `product` WHERE 
      `category` != 'Servicios' LIMIT $indice_inicial, $productos_por_pagina
      ;";  
    }
    
    $result = $con->query($sql);
    $fila = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $fila[] = $row;
        }
    } else {
        $fila = '';
    }
    return $fila;
}

function uri_get($i, $params){
    parse_str($params, $array);
    $new = array_pop($array);
    $str = http_build_query($array); $str;
    $var = '?' . $str . '&pag=';
    return $var;
}

function prev_v($ini, $params, $act){
if($ini < 6){
    $prev = '';
}else{
    parse_str($params, $array);
    $new = array_pop($array);
    $str = http_build_query($array); $str;

    $act = $act - 1;
    $prev = '<li><a href="shop.php?'.$str.'&pag='.$act.'">Atras</a></li>';
}
    return $prev;
}
function next_x($ini, $params, $act, $real){
    if($real < 5){
        $prev = '';
    }else{    
    parse_str($params, $array);
    $new = array_pop($array);
    $str = http_build_query($array); $str;

    $act = $act + 1;
    $prev = '<li><a href="shop.php?'.$str.'&pag='.$act.'" class="siguiente">Siguiente</a></li>';
    }
    return $prev;
}

function set_count($cat=false){
    include 'assets/db/conexion_db.php';
    if($cat!=false){
        $sql = "SELECT COUNT(*) AS `total` FROM `product` WHERE 
        `category` != 'Servicios' AND 
        `category` = '$cat' 
        ;";  
    }else{
      $sql = "SELECT COUNT(*) AS `total` FROM `product` WHERE 
      `category` != 'Servicios' 
      ;";  
    }
    
    $result = $con->query($sql);
    $fila = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $fila[] = $row;
        }
    } else {
        $fila = '';
    }
    return $fila;
}



function get_title(){
    if(isset($_GET['category'])&&!empty($_GET['category'])){
        $cat = $_GET['category'];
        echo $cat;
    }else{
        echo "Todos nuestros productos";
    }    
}
?>