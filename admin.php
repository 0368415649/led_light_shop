<?php
$conn = new mysqli("localhost","root","","light_led_project");
$CRUD_title ="Insert Light Led";
$CRUD_button ="Submit";
$name_up ="";
$code_up = $name_up=$name2_up=$image1_up=$image2_up=$riview_up=$description_up=$price_up=$categorize1_up=$atb1_up=$atb2_up=$atb3_up=$atb4_up="";
//  DELETE METHOUD
if(isset($_GET["delete"])){
    $sql ="DELETE FROM `light_led` WHERE code_id = '".$_GET["delete"]."'";
    if( $conn->query($sql) === true){
        echo'  <script>';
        echo' alert(" Deleted Successfully ");';
        echo'</script>';
        }else{
            echo "ERROR: ".  $conn->error; ;
        }
 }
 //  INSERT  METHOUD

 if( isset($_POST['code_id']) && isset($_POST['name']) ){
    $code = $_POST['code_id'];
    $name = $_POST['name'];
    $name2 = $_POST['name2'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $riview = $_POST['riview'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $categorize1 = $_POST['categorize1'];
    $atb1 = $_POST['atb1'];
    $atb2 = $_POST['atb2'];
    $atb3 = $_POST['atb3'];
    $atb4 = $_POST['atb4'];
    $sql ="INSERT INTO `light_led`(`code_id`, `name`, `name2`, `image1`, `image2`, `riview`, `description`, `price`, `categorize1`, `atb1`, `atb2`, `atb3`, `atb4`)
    VALUES ('".$code."','".$name."','".$name2."','".$image1."','".$image2."','".$riview."',
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
    $code_up = $_POST['code_id_up'];
    $name_up = $_POST['name_up'];
    $name2_up = $_POST['name2_up'];
    $image1_up = $_POST['image1_up'];
    $image2_up = $_POST['image2_up'];
    $riview_up = $_POST['riview_up'];
    $description_up = $_POST['description_up'];
    $price_up = $_POST['price_up'];
    $categorize1_up = $_POST['categorize1_up'];
    $atb1_up = $_POST['atb1_up'];
    $atb2_up = $_POST['atb2_up'];
    $atb3_up = $_POST['atb3_up'];
    $atb4_up = $_POST['atb4_up'];

    $sql="UPDATE `light_led` SET `code_id`='".$code_up."'
    ,`name`='".$name_up."',`name2`='".$name2_up."',`image1`='".$image1_up."',`image2`='".$image2_up."'
    ,`riview`='".$riview_up."',`description`='".$description_up."',`price`='".$price_up."'
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
        $code_up = $data['code_id'];
        $name_up = $data['name'];
        $name2_up = $data['name2'];
        $image1_up = $data['image1'];
        $image2_up = $data['image2'];
        $riview_up = $data['riview'];
        $description_up = $data['description'];
        $price_up = $data['price'];
        $categorize1_up = $data['categorize1'];
        $atb1_up = $data['atb1'];
        $atb2_up = $data['atb2'];
        $atb3_up = $data['atb3'];
        $atb4_up = $data['atb4'];   
        $CRUD_title ="Update Light Led";
        $CRUD_button="Save Product";
        $name_update ="_up";
        echo'  <script>';
        echo' alert("Data has been moved to the left page. Please edit and save ");';
        echo'</script>';
     }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
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
             font-size:35px;
             /* padding: 20px 0px ; */
             font-weight:500;
             color:#cacaca;
             padding: 30px 0px;
           
        }
        .admin_s{
             text-align:center;
             font-size:35px;
             /* padding: 20px 0px ; */
             font-weight:500;
             padding: 30px 0px;
             background-color:#cacaca;
           
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
            font-size:10px;
        }
        
    </style>
</head>
<body>
    <div class="app">
        <div class="header  text-center fs-3">
            <div class="">-- Welcome Admin -- </div>
        </div>
        <div class="row">
            <div class="col-lg-6 box color_main">
                <div class="admin_is bg-dark"><?= @ $CRUD_title ?></div>

                <form class="main_form row" method="post" action="">

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">code_id</label>
                        <input type="text" value="<?= @$code_up?>" class="form-control" name="code_id<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">name</label>
                        <input type="text" value="<?= @$name_up?>" class="form-control" name="name<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">name2</label>
                        <input type="text" value="<?= @$name2_up?>" class="form-control" name="name2<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">image1</label>
                        <input type="text" value="<?= @$image1_up?>" class="form-control" name="image1<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">image2_up</label>
                        <input type="text" value="<?= @$image2_up?>" class="form-control" name="image2<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">riview</label>
                        <input type="text" value="<?= @$riview_up?>" class="form-control" name="riview<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">description</label>
                        <input type="text" value="<?= @$description_up?>" class="form-control" name="description<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">price</label>
                        <input type="text" value="<?= @$price_up?>" class="form-control" name="price<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">categorize1</label>
                        <input type="text" value="<?= @$categorize1_up?>" class="form-control" name="categorize1<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">atb1</label>
                        <input type="text" value="<?= @$atb1_up?>" class="form-control" name="atb1<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">atb2</label>
                        <input type="text" value="<?= @$atb2_up?>" class="form-control" name="atb2<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">atb3</label>
                        <input type="text" value="<?= @$atb3_up?>" class="form-control" name="atb3<?= @$name_update?>" id="">
                    </div>

                    <div class="mb-4 main_flex col-lg-6 box">
                        <label for="" class="form-label">atb4</label>
                        <input type="text" value="<?= @$atb4_up?>" class="form-control" name="atb4<?= @$name_update?>" id="">
                    </div>

                    <div class="main_flex">
                        <button type="submit" class="col-lg-6 btn_submit"><?= @ $CRUD_button ?></button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 box content">
                 <div class="admin_s">Light Led Data</div>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                                <th scope="col">#</th>
                                <th scope="col">Id</th>
                                <th scope="col">Code_id</th>
                                <th scope="col">Brands</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Categorize</th>

                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                            include('./admin_data/sql_data.php');
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=" ">
       
        </div>
    </div>
</body>
</html>