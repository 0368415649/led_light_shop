<?php

$conn = new mysqli("localhost","root","","light_led_project");
$sql ="SELECT * FROM `light_led` WHERE code_id='".$_GET['slug']."'";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
mysqli_close($conn);
//  $h= preg_replace($pattern,'',$h);
// <form action="">
// <input type="text" value="'.$data[$i]["image1"].'" >
// <input type="text" value="'.$data[$i]["name"].'" >
// <input type="text" value="'.$data[$i]["name2"].'" >
// <input type="text" value="'.$data[$i]["price"].'" >
// </form> 
for( $i =0 ; $i < count($data); $i++){
 echo ' 
        <div class="row content-mt" style="margin-bottom: 40px;">   
            <div class="col-lg-7 boxx">
                    <img id="cart_img" src="'.$data[$i]["image1"].'" alt="" width="75%">
            </div>

            <div class="col-lg-5 boxx contant-more-grap">
                    <div id="cart_name" class="content-more-title">'.$data[$i]["name"].'</div>
                    <div id="cart_name2" class="content-more-title2">'.$data[$i]["name2"].'</div>
                    <div class="content-main-star">
                            <span class="color-change">
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </span>
                            <span    class="content-main-view">'.$data[$i]["riview"].' reviews</span>
                    </div>
                    <div id="cart_price"  class="content-more-price">$'.$data[$i]["price"].'.00 USD</div>
                    <div class="content-more-discription">'.$data[$i]["description"].'</div>
                <ul class="content-more-list">
                    <li class="content-more-item">'.$data[$i]["atb1"].'</li>
                    <li class="content-more-item">'.$data[$i]["atb2"].'</li>
                    <li class="content-more-item">'.$data[$i]["atb3"].'</li>
                    <li class="content-more-item">'.$data[$i]["atb4"].'</li>
                </ul>
                <div class="content-more-free">Free Shipping - 30-day returns - 5-yr warranty</div>
                <div class="content-more-quantity">
                    <label for="quantity" >Quantity</label>
                    <div class="content-more-quantity-number"> 
                        <div onclick="addPlus()"  class="content-more-op content-more-op_minus2">-</div>  
                        <input  type="text" id="quantity" value="1" class="buy_input2">
                        <div onclick="addMinas()" class="content-more-op content-more-op_plus2">+</div> 
                    </div>
                </div>


                <button onclick=addCart("'.$data[$i]["code_id"].'","'.$data[$i]["price"].'") class="content-more-cart">Add to Cart</button>

                <a class="free-change" href="#">MIỄN PHÍ VẬN CHUYỂN - ĐỔI TRẢ HÀNG 30 NGÀY. Đơn đặt hàng giao ngay trong ngày. Các đơn hàng được đặt vào cuối tuần, ngày lễ hoặc các ngày trong tuần sau 1 giờ chiều EST sẽ được giao vào ngày làm việc tiếp theo. Câu hỏi thường gặp về vận chuyển</a>     
            </div>
        </div>

        <div class="grap Reviews">
        <div class="row Reviews-row">
            <div class="col-lg-6">
                <div class="Reviews-row-title">Customer Reviews</div>
                <div class="Reviews-row-comment">
                    <div class="content-main-star">
                            <span class="color-change">
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </span>
                            <span    class="content-main-view">494 reviews</span>
                    </div>
                    <div class="">
                        <button class="Reviews-row-button review-event" onclick="write_review()">Write a review</button>
                        <button class="Reviews-row-button question-event" onclick="write_Question()">Ask a Question </button>
                    </div>
                </div>
                <div class="Reviews-flex">
                    <div class="Reviews-flex-item">Reviews (0)</div>
                    <div class="Reviews-flex-item">Questions (0)</div>
                </div>

                <div class="write-review" >
                    <div class="write-review-title mb-3">Write a review</div>
                    <label for="">Name</label>
                    <input type="text" class="write-review-input" placeholder="Enter Your Name">
                    <label for="">Email</label>
                    <input type="text" class="write-review-input" placeholder="Joih@gmai.com">
                    <label for="">Review Title</label>
                    <input type="text" class="write-review-input" placeholder="Give Your Review A Title">
                    <label for="">Body of Review (1500)</label>
                    <textarea        name="" id="" cols="30" rows="10" placeholder="WRITE YOUR COMMEMT HEAER..."></textarea>
                    <div class="text-end mt-4">
                        <button class="write-review-button">Submit Review</button>
                    </div>
                </div>

                <div class="write-Question">
                    <div class="write-review-title mb-3">Ask a Question</div>
                    <label for="">Name</label>
                    <input type="text" class="write-review-input" placeholder="Enter Your Name">
                    <label for="">Email</label>
                    <input type="text" class="write-review-input" placeholder="Joih@gmai.com">
                    <label for="">Body of Review (1500)</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Write Your Question Hear..."></textarea>
                    <div class="text-end mt-4">
                        <button class="write-review-button">Submit Question</button>
                    </div>
                </div>
                
            </div>

        </div>  
        </div>
        ';


   }

?>




