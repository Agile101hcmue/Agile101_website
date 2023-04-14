<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="./" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i><b>&nbsp;Agile101</b>
        </a>
<?php
    // session_start();
    $domain = "http://127.0.0.1/Agile101_website";
?>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?php echo $domain; ?>/index.php" class="nav-link px-2 link-secondary">Trang chủ</a></li>
            <li><a href="<?php echo $domain; ?>/index.php" class="nav-link px-2 link-light">Sản phẩm</a></li>
            <li><a href="#" class="nav-link px-2 link-light">Khuyến mãi</a></li>
            <li><a href="#" class="nav-link px-2 link-light">Liên hệ</a></li>
            <li><a href="<?php echo $domain; ?>/components/cart/cart.php" class="nav-link px-2 link-light">Giỏ hàng</a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search">
        </form>
        <div class="col-md-3 text-end">
        <?php
            // include '../connectdb.php';
            // session_start();
            include('./connection.php');
            // session_start();
            // function check_login($con){ // this func will check user's session, if logged in ? show login btn : no login btn
            //     if( isset($_SESSION['user_id']) ){
            //         $id = $_SESSION['user_id'];
            //         $query = "select * from users where user_id = '$id' limit 1";      
            //         $result = mysqli_query($con,$query);
    
            //         if($result && mysqli_num_rows($result) > 0){
            //             $user_data = mysqli_fetch_assoc($result);
            //             return $user_data;
            //         }
            //     }
            // }

            // session_start();

            $user_data = check_login($con);
            

            if(!isset($_SESSION['user_id'])){
                echo '
                    <a href="'.$domain.'/components/login.php"><input type="button" class="btn btn-outline-primary me-2" value="Đăng nhập"></a>
                    <a href="'.$domain.'/components/signup.php"><input type="button" class="btn btn-primary" value="Đăng ký"></a>';
            }
            else{
                echo '<strong> Xin chào, ';
                echo $user_data['user_name'];
                echo '</strong>';
                echo '<a href="'.$domain.'/components/logout.php"><input type="button" class="btn btn-outline-primary me-2 ms-3" value="Đăng xuất"></a>';
            }
        ?>
            
        </div>
        </header>
    </div>