<?php

include("./sql_connect.php");
$sql ="SELECT * FROM `light_led` WHERE `brand` = '".$_GET['brand']."'";
echo $sql;
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
$count = count($data);
mysqli_close($conn);
echo ' 
<div class="content " id="content">
    <div class="mt-5 search_item_tlt">All brands '.$_GET['brand'].' are shown below </div>
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
                    echo'<div class="content-main-price fs-5 me-4" style="font-weight:500;"><span style="text-decoration: line-through; font-weight:200; ">$'.$data[$i]["price"].'.00 USD</span>  $'.ceil(($data[$i]["price"]*((100-$data[$i]["discount"]))/100)).'.00 USD </div>';
                }else{
                    echo'<div class="content-main-price fs-5 me-4">$'.$data[$i]["price"].'.00 USD</div>';
                }
                echo'
                 <div onclick=addCart_home("'.$data[$i]["code_id"].'","'.$data[$i]["image1"].'","'.Str_replace(' ','-',$data[$i]["brand"]).'","'.Str_replace(' ','-',$data[$i]["name"]).'","'.$data[$i]["price"].'") class="over"><i class="fa-solid fa-cart-plus"></i></div>
        </div>';
        if($data[$i]["discount"] > 0){
            echo'<div class="home-product-item__sale-off">
            <div class="" style="font-size: 20px;font-weight: 200; ">'.$data[$i]["discount"].'%</div>
            <div class=""  style="font-size: 20px;font-weight: 200; ">sale</div>
        </div>';
        }
    
        echo'
    </div>
</div>
    <script>
    document.querySelector("#main_title").innerHTML = "BRAND";
    </script>
    ';
}


?>
