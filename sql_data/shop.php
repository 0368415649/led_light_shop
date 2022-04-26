<?php

$conn = new mysqli("localhost","root","","light_led_project");
$sql ="SELECT * FROM `light_led` where 1";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
mysqli_close($conn);
//  $h= preg_replace($pattern,'',$h);

for( $i =0 ; $i < count($data); $i++){
 echo '
    
 <a href="?slug='.$data[$i]["code_id"].'" class="col-lg-3 header-shop-cursor" >
     <div class="header-shop-item">
         <img src="'.$data[$i]["image1"].'" alt="" width="80px" height="80px">
         <div class="header-shop-item-f">'.$data[$i]["name"].' '.$data[$i]["name2"].'</div>
     </div>
 </a>
';
}

?>



