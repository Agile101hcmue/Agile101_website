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
    <link rel="stylesheet" href="./bootstrap_css/all.min.css">
    <link rel="stylesheet" href="./bootstrap_css/bootstrap.min.css">
    <script src="./bootstrap_js/all.min.js"></script>
    <script src="./bootstrap_js/bootstrap.min.js"></script>
    <script src="./bootstrap_js/jquery.min.js"></script>
    <link rel="stylesheet" href="./bootstrap_css/index.css">
    <link rel="stylesheet" href="./AlertifyJS/themes/alertify.css">
    <link rel="stylesheet" href="./AlertifyJS/themes/alertify.min.css">
    <script src="./AlertifyJS/alertify.js"></script>
    <script src="./AlertifyJS/alertify.min.js"></script>
    <link rel="stylesheet" href="./font_awesome/font-awesome-4.7.0/css/font-awesome.min.css">
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
                    echo "<div class='col p-4 d-flex flex-column position-static'>";
                    echo "<strong class='d-inline-block mb-2 text-primary'>ID: ".$fetch['id']."</strong>";
                    echo "<h3 class='mb-0'>Tên sản phẩm: ".$fetch['product_name']."</h3>";
                    echo "<div class='mb-1 text-body-secondary'>Trạng thái: Còn hàng</div>";
                    echo "<div class='mb-1 text-body-secondary'>Chi tiết: ".$fetch['description']."</div>";
                    echo "<p class='lead' name='price'>Giá thanh toán: <strong>".$fetch['price']." VND</strong> </p>";
                    // echo "<p class='lead' name='quantity'>".$fetch['quantity']."</p>";
                    $domain_admin = "http://127.0.0.1/e_commerce_admin";
                    echo "<a href='../payment/init_payment.php'><input type='button' class='btn btn-primary mt-4 mb-5' name='GetPayment' value='Thanh toán'></a>";
                    echo "</div>";
                   
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }else{
                echo "No result!!";
            }
        ?>
    </div>
    <div align="center">
        <p class="mb-3 mt-5"><b>Tổng sản phẩm: 2 (20.000 VND)</b></p><br>
        <button class="btn btn-warning"><a href="../payment/init_payment.php">Thanh toán tất cả</a></button>
    </div>

    <footer>
        <?php include("../../footer.php"); ?>
    </footer>
</body>
</html>