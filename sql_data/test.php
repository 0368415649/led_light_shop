<?php

$conn = new mysqli("localhost","root","","light_led_project");
if(isset($_GET['category'])){
    if($_GET['category'] == 'floor'){
        $sql ="SELECT * FROM `light_led` WHERE categorize1='FLOOR'";
    }
    if($_GET['category'] == 'desk_table'){
        $sql ="SELECT * FROM `light_led` WHERE categorize1='DESK_TABLE'";
    }
    if($_GET['category'] == 'ceiling'){
        $sql ="SELECT * FROM `light_led` WHERE categorize1='WALL_PENDANT_CEILING'";
    }
}else{
    $sql ="SELECT * FROM `light_led` WHERE 1 ";
}

$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
mysqli_close($conn);
for( $i =0 ; $i < count($data); $i++){
    echo ' <a href="?slug='.$data[$i]["code_id"].'" id="animation_x" style="color:black;" class="col-lg-4 box" >
        <div class="content-main-imgb">
        <img class="content-main-img1" width="100%" src="'.$data[$i]["image1"].'" alt="">
        <img class="content-main-img2" width="100%" src="'.$data[$i]["image2"].'" alt="">
   
        </div>
        <div class="content-main-atb">
            <div class="content-main-name">'.$data[$i]["name"].' - '.$data[$i]["name2"].'</div>
            <div class="content-main-price">$'.$data[$i]["price"].'.00 USD</div>
            <div class="content-main-star">
                <span class="color-change">
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                    <i class="fa-solid fa-star "></i>
                </span>
                <span    class="content-main-view">'.$data[$i]["riview"].' reviews</span>
            </div>
        </div>
    </a>';
   
   
      }


?>