          
<div class=" create_fix2" style="display:block" >
    <div class="create_fix_flex  bg-dark">
                <div class="" style="margin: 0px auto;">Ordering information</div>
    </div>

    <table class="table table-secondary table-hover">
        <thead>
            <tr>
                <th scope="col">Controller</th>
                <th scope="col">Customer</th>
                <th scope="col">Product</th>
                <th scope="col">Image</th>
                <th scope="col">Quantily</th>
                <th scope="col">Time buy</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql ="SELECT * FROM `order_aptech` WHERE `complete` != 'ok' ";
                $result = mysqli_query($conn,$sql);
                $data =mysqli_fetch_all($result,1);
                mysqli_close($conn);
                for( $i =0 ; $i < count($data); $i++){
                    echo ' 
                    <tr>
                        <td scope="col">
                        <a href="?Delivered='.$data[$i]['id'].'" style="color:white; background:#e68e2a;" class="btn btn_font" role="button" data-bs-toggle="button">Delivered</a>
                        </td>
                        <td scope="col">'.$data[$i]['customer_email'].'</td>
                        <td scope="col">'.$data[$i]['name'].'</td>
                        <td scope="col"><img src="'.$data[$i]['img'].'" alt="" width="50px" ></td>
                        <td scope="col">'.$data[$i]['quantily'].'</td>
                        <td scope="col">'.$data[$i]['Uptime'].'</td>
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