<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="./" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i><b>&nbsp;Agile101</b>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Trang chủ</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Sản phẩm</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Khuyến mãi</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Liên hệ</a></li>
            <li><a href="./components/cart/cart.php" class="nav-link px-2 link-dark">Giỏ hàng</a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search">
        </form>
        <div class="col-md-3 text-end">
        <?php
            include 'components/connectdb.php';
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
                echo '
                    <a href="./components/login.php"><input type="button" class="btn btn-outline-primary me-2" value="Đăng nhập"></a>
                    <a href="./components/signup.php"><input type="button" class="btn btn-primary" value="Đăng ký"></a>';
            }
            else{
                echo '<strong> Xin chào, ';
                echo $user_data['user_name'];
                // fixed
                echo '</strong>';
                echo '<a href="./components/logout.php"><input type="button" class="btn btn-outline-primary me-2 ms-3" value="Đăng xuất"></a>';
            }
        ?>
            
        </div>
        </header>
    </div>