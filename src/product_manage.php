<?php
include("../sql_connect.php");
$CRUD_title ="Insert Light Led";
$CRUD_button ="Submit";
$name_up ="";
$code_up = $name_up=$name2_up=$image1_up=$image2_up=$riview_up=$description_up=$price_up=$categorize1_up=$atb1_up=$atb2_up=$atb3_up=$atb4_up="";
//  DELETE METHOUD
if(isset($_GET["Delivered"])){
    $sql ="UPDATE `order_aptech` SET `complete`='ok' where `id` = '".$_GET["Delivered"]."'  ";
    if( $conn->query($sql) === true){
        echo'  <script>';
        echo' alert(" Deleted Successfully ");';
        echo'</script>';
        }else{
            echo "ERROR: ".  $conn->error; ;
        }
 }


//  DELETE METHOUD
if(isset($_GET["delete"])){
    $sql ="DELETE FROM `light_led` WHERE code_id = '".$_GET["delete"]."'";
    if( $conn->query($sql) === true){
        echo'  <script>';
        echo' alert(" Delivered Successfully ");';
        echo'</script>';
        }else{
            echo "ERROR: ".  $conn->error; ;
        }
 }
 //  INSERT  METHOUD

 if( isset($_POST['code_id']) && isset($_POST['name']) ){
    $code = $_POST['code_id'];$name = $_POST['name'];$name2 = $_POST['name2'];$image1 = $_POST['image1'];$image2 = $_POST['image2'];$description = $_POST['description'];$price = $_POST['price'];$categorize1 = $_POST['categorize1'];$atb1 = $_POST['atb1'];$atb2 = $_POST['atb2'];$atb3 = $_POST['atb3'];$atb4 = $_POST['atb4'];
    $sql ="INSERT INTO `light_led`(`code_id`, `name`, `name2`, `image1`, `image2`,  `description`, `price`, `categorize1`, `atb1`, `atb2`, `atb3`, `atb4`)
    VALUES ('".$code."','".$name."','".$name2."','".$image1."','".$image2."',
    '".$description."','".$price."','".$categorize1."','".$atb1."','".$atb2."','".$atb3."','".$atb4."')";
 if( $conn->query($sql) === true){
    echo'  <script>';
    echo' alert(" Inserted Successfully ");';
    echo'</script>';
    }else{
        echo "ERROR: ".  $conn->error; ;
    }
}

//  UPDATE METHOUD

if( isset($_POST['code_id_up']) ){
    $code_up = $_POST['code_id_up'];$name_up = $_POST['name_up'];$name2_up = $_POST['name2_up'];$image1_up = $_POST['image1_up'];$image2_up = $_POST['image2_up'];$description_up = $_POST['description_up'];$price_up = $_POST['price_up'];$categorize1_up = $_POST['categorize1_up'];$atb1_up = $_POST['atb1_up'];$atb2_up = $_POST['atb2_up'];$atb3_up = $_POST['atb3_up'];$atb4_up = $_POST['atb4_up'];
    $sql="UPDATE `light_led` SET `code_id`='".$code_up."'
    ,`name`='".$name_up."',`name2`='".$name2_up."',`image1`='".$image1_up."',`image2`='".$image2_up."'
    ,`description`='".$description_up."',`price`='".$price_up."'
    ,`categorize1`='".$categorize1_up."',`atb1`='".$atb1_up."',`atb2`='".$atb2_up."'
    ,`atb3`='".$atb3_up."',`atb4`='".$atb4_up."' WHERE `code_id` = '".$_GET["update"]."'";
    if( $conn->query($sql) === true){
        echo'  <script>';
        echo' alert(" Updated Successfully ");';
        echo'</script>';
        }else{
            echo "ERROR: ".  $conn->error; ;
         } 
    $code_up = $name_up=$name2_up=$image1_up=$image2_up=$riview_up=$description_up=$price_up=$categorize1_up=$atb1_up=$atb2_up=$atb3_up=$atb4_up="";
}else{
    if(isset($_GET["update"])){
        $sql ="SELECT * FROM `light_led` WHERE code_id = '".$_GET["update"]."'";
        $result = mysqli_query($conn,$sql);
        $data =mysqli_fetch_assoc($result);
        $code_up = $data['code_id'];$name_up = $data['name'];$name2_up = $data['name2'];$image1_up = $data['image1'];$image2_up = $data['image2'];$description_up = $data['description'];$price_up = $data['price'];$categorize1_up = $data['categorize1'];$atb1_up = $data['atb1'];$atb2_up = $data['atb2'];$atb3_up = $data['atb3'];$atb4_up = $data['atb4'];   $CRUD_title ="Update Light Led";$CRUD_button="Save Product";$name_update ="_up";
        echo'
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                setTimeout(function(){
                    document.querySelector("#check_boxx").checked = "true";
                },100)
                
            });
        </script>
        ';
        
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
    <title>Document</title>
    <style>
        .pd_mg{
            font-size:20px;
            font-size:25px;
            padding: 0px 0px 30px 0px;
            color: white;
            display: block;
            text-decoration: none;
        }
        .pd_mg:hover{
            color: #e58743;
            cursor: pointer;
        }
        .header{
            background:#607d8b;
            /* background:#7d7a7d; */

            font-weight:500;
            color: dark;
            padding: 10px 0px;
        }
        .content{
            padding: 0;
        }
        td{
            font-size:13px;
        }
        .box{
            box-sizing: border-box;
        }
        .color_main{
            background:#cacaca;
            padding: 0;
        }
        .main_flex{
            display: flex;
            justify-content: center;
            position: relative;

        }
        .main_flex span{
            position: absolute;
            top:40px    ;
            color: red;
        }
        .main_form{
            padding: 30px ;
        }
        .main_form label{
            width: 170px;
            display: flex;
        }
        .admin_is{
             text-align:center;
             font-size:45px;
             color:white;
             font-weight:500;
             color:#cacaca;
             padding: 30px 0px;
           
        }
        .admin_s{
  
           
        }
        .btn_submit{
            background-color: #e35820;
            padding: 10px 0px;
            border-radius:4px;
            border: transparent;
            font-size:20px;
            color: white;
            margin-top:20px;

        }
        .btn_submit:hover{
            background-color: #e34820;
        }
        .btn_font{
            font-size:14px;
        }
        .create_fix{
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 50%;
            transform: translateX(-100%);
            transition: transform linear 0.5s; 
            border-right: 1px solid white;

        }
        .shipping_fixed{
            position: fixed;
            padding: 0;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 50%;
            transform: translateX(200%);
            transition: transform linear 0.5s; 
            background:#cacaca;
            border-left: 1px solid white;

        }
        .create_fix_flex{
            display: flex;
            justify-content: center;
            font-size:45px;
            color: white;
            font-weight:500;
            padding: 30px 0px;
            background-color:#cacaca;
        }

        .fixedd{
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color:rgba(red, green, blue, alpha);
            display:none;
        }
        .fixedd2{
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color:rgba(red, green, blue, alpha);
            display:none;
        }
        #check_boxx:checked ~ .fixedd{
            display: block;

        }
        #check_boxx:checked ~ .create_fix{
            transform: translateX(0);

        }
        #check_boxx2:checked ~ .fixedd2{
            display: block;

        }
        #check_boxx2:checked ~ .create_fix2{
            transform: translateX(100%);

        }

        .c_ip{
            width: 350px;
            color: #529fb9;
            position: absolute;
            text-align: center;
            cursor: pointer;
            top: 40px;
            font-size: 30px;
        }
        .c_ip2{
            width: 350px;
            color:#529fb9;
            position: absolute;
            text-align: center;
            cursor: pointer;
            top: 40px;
            right: -40px;
            font-size: 30px;
        }
        .c_ip span{
            color: #a5d2ff;
            font-weight:500;
            font-size: 35px;
            margin-right:20px;
        }

        .c_ip2 span{
            color: #a5d2ff;
            font-weight:500;
            font-size: 35px;
            margin-left:20px;
        }
        @keyframes lightly{
            to{
                opacity: 1;
            }
            from{
                opacity: 0;
            }
        }
        .app{
            animation: lightly ease-out 1s;
        }
    </style>
</head>
<body>
    <div class="app">
        <!-- <div class="header  text-center fs-3">
            <div class="">-- Welcome Admin -- </div>
        </div> -->
        <div class="row">

            <label for="check_boxx"class="c_ip"><span>Create Product</span><i style="cursor:pointer;" class="fa-solid fa-angles-right"></i></label>
            <input type="checkbox" name="" id="check_boxx" style="display:none ;">
            <label for="check_boxx" class="fixedd"></label>

            <div class="container">
                <div class="col-lg-12 box content">
                        <div class="create_fix_flex admin_s bg-dark">
                            <div class="" style="margin: 0px auto;">Light Led Data</div>
                        </div>
                        <div class="bg-dark text-center">
                            <a href="./order_manage.php" class="pd_mg"> Come To Product Management</a>
                         </div>

                    <table style="background:#cacaca;"class="table  table-hover">
                        <thead>
                            <tr>
                                    <th class="col-lg-1" scope="col">Controller</th>
                                    <th class="col-lg-1" scope="col">Id</th>
                                    <th class="col-lg-1" scope="col">Code_id</th>
                                    <th class="col-lg-1" scope="col">Brands</th>
                                    <th class="col-lg-1" scope="col">Name</th>
                                    <th class="col-lg-1" scope="col">Image</th>
                                    <th class="col-lg-1" scope="col">Price</th>
                                    <th class="col-lg-1" scope="col">Categorize</th>

                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                                include('./sql_data.php');
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="create_fix box color_main">
                        
                        <div class="admin_is bg-dark"><?= @ $CRUD_title ?></div>
                        <label for="check_boxx"class="c_ip"><i style="cursor:pointer;" class="fa-solid fa-angles-left"></i></label>    

                <form class="main_form row" id="form_admin" method="post" action="">

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Code_id</label>
                        <input type="text" rules="" value="<?= @$code_up?>" class="form-control" name="code_id<?= @$name_update?>" id="">
                        <span class="message"></span>   
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Brand</label>
                        <input type="text" rules="" value="<?= @$name_up?>" class="form-control" name="name<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Name</label>
                        <input type="text" rules="" value="<?= @$name2_up?>" class="form-control" name="name2<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Image1</label>
                        <input type="text" rules="" value="<?= @$image1_up?>" class="form-control" name="image1<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Image2_up</label>
                        <input type="text" rules="" value="<?= @$image2_up?>" class="form-control" name="image2<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Description</label>
                        <input type="text" rules="" value="<?= @$description_up?>" class="form-control" name="description<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Price</label>
                        <input type="text" rules="" value="<?= @$price_up?>" class="form-control" name="price<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Categorize</label>
                        <input type="text" rules="" value="<?= @$categorize1_up?>" class="form-control" name="categorize1<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Attribute_1</label>
                        <input type="text" rules="" value="<?= @$atb1_up?>" class="form-control" name="atb1<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Attribute_2</label>
                        <input type="text" rules="" value="<?= @$atb2_up?>" class="form-control" name="atb2<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Attribute_3</label>
                        <input type="text" rules="" value="<?= @$atb3_up?>" class="form-control" name="atb3<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Attribute_4</label>
                        <input type="text" rules="" value="<?= @$atb4_up?>" class="form-control" name="atb4<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div class="main_flex">
                        <button type="submit" class="col-lg-6 btn_submit"><?= @ $CRUD_button ?></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>
<script src="./src/validate.js"></script>
<script>
    validate('#form_admin');
</script>
<!-- transform: translateX(0); -->