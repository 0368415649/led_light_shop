// search CART mobile
document.querySelector('.icon_search').onclick = function(){
    document.querySelector('.header_mobile_search').style.display='block';
}
document.querySelector('.close_search').onclick = function(){
    document.querySelector('.header_mobile_search').style.display='none';
}
// search CART web
document.querySelectorAll('.header-search-input').forEach(function(e,ix){
    e.oninput = function() {
        console.log(document.querySelectorAll('.header-search-icon'));
        document.querySelectorAll('.header-search-icon')[ix].href ='?search='+ e.value;
    
    }
})
// Handle Comment 
let Comment_hd =[];
if(document.querySelector('#form_review')){
    validate('#form_review');
}
//  Product_More Quantily Plus or Minass

function addMinasCart(data){
    const  text  = document.querySelectorAll(".buy_input") ;
    text.forEach(function(item){
        if(item.getAttribute('data') == data){
            item.value -= 1;
            if( item.value < 1){
                alert("Quantity cannot be less than 1 ");
                item.value = 1;
            }else{
                let storage = localStorage.getItem('cart');
                if(storage){
                    CartAraay= JSON.parse(storage);
                }
                CartAraay.forEach(item =>{
                    if(item.product.id == data){
                        item.quantity=  Number(item.quantity) - 1;
                    }
                })
                localStorage.setItem('cart',JSON.stringify(CartAraay));
                showCart('');
                showCart('2');

                showCart_view();
            }
        }
    })

}
function addPlusCart(data){
    let storage = localStorage.getItem('cart');
    if(storage){
        CartAraay= JSON.parse(storage);
    }
    CartAraay.forEach(item =>{
        if(item.product.id == data){
            item.quantity=  Number(item.quantity) + 1;
        }
    })
    localStorage.setItem('cart',JSON.stringify(CartAraay));
    showCart('');
    showCart('2');
    showCart_view();
}

//  CART Quantily Plus or Minass
function addPlus(){
    const  buy_input2  = document.querySelector(".buy_input2") ;
    buy_input2.value-=1;
    if( buy_input2.value < 1){
        alert("Quantity cannot be less than 1 ");
        buy_input2.value = 1;
    }
}
function addMinas(){
    const  buy_input2  = document.querySelector(".buy_input2") ;
    buy_input2.value = Number(buy_input2.value) + 1;
}
// Show revier_cart

var CartAraay_view = [];
function showCart_view(){
    const storage = localStorage.getItem('cart');
    if(storage){
        cart_data= JSON.parse(storage);
        const quantity = cart_data.reduce(function(start,item){
                return Number(start) + (Number(item.product.price)*Number(item.quantity));
        },0)
        s='';
        if( cart_data.length === 0){
            s+='<div class="fs-3 text-center" style="padding:70px 0px"> Chưa Có sản phẩm nào được thêm </div>'
        }
        else{

            cart_data.map((item)=>{
            s+=
                `
                <div class="col-lg-2 boxxx">
                    <img style=" border-radius:5px; border:1px solid #ececec" width="80%" src="${item.product.img}" alt="">
                </div>
                <div class="col-lg-3 boxxx">
                    <div class="" style="font-size:24px; font-weight:500;">${item.product.band} - ${item.product.name}</div>
                    <button onclick=Remove_cart("${item.product.id}") class="buttonn mt-1  ms-5">Remove</button>
                </div>
                <div class="col-lg-3 boxxx fs-4 fw-bold">$${item.product.price}.00</div>
                <div class="col-lg-2 boxxx">
                <div class="content-more-quantity-number"> 
                                <div onclick=addMinasCart("${item.product.id}")  class="content-more-op content-more-op-minus " style="line-height: 3.9px;">-</div>  
                                <input type="text" disabled="disabled" id="quantity" value="${item.quantity}"  class="widht_sml buy_input view_cart_w">
                                <div  onclick=addPlusCart("${item.product.id}")  class="content-more-op content-more-op_plus "   style="line-height: 3.9px;">+</div> 
                            </div>
                </div>
                <div class="col-lg-2 boxxx">$${item.quantity * item.product.price}.00</div>    
             `;
            })
        }
        document.querySelector('.cart_view_grap_bd').innerHTML = s;
        document.querySelector('#cart_price_view').innerHTML = "$"+quantity+".00 USD";
    }
}

// showCart();
if(document.querySelector('.cart_view_grap_bd')){
showCart_view()
}
//  SHOW CART 
var CartAraay = [];
function showCart(data){
    const storage = localStorage.getItem('cart');

    if(storage){
        cart_data= JSON.parse(storage);
        const quantity = cart_data.reduce(function(start,item){
                return Number(start) + (Number(item.product.price)*Number(item.quantity));
        },0)
        s='';
        // console.log(cart_data.length);
        if(cart_data.length == 0){  
            s=`
            <div class="text-center cart_disable_main">
                 <div style="color: #fff; font-weight:200;" class="fs-4 mb-3">No product</div>
                 <img src="./resources/img/no-cart.png" width="100%" alt="">  
            </div>

            `;
            var cart_all =document.querySelectorAll('.cart_disable')
                cart_all.forEach(function(e){
                    e.style.display = 'none';
                })
            // document.addEventListener("DOMContentLoaded", () => {
            //         document.querySelector('.cart_disable').style.display = 'none';

            // });
        }else{
            cart_data.map((item)=>{
                s+=`
                    <div class="row header_cart_item">
                        <div class="col-lg-4 col-sm-4 col-4 boxxx" >
                            <img style=" border-radius: 3px;" src="${item.product.img}" width="100%" alt="">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 boxxx">
                            <div class="header_cart_fs">${item.product.band} - ${item.product.name} </div>
                            <div class="header_cart_fs2">$${item.product.price}.00 USD</div>
                            <div class="main_flex">
                                <div class="content-more-quantity-number"> 
                                    <div onclick=addMinasCart("${item.product.id}") class="content-more-op content-more-op-minus">-</div>  
                                    <input type="text" disabled="disabled" data="${item.product.id}" id="quantity" value="${item.quantity}" class="widht_sml buy_input">
                                    <div  onclick=addPlusCart("${item.product.id}") class="content-more-op content-more-op_plus">+</div> 
                                </div>
                                <button onclick=Remove_cart("${item.product.id}") class="buttonn">Remove</button>
                            </div>
                        </div>
                    </div> 
                    `;
        
                })
                var cart_all =document.querySelectorAll('.cart_disable')
                cart_all.forEach(function(e){
                    e.style.display = 'block';
                })
                    

        }
        
        document.querySelector(`.header_cart_contentt${data}`).innerHTML = s;
        document.querySelector(`#cart_price${data}`).innerHTML = "$"+quantity+".00 USD";
        document.querySelector(`.header_cart_big_quantity${data}`).innerHTML = cart_data.length;

        
    }else{
        s=`
        <div class="text-center">
             <div style="color: #fff;" class="fs-4 mb-3">No product</div>
             <img src="./resources/img/no-cart.png" widht="100%" alt="">  
        </div>

        `;

        document.querySelector('.header_cart_contentt').innerHTML = s;

    }
}


showCart('');
showCart('2');

// REMOVE CART
function Remove_cart(code_id){
    let storage = localStorage.getItem('cart');
    if(storage){
        CartAraay= JSON.parse(storage);
    }
    Cart = CartAraay.filter(function(item){
        return item.product.id != code_id;
    })

    localStorage.setItem('cart',JSON.stringify(Cart));
    showCart('');
    showCart('2');
    showCart_view();
    alert("Product "+code_id+ " has been deleted in the cart");

}
// ADD CART
function addCart(data,price){
    const  cart_img  = document.querySelector("#cart_img") ;
    const  cart_name  = document.querySelector("#cart_name") ;
    const  cart_name2  = document.querySelector("#cart_name2") ;   
    const  buy_input2  = document.querySelector(".buy_input2") ;  
    let storage = localStorage.getItem('cart');
    let Product_More = {
        id:data,
        img: cart_img.src,
        band: cart_name.innerHTML,
        name: cart_name2.innerHTML,
        price: price,
    }
    if(storage){
        CartAraay = JSON.parse(storage);
    }
    let item = CartAraay.find(c => c.product.id == data );
    if(item){
        item.quantity =  Number(item.quantity)+ Number(buy_input2.value);
    } else{
        CartAraay.push({product:Product_More, quantity:  Number(buy_input2.value) });
    }
    localStorage.setItem('cart',JSON.stringify(CartAraay));
    showCart('')
    showCart('2');
    alert("Product "+Product_More.id+ " has been added to the cart");
}


//   Product_More Write 
function write_review(){
    if(document.querySelector('.write-review').style.display==="none"){
        document.querySelector('.write-review').style.display="block";
    }else{
        document.querySelector('.write-review').style.display="none";
    }
    
   

}

// Support Page Click Item
var clicklick= document.querySelectorAll(".clicklick");
var clicklick2= document.querySelectorAll(".clicklick2");
var clicklickup= document.querySelectorAll(".clicklickup");
var sp_list= document.querySelectorAll(".content_sp_list_title");
var content_sp_item= document.querySelectorAll(".content_sp_item");


clicklick.forEach((cl,index)=>{
    cl.onclick = function(){
        cl.style.display="none";
        clicklickup[index].style.display="block";
        content_sp_item[index].style.display="block";
        clicklick2.forEach((cl2,ix)=>{
            cl2.onclick = function(e){
                document.querySelectorAll(".content_sp_itemcl")[ix].style.display="block";
            }
        })
    }
})
clicklickup.forEach((clup,index)=>{
    clup.onclick = function(){
        // console.log(clicklickup[index]);
        clup.style.display="none";
        clicklick[index].style.display="block";
        content_sp_item[index].style.display="none";

    }
})















    