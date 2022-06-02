<?php

include("./sql_connect.php");

    if(isset($_GET['category'])){
        if($_GET['category'] == 'floor'){
            $sql ="SELECT * FROM `light_led` WHERE categorize='FLOOR'";
        }
        if($_GET['category'] == 'desk_table'){
            $sql ="SELECT * FROM `light_led` WHERE categorize='DESK_TABLE'";
        }
        if($_GET['category'] == 'ceiling'){
            $sql ="SELECT * FROM `light_led` WHERE categorize='WALL_PENDANT_CEILING'";
        }

    }else{
        $sql ="SELECT * FROM `light_led` WHERE 1 ";
    }


$result = mysqli_query($conn,$sql);     
$data =mysqli_fetch_all($result,1);
mysqli_close($conn);

// change font-weight
        $color_f = $color_t = $color_c  = '';
        $color_all= 'content-item-color';
        if(isset($_GET['category'])){
            if($_GET['category'] == 'floor'){
            $color_f = 'content-item-color';
            $color_all='';
            }
            if($_GET['category'] == 'desk_table'){
                $color_t = 'content-item-color';
                $color_all='';
            }
            if($_GET['category'] == 'ceiling'){
                $color_c = 'content-item-color';
                $color_all='';
            }
        }

        echo' <div class="content " id="content">
        <div class="content_hiden">
            <div class="grap header-img ">
                    <img src="./resources/img/anh1.png" alt="" width="100%">
            </div>
            <div class="garp">
                <ul class="content-list">
                    <li class="content-item '.$color_all.' "><a href="./"  class="category_a" style="color:black;">ALL</a></li>
                    <li class="content-item '.$color_t.'"><a href="?category=desk_table"  class="category_d" style="color:black;" >DESK & TABLE</a></li>
                    <li class="content-item '.$color_f.'"><a href="?category=floor"  class="category_f" style="color:black;" >FLOOR</a></li>
                    <li class="content-item '.$color_c.'"><a href="?category=ceiling"  class="category_c" style="color:black;" >WALL , PENDANT & CEILING</a></li>
                </ul>
            </div>
        </div>';
        echo '

        <div class="grap content-main"  >  
            <div class="row" id="root" >';       
                    for( $i =0 ; $i < count($data); $i++){
                        echo ' <div id="animation_x" style="color:black; cursor: default; position:relative; " class="col-xl-4 col-lg-6 col-md-6 box22" >
                            <a href="?slug='.$data[$i]["code_id"].'" style="cursor: pointer;" class="content-main-imgb">
                            <img class="content-main-img1" width="100%" src="'.$data[$i]["image1"].'" alt="">
                            <img class="content-main-img2" width="100%" src="'.$data[$i]["image2"].'" alt="">
                    
                            </a>
                            <div class="content-main-atb">
                                <div class="content-main-name">'.$data[$i]["brand"].' - '.$data[$i]["name"].'</div>
                                <div class="content_plus_cart" ">';
                                        if($data[$i]["discount"] > 0){
                                            echo'<div class="content-main-price fs-5 me-4" style="font-weight:500; color:coral"><span style="text-decoration: line-through; color:black;     font-weight:200; ">$'.$data[$i]["price"].'.00 USD</span>  $'.ceil(($data[$i]["price"]*((100-$data[$i]["discount"]))/100)).'.00 USD </div>
                                            <div onclick=addCart_home("'.$data[$i]["code_id"].'","'.$data[$i]["image1"].'","'.Str_replace(' ','-',$data[$i]["brand"]).'","'.Str_replace(' ','-',$data[$i]["name"]).'","'.ceil(($data[$i]["price"]*((100-$data[$i]["discount"]))/100)).'") class="over"><i class="fa-solid fa-cart-plus"></i></div>';
                                        }else{
                                            echo'<div class="content-main-price fs-5 me-4">$'.$data[$i]["price"].'.00 USD</div>
                                            <div onclick=addCart_home("'.$data[$i]["code_id"].'","'.$data[$i]["image1"].'","'.Str_replace(' ','-',$data[$i]["brand"]).'","'.Str_replace(' ','-',$data[$i]["name"]).'","'.$data[$i]["price"].'") class="over"><i class="fa-solid fa-cart-plus"></i></div>';
                                        }
                                        echo'
                                        
                                </div>';
                                if($data[$i]["discount"] > 0){
                                    echo'<div class="home-product-item__sale-off">
                                    <div class="" style="font-size: 20px;font-weight: 200; ">'.$data[$i]["discount"].'%</div>
                                    <div class=""  style="font-size: 20px;font-weight: 200; ">sale</div>
                                </div>';
                                }
                                
                                echo'
                                <div style="    font-weight: 700;padding-top: 20px;font-size: 20px;color: coral; ">Number of warehouses: '.$data[$i]["quantily"].'</div>

                            </div>
                        </div>
                        ';
                    }

                    
            echo '      
            </div>
        </div>
        </div>  
        <script>
        document.querySelector("#main_title").innerHTML = "HOME";
        </script>
';
?>