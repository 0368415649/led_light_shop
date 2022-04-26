
    <?php
    if(isset($_GET['route']) && ($_GET['route']) == "shipping" ){
        include "./shipping.php";

    }else{
    include "./views/header.php";
    if(isset($_GET['slug'])){
        include './sql_data/more.php';
    }else{
    echo '
            <div class="content " id="content">
            <div class="grap header-img">
                    <img src="./resources/img/anh1.png" alt="" width="100%">
            </div>
            <div class="garp">
                <ul class="content-list">
                    <li class="content-item"><a href="./"  class="category_a" style="color:black;">ALL</a></li>
                    <li class="content-item"><a href="?category=desk_table"  class="category_d" style="color:black;" >DESK & TABLE</a></li>
                    <li class="content-item"><a href="?category=floor"  class="category_f" style="color:black;" >FLOOR</a></li>
                    <li class="content-item"><a href="?category=ceiling"  class="category_c" style="color:black;" >WALL , PENDANT & CEILING</a></li>
                </ul>
            </div>

            <div class="grap content-main"  >  
                <div class="row" id="root" >';
                            if(isset($_GET['route'])){
                                    if($_GET['route'] == 'support'){
                                        include './views/body/support.php';
                                    }
                                    if($_GET['route'] == 'contact'){
                                        include './views/body/contact.php';
                                    }
                            }else{
                                include './sql_data/test.php';
                            }
                            
        echo ' 
                    </div>
                </div>
            </div>  ';
    }
    include './views/footer.php';
}
    ?>
<script>
        function change_fw(){
        var item = document.querySelectorAll(".content-item");
        item.forEach((items) =>{
            items.classList.add('content-item-color');
        })
    }
    var change_e = document.querySelectorAll(".content-item");
    var change_ex = document.querySelectorAll(".header-shop-item-l");
    change_e.forEach((el)=>{
        el.onclick= function(){
            el.classList.add('content-item-color');
        }
    })
    change_ex.forEach((el,index)=>{
           el.onclick= function(){
            change_e[index].classList.add('content-item-color');
        }
    })
</script>
