<?php
    session_start();

    include("connectdb.php");
    include("functiondb.php");


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthyear = $_POST['birthyear'];
        $location = $_POST['location'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password,gender,birthyear,location) values ('$user_id','$user_name','$password','$gender','$birthyear','$location')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else{
            echo "<script>
                    window.alert('Vui lòng nhập các thông tin!')
                </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Đăng ký tài khoản mới</title>
    <link rel="stylesheet" href="../bootstrap_css/login-form.css">
    <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap_css/all.min.css">
    <!-- customize css -->
    <link rel="stylesheet" href="../bootstrap_css/index.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
</head>
<body>
    <div class="container text-center mt-5 ">
        <form action="" method="POST">
            <div class="text-center mb-5 h3 fw-normal">
                Đăng Ký
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

            <div class="d-flex justify-content-center">
                <div class="form-floating mb-5 mt-5 col-md-6">
                    <label for="" >Giới tính:</label>
                    <select name="gender" id="gender" class="mb-5 ">
                        <option value="male">Nam</option>
                        <option value="female">Nữ</option>
                        <option value="unknown">Tôi không muốn cung cấp</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Năm sinh:</label>
                    <input type="number" class="form-control mt-5" id="birthyear" min="1900" max="2011"
                        name="birthyear">
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="form-floating mb-3 mt-5 col-md-6">
                    <label for="">Tỉnh/thành phố:</label>
                    <select name="location" id="location" class="mb-5 ">
                        <option value="ho-chi-minh">TP. Hồ Chí Minh</option>
                        <option value="ha-noi">Hà Nội</option>
                        <option value="can-tho">Cần Thơ</option>
                        <option value="da-nang">Đà Nẵng</option>
                        <option value="hue">Huế</option>
                        <option value="lam-dong">Lâm Đồng</option>
                        <option value="dong-nai">Đồng Nai</option>
                        <option value="binh-thuan">Bình Thuận</option>
                        <option value="ninh-thuan">Ninh Thuận</option>
                        <option value="khanh-hoa">Khánh Hòa</option>
                        <option value="thanh-hoa">Thanh Hóa</option>
                        <option value="nghe-an">Nghệ An</option>
                        <option value="thai-binh">Thái Bình</option>
                        <option value="quang-binh">Quảng Nam</option>
                        <option value="ha-tinh">Hà Tĩnh</option>
                        <option value="long-an">Long An</option>
                        <option value="tay-ninh">Tây Ninh</option>
                        <option value="lao-cai">Lào Cai</option>
                        <option value="lao-cai">Phú Yên</option>
                        <option value="lao-cai">Hậu Giang</option>
                        <option value="lao-cai">Lạng Sơn</option>
                        <option value="others">--- Khác ---</option>
                    </select>
                </div>
            </div>

            <div>
                <input class="btn btn-lg btn-primary mt-3 text-center" type="submit" value="Đăng ký">
            </div>
        </form>
        <div class="mt-5">
            <span>Đã có sẵn tài khoản? <a href="./login.php">Đăng nhập ngay</a></span>
        </div>
        <div>
            <a href="../" class="mt-4">Quay về trang chủ</a>
        </div>
    </div>
</body>
</html> 
