<?php
include("../sql_connect.php");
if( isset($_POST['new_name']) ){
    $sql="UPDATE `admin` SET `name`='".$_POST['new_name']."' WHERE 1";
    if( $conn->query($sql) === true){
        echo'  <script>';
         echo' alert(" Updated Successfully ");';
        echo'</script>';
        }else{
            echo "ERROR: ".  $conn->error; ;
         } 
        }

  
?>                  
                <div class="admin_is bg-dark">Change User Name</div>

                <form style="    padding: 40px 400px;" class="main_form row" id="user_name" method="post" action="">

                    
                    <div style="margin-bottom:30px;" class=" main_flex  box">
                        <label for="" class="form-label">New User Name</label>
                        <input rules="min:5" type="text" name="new_name" class="form-control" >
                        <span class="message"></span>   
                
                    </div>


                    <div class="main_flex">
                        <button type="submit" class="col-lg-6 btn_submit">Change</button>
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
    validate('#user_name'); 
    document.querySelector('#title').innerHTML = "CHANGE USER NAME";

</script>
