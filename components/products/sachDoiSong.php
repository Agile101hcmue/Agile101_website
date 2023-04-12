<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sách dành cho trẻ em</title>
</head>
<body>
    <h2>Data from sach Thieu nhi</h2>
    <table>
        <tr>
            <th>product id</th>
            <th>name</th>
            <th>price</th>
            <th>image</th>
            <th>quantity</th>
        </tr>
        <?php
            include("./connection.php");
            // $sql = "select * from product where category = 'sach-thieu-nhi' ";
            // $all_product = $con->query($sql);
            $query = "select * from `product` where category='sach-doi-song' ";
            // $result = mysqli_query($conn, $query);
            $all_product = mysqli_query($con, $query);
            $fetch_src = FETCH_SRC;
            $domain = DOMAIN;
            $request_to_items = null; // please make a request to view items details here
            $i =1;
            if(mysqli_num_rows($all_product) > 0){
                while($fetch = mysqli_fetch_assoc($all_product)){
                    // echo "<tr><td>".$row["id"]."</td></tr>".$row["name"]."</td></tr>".$row["price"]."</td></tr>".$row["image"]."</td></tr>".$row["quantity"]."</td></tr>"
                    echo "<tr><td>".$row["id"]."</td></tr>".$row["name"]."</td></tr>".$row["price"]."</td></tr>".$row["quantity"]."</td></tr>
                    <td><img src='../../cache/uploads/$fetch[image]' width=150px ></td>";
                }
            }else{
                echo "No result!!";
            }

        ?>
    </table>
</body>
</html>