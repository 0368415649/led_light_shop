<?php
include("../sql_connect.php");

//  Delivered METHOUD
if(isset($_GET["Delivered"])){
    $sql ="UPDATE `order_aptech` SET `complete`='ok' where `order_id` = '".$_GET["Delivered"]."'  ";
    echo $sql;
    if( $conn->query($sql) === true){
        echo'  <script>';
        echo' alert(" Delivered Successfully");';
        echo'</script>';
        header("location: ?routes=order_manage");

        }else{
            echo "ERROR: ".  $conn->error; ;
        }
    
 }

 //  DELETE METHOUD
if(isset($_GET["delete"])){

    echo'</script>';
    $sql ="DELETE FROM `light_led` WHERE code_id = '".$_GET["delete"]."'";
    if( $conn->query($sql) === true){
        echo'  <script>';
        echo' alert(" Delete Successfully ");';
        echo'</script>';
        // header("location: admin.php?routes=product_  manage");

        }else{
            echo'  <script>';
            echo' alert("ERROR: Do not delete the product that has been tied");';
            echo'</script>';
        }
 }
  //  DELETE COMMENT METHOUD
if(isset($_GET["delete_cm"])){

    echo'</script>';
    $sql ="DELETE FROM `comment_p` WHERE id = '".$_GET["delete_cm"]."'";
    if( $conn->query($sql) === true){
        echo'  <script>';
        echo' alert(" Delete Successfully ");';
        echo'</script>';
        }else{
            echo "ERROR: ".  $conn->error; ;
        }
 }
 // font-w
 $t1=$t2=$t3=$t4=$t5=$t6='';
 if(isset($_GET['routes'])){
 if($_GET['routes'] === 'order_manage'){
    $t1 ='event';
}
if($_GET['routes'] == 'create'){
    $t5 ='event';
}
if( $_GET['routes'] == 'product_manage'){
    $t4 ='event';
}
if( $_GET['routes'] == 'comment'){
    $t2 ='event';
}
if( $_GET['routes'] == 'user'){
    $t3 ='event';
}
if( $_GET['routes'] == 'username'){
    $t6 ='event';
}
if( $_GET['routes'] == 'password'){
    $t6 ='event';
}
}

 ?>  
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/b369642a0f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title id="title">Document</title>

</head>
<body> 
<div class="app">
        <div class="narbar col-lg-2" >
                <div class="text-center"><i class="fa-solid fa-house"></i> Dashboard Admin</div>
                      
                <ul class="">
                    <li class=""><a class="header_mobile_item_big <?=@ $t1?>" href="?routes=order_manage"><i class="fa-brands fa-first-order"></i>  ORDER MANAGEMENT</a></li>
                    <li class=""><a class="header_mobile_item_big <?=@ $t2?>" href="?routes=comment"><i class="fa-solid fa-comments"></i>  COMMENT MANAGEMENT</a></li>
                    <li class=""><a class="header_mobile_item_big <?=@ $t3?>" href="?routes=user"><i class="fa-solid fa-users"></i>  USER INFORMATION</a></li>
                    <li class="" ><a class="header_mobile_item_big <?=@ $t4?>" href="?routes=product_manage"><i class="fa-solid fa-sitemap"></i>  PRODUCT MANAGEMENT</a></li>
                    <li class=""><a class="header_mobile_item_big <?=@ $t5?>" href="?routes=create"><i class="fa-solid fa-file-circle-plus"></i>  CREATE PRODUCT</a></li>
                    <li class="xxx" ><div class="header_mobile_item_big <?=@ $t6?> xyx"><i class="fa-solid fa-user"></i>  CHANGE ACOUNTS</div>
                                        <ul class="text-end yyy" >
                                            <li class=""><a class="header_mobile_item" href="?routes=username">CHANGE USER NAME</a></li>
                                            <li class=""><a class="header_mobile_item" href="?routes=password">CHANGE PASS WORD</a></li>
                                        </ul>                                    
                    </li>

                </ul>
        </div>
        <div class="row">

            <div class="col-lg-2 box ">

            </div>

            <div class="col-lg-10 box">
                <?php
                if(isset($_GET["update"])){
                    include('./data/Create.php');
                }
                if(isset($_GET['routes'])){
                    if(isset($_GET['routes'])){
                            if($_GET['routes'] == 'order_manage'){
                                include('./data/order_manage.php');
                                $st1='event';
                            }
                            if($_GET['routes'] == 'create'){
                                include('./data/Create.php');
                            }
                            if( $_GET['routes'] == 'product_manage'){
                                include('./data/product_manage.php');
                            }
                            if( $_GET['routes'] == 'comment'){
                                include('./data/user_comment.php');
                            }
                            if( $_GET['routes'] == 'user'){
                                include('./data/user.php');
                            }
                            if( $_GET['routes'] == 'username'){
                                include('./data/change_username.php');
                            }
                            if( $_GET['routes'] == 'password'){
                                include('./data/change_password.php');
                            }
                    }
                }
                if( isset($_GET["delete"])){
                    include('./data/product_manage.php');
                }
                if( isset($_GET["delete_cm"])){
                    include('./data/user_comment.php');
                }
                
                ?>
            </div>
            

    </div>
    
</div> 
<!-- <script>
     alert("wellcome admin");
</script> -->
</body>
</html>
