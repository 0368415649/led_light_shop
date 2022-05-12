          
<div class=" create_fix2" style="display:block" >
    <div class="create_fix_flex  bg-dark">
                <div class="" style="margin: 0px auto;">USER INFORMATION</div>
    </div>

    <table class="table table-secondary table-hover">
        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Firts Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("../sql_connect.php");
                $sql ="SELECT * FROM `customer_pj` WHERE 1 ";
                $result = mysqli_query($conn,$sql);
                $data =mysqli_fetch_all($result,1);
                mysqli_close($conn);
                for( $i =0 ; $i < count($data); $i++){
                    echo ' 
                    <tr>

                        <td scope="col">'.$data[$i]['ct_emaill'].'</td>
                        <td scope="col">'.$data[$i]['ct_firtsname'].'</td>
                        <td scope="col">'.$data[$i]['ct_lastname'].'</td>
                        <td scope="col">'.$data[$i]['ct_phone'].'</td>
                        <td scope="col">'.$data[$i]['ct_address'].'</td>

                    </tr>
                ';
                    
                    
                        }
            ?>
        </tbody>
    </table>
</div>
<script>
    document.querySelector('#title').innerHTML = "USER INFORMATION";
</script>
