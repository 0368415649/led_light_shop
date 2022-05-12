<?php

include("./sql_connect.php");
<<<<<<< HEAD
=======

>>>>>>> 33cb63903cc563ae2e255aec90cf3d266f78d191
$sql ="SELECT * FROM `light_led` WHERE code_id='".$_GET['slug']."'";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result,1);
if(isset($_POST['rv_name'])){
<<<<<<< HEAD
    $sql = "INSERT INTO `comment_p`(`product_id`,`rate`, `email`, `name`, `review_title`, `review_content`)
     VALUES ('".$_GET['slug']."','".$_POST['rate']."','".$_POST['rv_email']."','".$_POST['rv_name']."'
=======
    $sql = "INSERT INTO `comment_p`(`product_id`, `email`, `name`, `review_title`, `review_content`)
     VALUES ('".$_GET['slug']."','".$_POST['rv_email']."','".$_POST['rv_name']."'
>>>>>>> 33cb63903cc563ae2e255aec90cf3d266f78d191
     ,'".$_POST['rv_title']."','".$_POST['rv_content']."')";
     echo $sql;
     if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Comment created successfully')</script>
        ";
      } else {
        echo "Error creating database: " . $conn->error;
      }     

}

$sql2 ="SELECT * FROM `comment_p` where  product_id='".$_GET['slug']."'";
$result2 = mysqli_query($conn,$sql2);
$data2 =mysqli_fetch_all($result2,1);
$count = count($data2);
mysqli_close($conn);

for( $i =0 ; $i < count($data); $i++){
 echo ' 
        <div class="row content-mt" style="margin-bottom: 40px;     margin-top: 60px;">   
            <div class="col-lg-7 col-sm-7 col-12 boxx" style=" padding: 0px 0px 0px 150px;">
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

            <div class="col-lg-5 col-sm-5 col-12 boxx contant-more-grap" style="">
<<<<<<< HEAD
                    <div id="cart_name" class="content-more-title">'.$data[$i]["brand"].'</div>(<span style="font-size:14px; " class="review_codeid">'.$data[$i]["code_id"].'</span>)
                    <div id="cart_name2" class="content-more-title2">'.$data[$i]["name"].'</div>
=======
                    <div id="cart_name" class="content-more-title">'.$data[$i]["name"].'</div>(<span style="font-size:14px; " class="review_codeid">'.$data[$i]["code_id"].'</span>)
                    <div id="cart_name2" class="content-more-title2">'.$data[$i]["name2"].'</div>
>>>>>>> 33cb63903cc563ae2e255aec90cf3d266f78d191
                    <div class="content-main-star">
                            <span class="color-change">
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </span>
                            <span    class="content-main-view">('.$count.')  reviews</span>
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

                <a class="free-change" href="#">FREE SHIPPING - 30 DAY REFUND. Orders delivered same day. Orders placed on weekends, holidays or weekdays after 1pm EST will be shipped the next business day. Frequently asked questions about shipping</a>     
            </div>
        </div>

        <div class="grap Reviews">
        <div class="row Reviews-row">
            <div class="col-lg-8 col-sm-10 col-12 boxx">
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
                    </div>
                </div>
                <div class="Reviews-flex">
                    <div class="Reviews-flex-item">Reviews ('.$count.')</div>
                </div>
                <div class="Reviews_grapp">';
                        for( $j =0 ; $j < count($data2); $j++){

                            echo '
                            <div class="review_bid" style="padding: 20px 0px 30px 20px;">
<<<<<<< HEAD
                            <span class="color-change ">';
                            for($k=0; $k< $data2[$j]["rate"]; $k++ ){
                                echo' <i class="fa-solid fa-star font_sm"></i>';
                                }
                            echo '
=======
                            <span class="color-change ">
                                    <i class="fa-solid fa-star font_sm"></i>
                                    <i class="fa-solid fa-star font_sm"></i>
                                    <i class="fa-solid fa-star font_sm"></i>
                                    <i class="fa-solid fa-star font_sm"></i>
                                    <i class="fa-solid fa-star font_sm"></i>
>>>>>>> 33cb63903cc563ae2e255aec90cf3d266f78d191
                                </span>
                            <div class="Reviews_tlt fst-italic ">'.$data2[$j]["name"].' on '.$data2[$j]["timeup"].'</div>
                            <div class="Reviews_cnt_tlt">'.$data2[$j]["review_title"].'</div>
                            <p class="Reviews_cnt" style="word-wrap: break-word;">'.$data2[$j]["review_content"].'</p>
                        </div>
                        ';
                        }
            echo'
                </div>
                <div class="write-review" style="display:block"  >
                    <form  method="post" action="" id="form_review">

                        <div class="write-review-title mb-3">Write a review</div>

                        <div class="mb-3">
                            <label for="">Rate: </label>
                            <select name="rate" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>   
                        </div>

                        <div class="">
                            <label for="">Name</label>
                            <input type="text" rules="" name="rv_name" class="write-review-input review_name" placeholder="Enter Your Name">
                            <span class="message"></span>   
                        </div>

                        <div class="">
                            <label for="">Email</label>
                            <input type="text" rules="email" name="rv_email"  class="write-review-input review_email" placeholder="Joih@gmai.com">
                            <span class="message"></span>   
                        </div>

                        <div class="">
                            <label for="">Review Title</label>
                            <input type="text" rules="" name="rv_title" class="write-review-input review_title" placeholder="Give Your Review A Title">
                            <span class="message"></span>   
                        </div>

                        <div class="">
                            <label for="">Body of Review (1500)</label>
                            <textarea  rules="" class="review_content"  name="rv_content" id="" cols="30" rows="10" placeholder="WRITE YOUR COMMEMT HEAER..."></textarea>
                            <span class="message"></span>   
                        </div>

                        <div class="text-end mt-4">
                            <button class="write-review-button click_button_rv" >Submit Review</button>
                        </div>

                    </form>

                </div>        
            </div>

        </div>  
        </div>
        <script>
        document.querySelector("#main_title").innerHTML = "PRODUCT";
        </script>
        ';


   }

?>




