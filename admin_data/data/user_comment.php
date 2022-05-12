          
<div class=" create_fix2" style="display:block" >
    <div class="create_fix_flex  bg-dark">
                <div class="" style="margin: 0px auto;">USER COMMENT</div>
    </div>

    <table class="table table-secondary table-hover">
        <thead>
            <tr>
                <th scope="col">Controller2</th>
                <th scope="col">Rate    </th>
                <th scope="col">product_id</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Time up</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("../sql_connect.php");
                $sql ="SELECT * FROM `comment_p` WHERE 1 ";
                $result = mysqli_query($conn,$sql);
                $data =mysqli_fetch_all($result,1);
                mysqli_close($conn);
                for( $i =0 ; $i < count($data); $i++){
                    echo ' 
                    <tr>
                        <td scope="col">
                        <a href="?delete_cm='.$data[$i]['id'].'"  style="color:white; background:#e68e2a;" class="btn  btn_font" role="button" data-bs-toggle="button">Delete</a>
                        </td>
                        <td scope="col">
                            <span class="color-change">';
                            for($k=0; $k< $data[$i]["rate"]; $k++ ){
                            echo' <i class="fa-solid fa-star font_sm"></i>';
                            }
                        echo'  
                            </span>
                        </td>

                        <td scope="col">'.$data[$i]['product_id'].'</td>
                        <td scope="col">'.$data[$i]['email'].'</td>
                        <td scope="col">'.$data[$i]['name'].'</td>
                        <td scope="col">'.$data[$i]['review_title'].'</td>
                        <td scope="col">'.$data[$i]['review_content'].'</td>
                        <td scope="col">'.$data[$i]['timeup'].'</td>

                    </tr>
                ';
                    
                    
                        }
            ?>
        </tbody>
    </table>
</div>
<script>
    document.querySelector('#title').innerHTML = "COMMENT MANAGEMENT";
</script>