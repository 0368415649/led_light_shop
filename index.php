
    <?php
    
    if(isset($_GET['come']) && ($_GET['come']) == "shipping" ){
        include "./views/body/GET_ROUTE/shipping.php";

    }else{

    // HEADER   
    include "./views/header.php";

    // body

        
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
            if($_GET['route'] == 'view_cart'){
                include './views/body/GET_ROUTE/cart_view.php';
            } 
        }

        if(isset($_GET['search'])){
            include './views/body/GET_SEARCH/search.php';
        }

        if(isset($_GET['price'])){
            include './views/body/GET_PRICE/index.php';
        }

        if(isset($_GET['brand'])){
            include './views/body/GET_BRAND/index.php';
        }

        if(isset($_GET['slug'])){
            include './views/body/GET_slug/more.php';
        }
        if( !isset($_GET['slug']) && !isset($_GET['route'])  && !isset($_GET['search'])  && !isset($_GET['price'])  && !isset($_GET['brand'])  ){
             include './views/body/home.php';
        }
                
                    
     // FOOTER
     include './views/footer.php';
}
   

    ?>


