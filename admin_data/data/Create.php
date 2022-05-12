<?php
include("../sql_connect.php");
 //  INSERT  METHOUD
 if( isset($_POST['code_id']) && isset($_POST['name']) ){
    $code = $_POST['code_id'];$name = $_POST['name'];$name2 = $_POST['name2'];$image1 = $_POST['image1'];$image2 = $_POST['image2'];$description = $_POST['description'];$price = $_POST['price'];$categorize1 = $_POST['categorize1'];$atb1 = $_POST['atb1'];$atb2 = $_POST['atb2'];$atb3 = $_POST['atb3'];$atb4 = $_POST['atb4'];
    $sql ="INSERT INTO `light_led`(`code_id`, `brand`, `name`, `image1`, `image2`,  `description`, `price`, `categorize`, `atb1`, `atb2`, `atb3`, `atb4`)
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

$CRUD_title ="Insert Light Led";
$CRUD_BUTTON ="Enter";
$name_up ="";
$code_up = $name_up=$name2_up=$image1_up=$image2_up=$riview_up=$description_up=$price_up=$categorize1_up=$atb1_up=$atb2_up=$atb3_up=$atb4_up="";

//  UPDATE METHOUD

if( isset($_POST['code_id_up']) ){
    $code_up = $_POST['code_id_up'];$name_up = $_POST['name_up'];$name2_up = $_POST['name2_up'];$image1_up = $_POST['image1_up'];$image2_up = $_POST['image2_up'];$description_up = $_POST['description_up'];$price_up = $_POST['price_up'];$categorize1_up = $_POST['categorize1_up'];$atb1_up = $_POST['atb1_up'];$atb2_up = $_POST['atb2_up'];$atb3_up = $_POST['atb3_up'];$atb4_up = $_POST['atb4_up'];
    $sql="UPDATE `light_led` SET `code_id`='".$code_up."'
    ,`brand`='".$name_up."',`name`='".$name2_up."',`image1`='".$image1_up."',`image2`='".$image2_up."'
    ,`description`='".$description_up."',`price`='".$price_up."'
    ,`categorize`='".$categorize1_up."',`atb1`='".$atb1_up."',`atb2`='".$atb2_up."'
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
        $code_up = $data['code_id'];$name_up = $data['brand'];$name2_up = $data['name'];$image1_up = $data['image1'];$image2_up = $data['image2'];$description_up = $data['description'];$price_up = $data['price'];$categorize1_up = $data['categorize'];$atb1_up = $data['atb1'];$atb2_up = $data['atb2'];$atb3_up = $data['atb3'];$atb4_up = $data['atb4'];   $CRUD_title ="Update Light Led";$CRUD_button="Save Product";$name_update ="_up";
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
                <div class="admin_is bg-dark"><?= @$CRUD_title?></div>

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
                        
                        <label for="" class="form-label"><input style="    width: 85px;" type="file" class="file" ></label>
                        <input type="text" rules="" id="show_link"   value="<?= @$image1_up?>" class="form-control" name="image1<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label"><input style="    width: 85px;" type="file" class="file" ></label>
                        <input type="text" id="show_link"  rules="" value="<?= @$image2_up?>" class="form-control" name="image2<?= @$name_update?>" id="">
                        <span class="message"></span>   
                 
                    </div>

                    <div style="margin-bottom:30px;" class=" main_flex col-lg-6 box">
                        <label for="" class="form-label">Description</label>
                        <input type="text" rules=""  value="<?= @$description_up?>" class="form-control" name="description<?= @$name_update?>" id="">
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
                        <button type="submit" class="col-lg-6 btn_submit"><?= @$CRUD_BUTTON?></button>
                    </div>
                </form>

<script>    
    var show = document.querySelectorAll('#show_link');
    var img = document.querySelectorAll('.file');
    img.forEach(function(e,ix){
        console.log(e);
        e.onchange = function(e) {
        var tmppath = URL.createObjectURL(e.target.files[0]);
        show[ix].value = tmppath;
    }
    })
</script>
<script src="../src/validate.js"></script>
<script>
    validate('#form_admin'); 
</script>
<script>
    document.querySelector('#title').innerHTML = "CREATE PRODUCT";
</script>
