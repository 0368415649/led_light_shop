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
        <div class="row content-mt" style="margin-bottom: 40px;     margin-top: 60px;">   
            <div class="col-lg-7 boxx" style=" padding: 0px 0px 0px 150px;">
                    <div id="carouselExampleIndicators" style="width: 80%;" class="carousel slide widht" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner ">
                      <div class="carousel-item active">
                        <img src="'.$data[$i]["image1"].'" id="cart_img" class="d-block w-100" widht="100%" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="'.$data[$i]["image2"].'" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>  
            </div>

            <div class="col-lg-5 boxx contant-more-grap" style="padding: 0px 60px 0px 0px">
                    <div id="cart_name" class="content-more-title">'.$data[$i]["name"].'</div>(<span style="font-size:14px; " class="review_codeid">'.$data[$i]["code_id"].'</span>)
                    <div id="cart_name2" class="content-more-title2">'.$data[$i]["name2"].'</div>
                    <div class="content-main-star">
                            <span class="color-change">
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </span>
                            <span    class="content-main-view"> <span class="content-main-view_ql"></span>  reviews</span>
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
                            <span    class="content-main-view"><span class="content-main-view_ql"></span> reviews</span>
                    </div>
                    <div class="">
                        <button class="Reviews-row-button review-event" onclick="write_review()">Write a review</button>
                        <button class="Reviews-row-button question-event" onclick="write_Question()"  style="display:none">Ask a Question </button>
                    </div>
                </div>
                <div class="Reviews-flex">
                    <div class="Reviews-flex-item" onclick=showComment("'.$data[$i]["code_id"].'")>Reviews (<span class="content-main-view_ql"></span>)</div>
                    <div class="Reviews-flex-item">Questions (0)</div>
                </div>
                <div class="Reviews_grapp">
                   
                </div>
                <div class="write-review" style="display:none"  >
                    <form  method="post" action="" id="form_review">

                        <div class="write-review-title mb-3">Write a review</div>

                        <div class="">
                            <label for="">Name</label>
                            <input type="text" rules="" class="write-review-input review_name" placeholder="Enter Your Name">
                            <span class="message"></span>   
                        </div>

                        <div class="">
                            <label for="">Email</label>
                            <input type="text" rules="email" class="write-review-input review_email" placeholder="Joih@gmai.com">
                            <span class="message"></span>   
                        </div>

                        <div class="">
                            <label for="">Review Title</label>
                            <input type="text" rules="min:10" class="write-review-input review_title" placeholder="Give Your Review A Title">
                            <span class="message"></span>   
                        </div>

                        <div class="">
                            <label for="">Body of Review (1500)</label>
                            <textarea  rules="min:30" class="review_content"       name="" id="" cols="30" rows="10" placeholder="WRITE YOUR COMMEMT HEAER..."></textarea>
                            <span class="message"></span>   
                        </div>

                        <div class="text-end mt-4">
                            <div class="write-review-button click_button_rv" onclick=review_handle("'.$data[$i]["code_id"].'")>Submit Review</div>
                        </div>

                    </form>

                </div>

                <div class="write-Question"  >

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
        <script>
        document.querySelector("#main_title").innerHTML = "PRODUCT '.$data[$i]["name2"].'";
        </script>
        ';


   }

?>




