<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Danh sách sản phẩm">
    <meta name="keywords" content="sách, sách thiếu nhi, truyện tranh, sách giáo dục, sách giáo khoa">
    <meta name="author" content="TrHgTung">
    <title>Danh sách giỏ hàng</title>
    <link rel="stylesheet" href="../../bootstrap_css/all.min.css">
    <link rel="stylesheet" href="../../bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap_css/index.css">
    <script src="../../bootstrap_js/all.min.js"></script>
    <script src="../../bootstrap_js/bootstrap.min.js"></script>
    <script src="../../bootstrap_js/jquery.min.js"></script>
    <script src="../../bootstrap_js/popper.min.js"></script>
</head>

<body>
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="../../index.php" class="nav-link px-2 link-secondary">Trang chủ</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Sản phẩm</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Khuyến mãi</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Liên hệ</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <?php
                // session_start();

                $user_data = check_login($con);
                
                echo "<span><strong>Xin chào, ";
                echo $user_data['user_name'];
                echo "</strong></span>";

                if(!isset($_SESSION['user_id'])){
                    echo '<a href="../login.php"><input type="button" class="btn btn-primary ms-2" value="Đăng nhập"></input></a>';
                }
                else{
                    //echo '<form class="d-flex" action="../logout.php">
                          //  <button class="btn btn-light">Đăng xuất</button>
                        //</form>';
                    echo '<a href="../logout.php"><input type="button" class="btn btn-danger ms-2" value="Đăng xuất"></input></a>';
                }
                // include("../check-login-navbar.php");
            ?>
        </div>
    </header>
  </div>
        
    <main>

    </main>
</body>

</html>