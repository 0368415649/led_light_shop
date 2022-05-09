<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
<style>
        .create_fix_flex{
            display: flex;
            justify-content: center;
            font-size:45px;
            color: white;
            font-weight:500;
            padding: 30px 0px;
            background-color:#cacaca;
        }
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
    <div class="shipping_fixed create_fix2" style="display:block" >
                <div class="create_fix_flex  bg-dark">
                            <div class="" style="margin: 0px auto;">Ordering information</div>
                </div>
                <div class="bg-dark text-center">
                            <a href="./product_manage.php" class="pd_mg"> Come To Product Management</a>
                </div>
                    <table class="table table-secondary table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Controller</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Image</th>
                                <th scope="col">Quantily</th>
                                <th scope="col">Time buy</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                include('./order.php');
                            ?>
                        </tbody>
                        </table>
    </div>
</div> 
<!-- <script>
     alert("wellcome admin");
</script> -->
</body>
</html>
