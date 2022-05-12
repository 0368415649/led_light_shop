<?php

include("./sql_connect.php");
$sql ="SELECT * FROM `light_led` WHERE `name2` LIKE '".$_GET['search']."%'";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
$count = count($data);
mysqli_close($conn);
echo ' 
<div class="content " id="content">
    <div class="mt-5 search_item_tlt">There are '.$count.' products with keyword "'.$_GET['search'].'"</div>
    <div class="grap content-main"  >  
                    <div class="row" id="root" >';
for( $i =0 ; $i < count($data); $i++){
            echo'
            <a href="?slug='.$data[$i]["code_id"].'" id="animation_x" style="color:black;" class="col-lg-4 box" >
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
            </a>';
}
echo '
    </div>
</div> 
    
    <script>
    document.querySelector("#main_title").innerHTML = "HOME";
    </script>
    ';


?>
