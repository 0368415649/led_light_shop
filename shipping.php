<?php
    if(isset($_POST['last_name']) && $_POST['last_name'] !=""){
       $last_name = $_POST['last_name'];
       $first_name = $_POST['first_name'];
       $email = $_POST['email'];
       $address = $_POST['address'];
       $phone = $_POST['phone'];
        $conn = new mysqli("localhost","root","","light_led_project");
        $sql="INSERT INTO `customer_pj`(`ct_emaill`, `ct_phone`, `ct_address`, `ct_firtsname`, `ct_lastname`)
        VALUES ('".$email."','".$phone."','".$address."','".$first_name."','".$last_name."')";

        // mysqli_query($conn,$sql);
        for($i =0 ; $i <$_POST['length'] ; $i++ ){
            $name = "name".$i;
            $img = "img".$i;
            $quantily = "quantily".$i;

            
            $sql="INSERT INTO `order_aptech`( `customer_email`,`name`, `img`, `quantily`) VALUES
         ('".$email."','".$_POST[$name]."','".$_POST[$img]."','".$_POST[$quantily]."')";
             mysqli_query($conn,$sql);
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
</head>
<style>
    .box{
        box-sizing: border-box;
    }
    .shipping_adr{
        padding: 70px 40px 0px 150px;
        border-right: 1px solid #d9d9d9;
        height: 100%;
    }
    .shipping_cart{
        padding: 70px 50px 0px 30px;

    }
    .shipping_adr_tlt{
        font-weight: 400;
        font-size: 30px;
    }
    .shipping_adr_tlt2{
        margin: 20px 0px;
    }
    .shipping_adr_ip{
        height: 45px;
        width: 100%;
        border-radius:5px;
        padding-left: 5px;
        font-size:14px;
        border-color: #d9d9d9;

    }
    .shipping_adr_ip_w{
        width: 40%;
    }
    .mgau{
        margin-right:auto;
    }
    .shipping_adr_ip_gr{
        display: flex;
    }
    .shipping_adr_btn{
        padding: 20px 15px;
        background-color: #197bbd;
        color:white;
        border: transparent;
        border-radius: 5px;
        margin-right:10px;
        width:200px;
    }
    .shipping_adr_btn:hover{
        background-color: #196bbd;
        cursor: pointer;
    }
    .shipping_adr_btn_cart{
        padding: 20px 15px;
        color: #197bbd;
        border: transparent;
        border-radius: 5px;
        text-decoration: none;
    }
    .shipping_adr_btn_cart:hover{
        background-color:rgb(230, 238, 238);
    }
    .shipping_cart_item{
        margin-bottom: 20px;
    }
    .shipping_cart_item img{
        border-radius:4px;
    }
    .shipping_cart_total{
       display: flex;
       justify-content: space-between;
       padding-top:30px;
       border-top: 1px solid #d9d9d9;
    }
    .flex_sp{
        display: flex;
        justify-content: space-between;
    }
</style>
<body>
    <div class="container">
        <form action="" method="POST" class="shipping_cart">
        <div class="row">

            <div class="col-lg-7 box shipping_adr">
                <div class="text-center shipping_adr_tlt">LUX LED Lighting</div>
                <div class="fs-5 shipping_adr_tlt2">Contact information</div>
                <div class="">
                    <input type="text" name="email" class="shipping_adr_ip" placeholder="Email">
                </div>
                <div class="fs-5 shipping_adr_tlt2">Shipping address</div>
                <div class="shipping_adr_ip_gr mt-2">
                    <input type="text" name="first_name" class="shipping_adr_ip shipping_adr_ip_w mgau"  placeholder="First name">
                    <input type="text" name="last_name" class="shipping_adr_ip shipping_adr_ip_w "  placeholder="Last name"   >
                </div>
                <div class="mt-3">
                    <input type="text" name="address" class="shipping_adr_ip"  placeholder="Address"  >
                </div>
                <div class="mt-3">
                    <input type="text" name="phone" class="shipping_adr_ip"  placeholder="Phone"  >
                </div>

                

                <div class="mt-4 d-flex">
                    <div  class="shipping_adr_btn">Continue to Shipping</div>
                    <a href="./" class="shipping_adr_btn_cart">Come back home</a>
                </div>
            </div>

            <div class="col-lg-5 box shipping_cart">
                <div class="shipping_data">

                </div>
              

              
               <div class="shipping_cart_total">
                   <div class="fs-5">Total</div>
                   <div class="fs-3 shipping_cart_price"></div>
               </div>
            </div>

        </div>
        </form>

    </div>
</body>
</html>
<script>
    function showCart(){
    const storage = localStorage.getItem('cart');
    if(storage){
        cart_data= JSON.parse(storage);
        const quantity = cart_data.reduce(function(start,item){
                return Number(start) + (Number(item.product.price)*Number(item.quantity));
        },0)
        s='';
        cart_data.map((item,ix)=>{
        s+=`
              <div class="row shipping_cart_item">
                   <div class="col-lg-2 box ">
                       <img src="${item.product.img}"  alt="" width="100%" height="100%">
                   </div>
                   <div class="col-lg-10 box">
                       <div class="">${item.product.band} - ${item.product.name}</div>
                       <div class="flex_sp">
                            <div class="">${item.quantity}</div>
                            <div class="">$${item.product.price}.00</div>
                      </div>
                       
                   </div>
               </div>
               <input  type="hidden" name="name${ix}" value="${item.product.name}" >
               <input type="hidden" name="img${ix}" value="${item.product.img}">
               <input type="hidden"name="quantily${ix}" value="${item.quantity}">

            `;
        })
        s+=`               <input type="hidden"name="length" value="${cart_data.length}">`;
        document.querySelector('.shipping_data').innerHTML += s;
        document.querySelector('.shipping_cart_price').innerHTML = "$"+quantity+".00 USD";
        // document.querySelector('.header_cart_big_quantity').innerHTML = cart_data.length;

        
    }
}
showCart();
var button = document.querySelector('.shipping_adr_btn');
button.onclick = function(){
    localStorage.removeItem('cart');
    document.querySelector('.shipping_cart').submit();
}
</script>