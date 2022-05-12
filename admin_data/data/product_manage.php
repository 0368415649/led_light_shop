<div class="col-lg-12 box content">
    <div class="create_fix_flex admin_s bg-dark">
        <div class="" style="margin: 0px auto;">Light Led Data</div>
    </div>

    <table style="background:#cacaca;"class="table  table-hover">
        <thead>
            <tr>
                    <th class="col-lg-1" scope="col">Controller</th>
                    <th class="col-lg-1" scope="col">Id</th>
                    <th class="col-lg-1" scope="col">Code_id</th>
                    <th class="col-lg-1" scope="col">Brands</th>
                    <th class="col-lg-1" scope="col">Name</th>
                    <th class="col-lg-1" scope="col">Image</th>
                    <th class="col-lg-1" scope="col">Price</th>
                    <th class="col-lg-1" scope="col">Categorize</th>

            </tr>
        </thead>
        <tbody> 
            <?php
                include("../sql_connect.php");
                $sql ="SELECT * FROM `light_led` WHERE 1 ";
                $result = mysqli_query($conn,$sql);
                $data =mysqli_fetch_all($result,1);
                mysqli_close($conn);
                for( $i =0 ; $i < count($data); $i++){
                    echo ' 
                    <tr>
                        <td scope="col">
                        <a href="?delete='.$data[$i]['code_id'].'" style="color:white; background:#e68e2a; margin-right:5px;" class="btn btn_font" role="button" data-bs-toggle="button">Delete</a>
                        <a href="?update='.$data[$i]['code_id'].'" style="color:white; background:#e68e2a;" class="btn btn_font " role="button" data-bs-toggle="button">Edit</a>
                        </td>
                        <td scope="col">'.$data[$i]['id'].'</td>
                        <td scope="col">'.$data[$i]['code_id'].'</td>
                        <td scope="col">'.$data[$i]['brand'].'</td>
                        <td scope="col">'.$data[$i]['name'].'</td>
                        <td scope="col"><img src="'.$data[$i]['image1'].'" alt="" width="50px" ></td>
                        <td scope="col">'.$data[$i]['price'].'</td>
                        <td scope="col">'.$data[$i]['categorize'].'</td>
                    </tr>
                ';
                    
                    
                        }
            ?>
        </tbody>
    </table>
</div>      
<script>
    document.querySelector('#title').innerHTML = "PRODUCT MANAGEMENT";
</script>


