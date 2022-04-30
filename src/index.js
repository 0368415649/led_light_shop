// Show comment Plus
const review_code = document.querySelector('.review_codeid');
function showComment(data){
    const storage = localStorage.getItem('comment');
    cart_data= JSON.parse(storage);
    let review_ql = 0;
    if(storage){
        cart_data= JSON.parse(storage);
        s='';
        cart_data.map((item)=>{
            if(item.product.id === data){
                review_ql = review_ql+1;
                s+=`<div class="review_bid" style="padding: 20px 0px 30px 20px;">
                        <span class="color-change ">
                                <i class="fa-solid fa-star font_sm"></i>
                                <i class="fa-solid fa-star font_sm"></i>
                                <i class="fa-solid fa-star font_sm"></i>
                                <i class="fa-solid fa-star font_sm"></i>
                                <i class="fa-solid fa-star font_sm"></i>
                            </span>
                        <div class="Reviews_tlt fst-italic ">${item.product.name} on ${item.timeUp}</div>
                        <div class="Reviews_cnt_tlt">${item.product.title}</div>
                        <p class="Reviews_cnt" style="word-wrap: break-word;">${item.product.content}</p>
                    </div>
                    `;
            }
        })
        document.querySelector('.Reviews_grapp').innerHTML = s;  
        document.querySelectorAll('.content-main-view_ql').forEach((c) => {
            c.innerHTML =review_ql;
        })
    }
}
if(review_code){
showComment(review_code.innerHTML)
}
// Handle Comment 
let Comment_hd =[];
if(document.querySelector('#form_review')){
    validate('#form_review');
}
function review_handle(data){
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
                const review_name   =document.querySelector('.review_name')
                const review_email   =document.querySelector('.review_email')
                const review_title   =document.querySelector('.review_title')
                const review_content   =document.querySelector('.review_content')
                let storage = localStorage.getItem('comment');
                let Product_Comment = {
                    id:data,
                    name: review_name.value,
                    email: review_email.value,
                    title: review_title.value,
                    content: review_content.value,
                }

                if(storage){
                    Comment_hd = JSON.parse(storage);
                }
                Comment_hd.push({product:Product_Comment, timeUp: new Date(),});
                localStorage.setItem('comment',JSON.stringify(Comment_hd));
                showComment(data);
                review_name.value="";
                review_email.value="";
                review_title.value="";
                review_content.value="";
                alert("thank you for review");
            }
        }
    

//  Product_More Quantily Plus or Minass

function addMinasCart(data){
    const  text  = document.querySelectorAll(".buy_input") ;
    text.forEach(function(item){
        if(item.getAttribute('data') == data){
            item.value -= 1;
            if( item.value < 0){
                alert("Quantity cannot be less than 0 ");
                item.value = 0;
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
                showCart();
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
    showCart();
    showCart_view();
}

//  CART Quantily Plus or Minass
function addPlus(){
    const  buy_input2  = document.querySelector(".buy_input2") ;
    buy_input2.value-=1;
    if( buy_input2.value < 0){
        alert("Quantity cannot be less than 0 ");
        buy_input2.value = 0;
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
        console.log(cart_data);
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
function showCart(){
    const storage = localStorage.getItem('cart');
    if(storage){
        cart_data= JSON.parse(storage);
        const quantity = cart_data.reduce(function(start,item){
                return Number(start) + (Number(item.product.price)*Number(item.quantity));
        },0)
        s='';
        cart_data.map((item)=>{
        s+=`
            <div class="row header_cart_item">
                <div class="col-lg-4 boxxx" >
                    <img style=" border-radius: 3px;" src="${item.product.img}" width="100%" alt="">
                </div>
                <div class="col-lg-8 boxxx">
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
        document.querySelector('.header_cart_contentt').innerHTML = s;
        document.querySelector('#cart_price').innerHTML = "$"+quantity+".00 USD";
        document.querySelector('.header_cart_big_quantity').innerHTML = cart_data.length;

        
    }
}
showCart();
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
    showCart();
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
    showCart()
    alert("Product "+Product_More.id+ " has been added to the cart");
}


//   Product_More Write review or question
function write_review(){
    if(document.querySelector('.write-review').style.display==="none"){
        document.querySelector('.write-review').style.display="block";
    }else{
        document.querySelector('.write-review').style.display="none";
    }
    
   

}
function write_Question(){
    document.querySelector('.write-review').style.display="none";
    document.querySelector('.write-Question').style.display="block";
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









// document.addEventListener('DOMContentLoaded', function(){
//     function change_fw(){
//         var item = document.querySelectorAll(".content-item");
//         item.forEach((items) =>{
//             items.classList.add('content-item-color');
//         })
//     }
//     var change_e = document.querySelectorAll(".content-item");
//     var change_ex = document.querySelectorAll(".header-shop-item-l");

// var content_item= document.querySelectorAll(".buy_input2");
// console.log(content_item)
//     change_e.forEach((el)=>{
//         el.onclick= function(){
//             el.classList.add('content-item-color');
//         }
//     })
//     change_ex.forEach((el,index)=>{
//            el.onclick= function(){
//             change_e[index].classList.add('content-item-color');
//         }
//     })
// })








    