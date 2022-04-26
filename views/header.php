<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="./resources/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/b369642a0f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div id="comeback"></div>
<div id="app">
<div class="header">
            <div class="grap header-title">
              <div class="header-title" >QUALITY LED LIGHTING FOR CONTEMPORARY INTERIORS.</div>
            </div>
            <div class="grap flex-sp header-p header-content">

                <div class="header-controller flex-sp ">
                        <div class="header-controller-left flex-sp">
                            <ul class="header-controller-left-list">
                                <li class="header-controller-left-item ">
                                    <a class="header-controller-left-item-hover shop-hover" href="./">SHOP</a>
                                    <!-- hover shop -->
                                    <div class="header-shop">
                                        <div class="row row-w">
                                            <div class="col-lg-3">
                                                <div class="header-shop-title">CATEGORIES</div>
                                                <ul class="">
                                                    <li class="header-shop-item-l"><a href="./">ALL</a></li>
                                                    <li class="header-shop-item-l "><a  href="?category=desk_table">DESK & TABLE</a></li>
                                                    <li class="header-shop-item-l "><a  href="?category=floor">FLOOR</a></li>
                                                    <li class="header-shop-item-l "><a  href="?category=ceiling" >WALL , PENDANT & CEILING</a></li>
                                                </ul>
                                            </div>  

                                            <div class="col-lg-9">
                                                <div class="header-shop-title">SHOP BY PRODUCT</div>
                                                <div class="row" id="header-shop-product">
                                                    <?php
                                                         include ('./sql_data/shop.php')    ;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-controller-left-item"><a class="header-controller-left-item-hover" href="?route=support">SUPPORT</a> </li>
                                <li class="header-controller-left-item "><a class="header-controller-left-item-hover" href="./resources\img\LUX_2021.pdf">GALLER</a></li>
                                <li class="header-controller-left-item"><a class="header-controller-left-item-hover" href="?route=contact">CONTACT</a></li>

                            </ul>

                            <a href="/led_light_project" class="header-controller-right">
                                <img src="https://cdn.shopify.com/s/files/1/2140/1185/files/LUX_LED_Lighting_Logo_2000x1000_Transparent-01_512x.png?v=1579286210" alt="" width="130px" height="65px">
                            </a>

                        </div>

                </div>

                <div class="header-search">
                        <div class="header-search-grap">
                            <input type="text" class="header-search-input" placeholder="Search here ...">
                            <div class="header-search-icon">
                                <i class="fa-solid fa-magnifying-glass header-search-icons"></i>
                            </div>
                        </div>
                        <div class="header_cart_big">
                            <div class="header_cart_big_quantity">0</div>
                            <label for="check_boxx" class="header-search-cart"><i class="fa-solid fa-cart-arrow-down cart_cl"></i></label>
                            <input type="checkbox" name="" id="check_boxx" style="display:none;">
                            <label for="check_boxx" class="fixedd"></label>
                            <div class="header_cart_grap">
                                <div class="text-end">
                                    <label for="check_boxx" class="btn-close btn-close-white" aria-label="Close"></label>
                                </div>
                                <div class="header_cart_t">
                                    <div class="header_cart_t_1">CART</div>
                                    <a href="#">VIEW CART</a>
                                </div>
                                <div class="header_cart_contentt">
                                    

                                    
                                </div> 
                                <div class="main_flex main_p">
                                    <div class="header_cart_fs3">Subtotal</div>
                                    <div class="header_cart_fs3" id="cart_price">$0.00</div>
                                </div>
                                <div class="">
                                 <a href="?route=shipping" class="header_cart_buy">Check Out</a>
                                </div>
                            </div>
                        </div>
                </div>


            </div>
      </div>

