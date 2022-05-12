<?php

include("../sql_connect.php");
$sql ="SELECT * FROM `order_aptech` WHERE `complete` != 'ok' ";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
mysqli_close($conn);
for( $i =0 ; $i < count($data); $i++){
    echo ' 
    <tr>
        <td scope="col">
        <a href="?Delivered='.$data[$i]['id'].'" class="btn btn-primary btn_font" role="button" data-bs-toggle="button">Delivered</a>
        </td>
        <td scope="col">'.$data[$i]['customer_email'].'</td>
        <td scope="col">'.$data[$i]['name'].'</td>
        <td scope="col"><img src="'.$data[$i]['img'].'" alt="" width="50px" ></td>
        <td scope="col">'.$data[$i]['quantily'].'</td>
        <td scope="col">'.$data[$i]['Uptime'].'</td>
    </tr>
';
   
   
      }


?>