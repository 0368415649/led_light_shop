<?php

$conn = new mysqli("localhost","root","","light_led_project");
$sql ="SELECT * FROM `light_led` WHERE 1 ";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
mysqli_close($conn);
for( $i =0 ; $i < count($data); $i++){
    echo ' 
    <tr>
        <td scope="col">
        <a href="?delete='.$data[$i]['code_id'].'" class="btn btn-primary btn_font" role="button" data-bs-toggle="button">Delete</a>
        <a href="?update='.$data[$i]['code_id'].'" class="btn btn-primary btn_font" role="button" data-bs-toggle="button">Edit</a>
        </td>
        <td scope="col">'.$data[$i]['id'].'</td>
        <td scope="col">'.$data[$i]['code_id'].'</td>
        <td scope="col">'.$data[$i]['name'].'</td>
        <td scope="col">'.$data[$i]['name2'].'</td>
        <td scope="col"><img src="'.$data[$i]['image1'].'" alt="" width="50px" ></td>
        <td scope="col">'.$data[$i]['price'].'</td>
        <td scope="col">'.$data[$i]['categorize1'].'</td>
    </tr>
';
   
   
      }


?>