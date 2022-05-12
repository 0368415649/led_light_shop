
    <?php
    
    if(isset($_GET['route']) && ($_GET['route']) == "shipping" ){
        include "./views/body/GET_ROUTE/shipping.php";

    }else{
    // HEADER   
    include "./views/header.php";


    if(isset($_GET['slug']) || isset($_GET['search']) ){
        if(isset($_GET['search'])){
            include './views/body/GET_SEARCH/search.php';
        }else{
            if($_GET['slug'] == 'view_cart'){
                include './views/body/GET_slug/cart_view.php';
            }else{
                include './views/body/GET_slug/more.php';
            }
        }
       
    }else{
        if( !isset($_GET['slug']) && !isset($_GET['route']) ){
            // change font-weight
             $color_f = $color_t = $color_c  = '';
             $color_all= 'content-item-color';
             if(isset($_GET['category'])){
                    if($_GET['category'] == 'floor'){
                    $color_f = 'content-item-color';
                    $color_all='';
                    }
                    if($_GET['category'] == 'desk_table'){
                        $color_t = 'content-item-color';
                        $color_all='';
                    }
                    if($_GET['category'] == 'ceiling'){
                        $color_c = 'content-item-color';
                        $color_all='';
                    }
               }
            
            
    echo' <div class="content " id="content">
                <div class="content_hiden">
                    <div class="grap header-img ">
                            <img src="./resources/img/anh1.png" alt="" width="100%">
                    </div>
                    <div class="garp">
                        <ul class="content-list">
                            <li class="content-item '.$color_all.' "><a href="./"  class="category_a" style="color:black;">ALL</a></li>
                            <li class="content-item '.$color_t.'"><a href="?category=desk_table"  class="category_d" style="color:black;" >DESK & TABLE</a></li>
                            <li class="content-item '.$color_f.'"><a href="?category=floor"  class="category_f" style="color:black;" >FLOOR</a></li>
                            <li class="content-item '.$color_c.'"><a href="?category=ceiling"  class="category_c" style="color:black;" >WALL , PENDANT & CEILING</a></li>
                        </ul>
                    </div>
                </div>';
        }
    echo '
            <div class="grap content-main"  >  
                <div class="row" id="root" >';
                            if(isset($_GET['route'])){
                                    if($_GET['route'] == 'support'){
                                        include './views/body/GET_ROUTE/support.php';
                                    }
                                    if($_GET['route'] == 'contact'){
                                        include './views/body/GET_ROUTE/contact.php';
                                    }
                                    if($_GET['route'] == 'Privacy_Policy'){
                                        include './views/body/GET_ROUTE/Privacy_Policy.php';
                                    }
                                    
                            }else{
                                include './views/body/home.php';
                            }
                            
        echo '      
                    </div>
                </div>
            </div>  ';
    }
    
    // FOOTER
    include './views/footer.php';
}
    ?>


