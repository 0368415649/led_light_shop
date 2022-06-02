          
<div class=" create_fix2" style="display:block" >
    <div class="create_fix_flex  bg-dark">
                <div class="" style="margin: 0px auto;">Ordering information</div>
    </div>

    <table class="table table-secondary table-hover">
        <thead>
            <tr>
                <th scope="col">Controller</th>
                <th scope="col">Product</th>
                <th scope="col">Image</th>
                <th scope="col">Quantily</th>
                <th scope="col">Time buy</th>
                <th scope="col">Customer id</th>
                <th scope="col">Customer emaill</th>
                <th scope="col">Customer phone</th>
                <th scope="col">Customer address</th>
                <th scope="col">firts name</th>
                <th scope="col">last name</th>

            </tr>
        </thead>
        <tbody>
            <?php
                $sql ="SELECT O.order_id,O.product_id,O.img,O.quantily,C.id,C.ct_emaill,C.ct_phone,C.ct_address,C.ct_firtsname,C.ct_lastname,O.Uptime FROM `order_aptech` AS O, `customer_pj` AS C WHERE O.customer_id = C.id and O.complete !='ok' ";
                $result = mysqli_query($conn,$sql);
                $data =mysqli_fetch_all($result,1);
                mysqli_close($conn);
                for( $i =0 ; $i < count($data); $i++){
                    echo ' 
                    <tr>
                        <td scope="col">
                        <a href="?Delivered='.$data[$i]['order_id'].'" style="color:white; background:#e68e2a;" class="btn btn_font" role="button" data-bs-toggle="button">Delivered</a>
                        </td>
                        <td scope="col">'.$data[$i]['product_id'].'</td>
                        <td scope="col"><img src="'.$data[$i]['img'].'" alt="" width="50px" ></td>
                        <td scope="col">'.$data[$i]['quantily'].'</td>
                        <td scope="col">'.$data[$i]['Uptime'].'</td>
                        <td scope="col">'.$data[$i]['id'].'</td>
                        <td scope="col">'.$data[$i]['ct_emaill'].'</td>
                        <td scope="col">'.$data[$i]['ct_phone'].'</td>
                        <td scope="col">'.$data[$i]['ct_address'].'</td>
                        <td scope="col">'.$data[$i]['ct_firtsname'].'</td>
                        <td scope="col">'.$data[$i]['ct_lastname'].'</td>


                    </tr>
                ';
                    
                    
                        }
            ?>
        </tbody>
    </table>
</div>
<script>
    document.querySelector('#title').innerHTML = "ORDER MANAGEMENT";
</script>