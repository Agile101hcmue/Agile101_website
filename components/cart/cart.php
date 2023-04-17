<?php
    include ('../connectdb.php');
    function check_login($con){ // this func will check user's session, if logged in ? show login btn : no login btn
        if( isset($_SESSION['user_id']) ){
                $id = $_SESSION['user_id'];
                $query = "select * from users where user_id = '$id' limit 1";      
                $result = mysqli_query($con,$query);
    
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    return $user_data;
                }
            }
        }

        session_start();

        $user_data = check_login($con);

        if(!isset($_SESSION['user_id'])){
            // header('Refresh: 3; Location: ../login.php');
            echo "
                        <script>
                            let count = 3;
                                if (count > 0) {
                                    setTimeout(1000);
                                    count--;
                                    document.write(`<h2>
                                                    Bạn chưa đăng nhập, vì thế bạn không có quyền truy cập. Tự động chuyển trang sau
                                                </h2>`)
                                    document.write(count)
                                }                             
                            setTimeout(function () {    
                                window.location.href = '../login.php'; 
                            },2000);
                        </script>";
            // die;
        }
        else{
            // echo '<span>
            //         Tuyệt vời, bạn đã đăng nhập thành công
            //     </span>';
            // include html link page, not rendering
            include("main.php"); // display main.php
        }

        // if($_SERVER["REQUEST_METHOD"] == "POST"){
        //     if(isset($_POST['AddToCart'])){
        //         if(isset($_SESSION['cart'])){
        //             //
        //         }else{
        //             echo $_SESSION['cart'][0] = array('Name'=>$_POST['productname'],'Price'=>$_POST['price'], 'Quantity'=>$_POST['quantity']);
        //         }
        //     }
        // }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align='center'>
        <strong>Đây là giỏ hàng của 

        <?php echo $user_data['user_name']; ?></strong>
    </div>
    <div>
        <?php
            // session_start();
            // define("FETCH_SRC","http://127.0.0.1/Agile101_admin/cache/uploads/");
            define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT']."/Agile101_admin/cache/uploads/"); // you have to change $_SERVER['DOCUMENT_ROOT'] to database domain before deploying
            // define("FETCH_SRC",$_SERVER['DOCUMENT_ROOT']."/e_commerce_admin/cache/uploads/");
            define("FETCH_SRC","http://127.0.0.1/Agile101_admin/cache/uploads/"); // you have to change the domain to the new domain that you will deploy into it.
            define("DOMAIN", "http://127.0.0.1/Agile101_admin/");

            include("../connectdb.php");
            // include("../functiondb.php");
            error_reporting(E_ERROR | E_PARSE);

            $query = "select distinct * from `cart` where user_id='1' order by id DESC ";
            // $result = mysqli_query($conn, $query);
            $all_product = mysqli_query($con, $query);
            $fetch_src = FETCH_SRC;
            // $domain = DOMAIN;
            $request_to_items = null; // please make a request to view items details here
            $i =1;
            if(mysqli_num_rows($all_product) > 0){
                while($fetch = mysqli_fetch_assoc($all_product)){
                    echo "<div align='center'>";
                    echo "<div class=' w-100 my-md-3 ps-md-3'>";
                    echo "<div class='text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden'>";
                    echo "<div class='my-3 py-3'>";
                    // echo "<tr><td>".$row["id"]."</td></tr>".$row["name"]."</td></tr>".$row["price"]."</td></tr>".$row["image"]."</td></tr>".$row["quantity"]."</td></tr>"
                    echo "<h2 class='display-5' name='productname'>".$fetch['product_name'] ."</h2>";
                    // echo "<p class='lead '>".$user_data['user_name']."</p>";
                    echo "<p class='lead' name='price'>".$fetch['price']."</p>";
                    // echo "<p class='lead' name='quantity'>".$fetch['quantity']."</p>";
                    $domain_admin = "http://127.0.0.1/e_commerce_admin";
                    // echo $domain_admin."/cache/uploads/".$fetch['image'];
                    // echo 
                    // echo "<img src=".$domain_admin."/cache/uploads/".$fetch['image']." width=40% height=50% ><br>";
                    echo "</div>";
                    echo "<form method='POST' enctype='multipart/form-data'>";
                    echo "<div>";
                    echo "<a href='../payment/payment.php'><input type='button' class='btn btn-primary mt-4 mb-5' name='GetPayment' value='Thanh toán'></a>";
                    echo "</div>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }else{
                echo "No result!!";
            }
        ?>
    </div>
</body>
</html>