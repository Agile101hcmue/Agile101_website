

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Đăng nhập vào hệ thống</title>
    <!-- <link rel="stylesheet" href="../css/login-form.css"> -->
    <link rel="stylesheet" href="../bootstrap_css/all.min.css">
    <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../bootstrap_css/all.min.css">
    <!-- customize css -->
    <link rel="stylesheet" href="./css/login-form.css">

    <!-- jquery -->
    <script src="../js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <!-- fontawesome -->
    <script src="../js/all.min.js"></script>
</head>
<body>
    <div class="container text-center mt-5 ">
        <form action="" method="POST">
            <div class="text-center mb-5 h3 fw-normal">
                Đăng Nhập
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Tên đăng nhập:</label>
                    <input type="text" class="form-control mt-5" id="user_name"
                        name="user_name">
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Mật khẩu:</label>
                    <input type="password" class="form-control mt-5" id="password"
                        name="password">
                </div>
            </div>

            <div>
                <input class="btn btn-lg btn-primary mt-3 text-center" type="submit" value="Đăng nhập">
            </div>
        </form>
        <div class="mt-5">
            <span>Chưa có tài khoản? <a href="./signup.php">Đăng ký ngay</a></span>
        </div>
        <div>
            <a href="../" class="mt-4">Quay về trang chủ</a>
        </div>
    </div>
</body>
</html> 
