<?php

include("./sql_connect.php");

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
    echo ' <a href="?slug='.$data[$i]["code_id"].'" id="animation_x" style="color:black;" class="col-xl-4 col-lg-6 col-md-6 box" >
        <div class="content-main-imgb">
        <img class="content-main-img1" width="100%" src="'.$data[$i]["image1"].'" alt="">
        <img class="content-main-img2" width="100%" src="'.$data[$i]["image2"].'" alt="">
   
        </div>
        <div class="content-main-atb">
            <div class="content-main-name">'.$data[$i]["name"].' - '.$data[$i]["name2"].'</div>
            <div class="content-main-price">$'.$data[$i]["price"].'.00 USD</div>
            <div class="content-main-star">
          
            </div>
        </div>
    </a>
    
    <script>
    document.querySelector("#main_title").innerHTML = "HOME";
    </script>
    ';
   
   
      }

//       <span class="color-chang ew"><span class="content-main-view_sss"> </span> reviews</span>
?>