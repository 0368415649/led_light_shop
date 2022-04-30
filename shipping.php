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
        header('location:/led_light_project2');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title id='main_title'>Document</title>
</head>
<style>
    .box{
        box-sizing: border-box;
    }
    .shipping_adr{
        padding: 0px 40px 0px 50px;
        border-right: 1px solid #d9d9d9;
        height: 100%;
    }
    .shipping_cart{
        padding: 0px 50px 0px 30px;
        /* margin-top: 70px;     */
    }
    .shipping_adr_tlt{
        font-weight: 400;
        font-size: 30px;
        margin-top: 70px;

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
        margin: 8px 0px;

    }

    .mgau{
        margin-right:auto;
    }
    .shipping_adr_ip_gr{
        display: flex;
        justify-content: space-between;
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
       align-items: center;
    }
    .flex_sp{
        display: flex;
        justify-content: space-between;
    }
    .shipping_data{
        margin-top: 70px;
    }
    .shipping_cart_price{
            color:#d90606;
    }
    a{
        text-decoration: none;
    }
    @keyframes lightly{
    to{
        opacity: 1;
    }
    from{
        opacity: 0;
    }
    }
    .container{
        animation: lightly ease-out 3s;
    }
</style>
<body>
    <div class="container">
        <form action="" method="POST" class="shipping_cart">
                <div class="row">

                    <div class="col-lg-7 box shipping_adr">
                        <div class="text-center shipping_adr_tlt">LUX LED Lighting <a style="color: #e35820;" href="?slug=view_cart">View_cart</a> </div>
                        <div class="fs-5 shipping_adr_tlt2">Contact information</div>
                        <div class="">
                            <input type="text"  rules='email' name="email" class="shipping_adr_ip" placeholder="Email">
                            <span class="message"></span>   
                        </div>
                        <div class="fs-5 shipping_adr_tlt2">Shipping address</div>

                        <div class="shipping_adr_ip_gr mt-2">

                            <div class="" style="padding: 0px 50px 0px 0px; flex: 1;">
                                <input type="text"  rules='min:5' name="first_name" class="shipping_adr_ip shipping_adr_ip_w mgau"  placeholder="First name">
                                <span class="message"></span>   
                            </div>

                            <div class="" style="padding: 0px 0px 0px 2px; flex: 1;">
                                <input type="text"  rules='min:5' name="last_name" class="shipping_adr_ip shipping_adr_ip_w "  placeholder="Last name"   >
                                <span class="message"></span>   
                            </div>

                        </div>

                        <div class="mt-3">
                            <input type="text"  rules='min:5' name="address" class="shipping_adr_ip"  placeholder="Address"  >
                            <span class="message"></span>   
                        </div>
                        <div class="mt-3">
                            <input type="text"  rules='phone' name="phone" class="shipping_adr_ip"  placeholder="Phone"  >
                            <span class="message"></span>   
                        </div>

                        

                        <div class="mt-4 d-flex">
                            <div  class="shipping_adr_btn">Continue to Shipping</div>
                            <a href="./" class="shipping_adr_btn_cart">Come back home</a>
                        </div>
                        <div style="height:200px"></div>
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
    document.querySelector("#main_title").innerHTML = "SHIPPING";

    function validate(data){
    function requireds(rules,value){
        if(rules === ''){
            return '';
        }
        if(rules === 'email'){
            if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)){
                return '';
            }else{
                return 'This is not email';  
            }
        }
        if(rules === 'phone'){
            if(/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/.test(value)){
                return '';
            }else{
                return 'This is not number phone';  
            }
        }
        if(rules.split(":")){
            var min = rules.split(":");
            if(value.length < min[1]){
                    return 'Enter at least '+min[1]+' characters';
                }else{
                    return '' ;
                }
        }
    }

    var validates = {
        required: function(value,rules){
            return value ? requireds(rules,value) :"Please enter this field";
        }
    }

    var forms = document.querySelector(data);

    inputs= forms.querySelectorAll('[rules]');  

    inputs.forEach(function(input){
        input.onblur = function(e){
            var rules = input.getAttribute('rules');
            message = e.target.parentElement.querySelector('.message');
            message.innerHTML =validates.required(e.target.value,rules)
        }
        input.oninput = function(e){
            var rules = input.getAttribute('rules');
            message = e.target.parentElement.querySelector('.message');
            message.innerHTML = ''; 
        }
    })

    var button = document.querySelector('.shipping_adr_btn');
    button.onclick = function(){
            inputs.forEach(function(input){
                var rules = input.getAttribute('rules');
                message = input.parentElement.querySelector('.message');
                message.innerHTML =validates.required(input.value,rules)
            })
            messages = document.querySelectorAll('.message');
            var check = true;
            messages.forEach(function(e){
                if(e.innerHTML !== ''){
                    check = false;
                    return 1;
                }
            })
            if(check){
                alert('We have received your application, we will contact you soon, thank you for your purchase');
                localStorage.removeItem('cart');
                document.querySelector('.shipping_cart').submit();
            }
        }
}

    validate('.shipping_cart');
    

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
                   <div class="col-lg-3 box ">
                       <img src="${item.product.img}" style="border: 1px solid #e2d7d7;  border-radius:4px"  alt="" width="100%" height="100%">
                   </div>
                   <div class="col-lg-9 box">
                       <div class="" style="font-size:17px; font-weight:bold;color: #black;">${item.product.band} - ${item.product.name}</div>
                       <div class="flex_sp" style="padding:0px 0px 0px 0px; margin-top:10px; font-size:19px" >
                            <div class="">Quantily: ${item.quantity}</div>
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

</script>