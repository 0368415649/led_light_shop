<?php
    if( isset($_POST['name']) && isset($_POST['pass'])  &&  $_POST['name'] =='aptech'   && $_POST['pass'] =='c2108g2'    ) 

    {   
            header("location: ../admin.php");
    }

    else{
        echo'
             <script>
                alert("You are not admin");
            </script>
        ';
    }
    if(!empty($_GET)){
        $name = $_GET['name'];
        $pass = $_GET['pass'];

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/b369642a0f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="" id="form_selector" method="post">
    <div class="grap">
    <div class="title">---Admin---</div>
    <div class="grap_input">

    <div class="grap_email">   
         <input class='input_email' rules=""  id='name' name='name' style='padding-left:10px' type="text" placeholder=' Name'> 
         <span class="message"></span>   
    </div>
 
    <div class="grap_email">    
        <input class='input_pass' rules=""  id='pass' name='pass' style='padding-left:10px'  type="password" placeholder=' Password'>    
        <span class="message"></span>   
    </div>

    <div class="grap_button">
        <button class='button_model'>
        Log in
        </button>
    </div>
    </div>
    </div>
    </form>
</body>
<script src='validate.js'></script>
<script>

validate('#form_selector')
</script>
</html>
