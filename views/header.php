<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="./resources/css/main.css">
    <link rel="stylesheet" href="./resources/css/media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/b369642a0f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <title id="main_title">Document</title>
</head>
<body>
<div id="comeback"></div>
<div id="app">
<div class="header_mobile" style="z-index:2; height:200px , border-bottom: 1px solid #555">
            <div class="grap header-title">
              <div class="header-title" >QUALITY LED LIGHTING FOR CONTEMPORARY INTERIORS.</div>
            </div>

            <div class="grap header_mobile_flex">

                <div class="header_mobile_flex">
                        <label style="cursor:pointer" for="check_menu"class="header_mobile_icon"><i class="fa-solid fa-bars"></i></label>
                        <div  style="cursor:pointer" class="header_mobile_icon icon_search"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <!-- search -->
                            <div class="header_mobile_search"  style="display:none;">
                                <div class="text-end close_search">
                                        <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                                </div>
                                <input type="text" class="header-search-input header_mobile_ip" placeholder="Search here ...">
                                <a href="./" class="header-search-icon header_mobile_icon_seach">
                                    <i class="fa-solid fa-magnifying-glass header-search-icons"></i>
                                </a>
                            </div>
                        <!-- cart -->
                        <div class="header_cart_big2">
                            <div  style="left: 73.3px;"class="header_cart_big_quantity2">0</div>
                            <label style="font-size: 30px;margin-left: 50px;" for="check_boxx2" class="header-search-cart"><i class="fa-solid fa-cart-arrow-down cart_cl"></i></label>
                            <input type="checkbox" name="" id="check_boxx2" style="display:none;">
                            <label for="check_boxx2" class="fixedd2"></label>
                            <div class="header_cart_grap2">
                                <div class="text-end">
                                    <label for="check_boxx2" class="btn-close btn-close-white" aria-label="Close"></label>
                                </div>
                                <div class="header_cart_t">
                                    <div class="header_cart_t_1">CART</div>
                                    <a href="?slug=view_cart">VIEW CART</a>
                                </div>
                                <div class="header_cart_contentt2">
                                    

                                </div> 
                                <div class="main_flex main_p">
                                    <div class="header_cart_fs3">Subtotal</div>
                                    <div class="header_cart_fs3" id="cart_price2">$0.00</div>
                                </div>
                                <div class="cart_disable" style="display:none">
                                 <a href="?route=shipping" class="header_cart_buy">Check Out</a>
                                </div>
                            </div>
                        </div>
                        <!-- Menu -->
                        <input type="checkbox" name="" id="check_menu" style="display:none;">
                        <label for="check_menu" class="fixedd"></label>

                        <div class="header_mobile_fixed">
                                <div class="text-end">
                                    <label for="check_menu" type="button" class="btn-close btn-close-white" aria-label="Close"></label>
                                </div>
                                <div class="fs-2 text-center" style="font-weight:200;">Bright World Menu</div>
                                <ul class="">
                                    <li class=""><a class="header_mobile_item_big" href="./">HOME</a></li>
                                    <li class="xxx " ><div class="header_mobile_item_big" href="#">CATEGORIES</div>
                                        <ul class="text-end yyy" >
                                            <li class=""><a class="header_mobile_item" href="./">ALL</a></li>
                                            <li class=""><a class="header_mobile_item" href="?category=desk_table">TABLE</a></li>
                                            <li class=""><a class="header_mobile_item" href="?category=floor">FLOOR</a></li>
                                            <li class=""><a class="header_mobile_item" href="?category=ceiling">WALL , PENDANT & CEILING</a></li>
                                        </ul>                                    </li>
                                    <li class=" " style="margin-top:-20px;"><a class="header_mobile_item_big" href="?route=support">SUPPORT</a></li>
                                    <li class="  "><a class="header_mobile_item_big" href="?route=contact">CONTACT</a></li>
                                </ul>
                        </div>


                </div>

                <a href="./" class="header-controller-right text-center" style="width:55%;">
                    <img class="" src="./resources\img\logo3.png" alt="" style="5" width="200px" height="60px">
                </a>

            </div>
</div>
<div class="header" style="z-index:2;">
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
                                                    <li class="header-shop-item-l"><a  href="./">ALL</a></li>
                                                    <li class="header-shop-item-l "><a  href="?category=desk_table">DESK & TABLE</a></li>
                                                    <li class="header-shop-item-l "><a  href="?category=floor">FLOOR</a></li>
                                                    <li class="header-shop-item-l "><a  href="?category=ceiling" >WALL , PENDANT & CEILING</a></li>
                                                </ul>
                                            </div>  
                                            <div class="col-lg-9">
                                                <div class="header-shop-title">SHOP BY PRODUCT</div>
                                                <div class="row" id="header-shop-product">
                                                    <?php
                                                        include("./sql_connect.php");
                                                        $sql ="SELECT * FROM `light_led` where 1";
                                                        $result = mysqli_query($conn,$sql);
                                                        $data =mysqli_fetch_all($result,1);
                                                        mysqli_close($conn);
                                                        
                                                        for( $i =0 ; $i < count($data); $i++){
                                                         echo '
                                                            
                                                         <a href="?slug='.$data[$i]["code_id"].'" class="col-lg-3 header-shop-cursor" >
                                                             <div class="header-shop-item">
                                                                 <img src="'.$data[$i]["image1"].'" alt="" width="80px" height="80px">
                                                                 <div class="header-shop-item-f">'.$data[$i]["brand"].' '.$data[$i]["name"].'</div>
                                                             </div>
                                                         </a>
                                                        ';
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-controller-left-item"><a class="header-controller-left-item-hover" href="?route=support">SUPPORT</a> </li>
                                <li class="header-controller-left-item"><a class="header-controller-left-item-hover" href="?route=contact">CONTACT</a></li>

                            </ul>
                        </div>
                        <div class="text-center" style="width:50%">                            
                                <a href="./" class="header-controller-right">
                                    <img class="" src="./resources\img\logo3.png" alt="" style="5" width="200px" height="60px">
                                </a>
                        </div>  
                </div>
                <div class="header-search">
                        <div class="header-search-grap">
                            <input type="text" class="header-search-input" placeholder="Search here ...">
                            <a href="./" class="header-search-icon">
                                <i class="fa-solid fa-magnifying-glass header-search-icons"></i>
                            </a>
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
                                    <a href="?slug=view_cart">VIEW CART</a>
                                </div>
                                <div class="header_cart_contentt">
                                    

                                </div> 
                                <div class="main_flex main_p">
                                    <div class="header_cart_fs3">Subtotal</div>
                                    <div class="header_cart_fs3" id="cart_price">$0.00</div>
                                </div>
                                <div class="cart_disable" style="display:none">
                                 <a href="?route=shipping" class="header_cart_buy">Check Out</a>
                                </div>
                            </div>
                        </div>
                </div>


            </div>
      </div>
