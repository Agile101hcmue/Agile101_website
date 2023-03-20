<?php
    //

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
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
    <?php include("./header.php"); ?>
    <!-- body down from here -->
    <!-- vùng 1: xem trong file planning_readme.md -->
    <!-- <div class="mt-5 mb-5" align="center">
        <h1>Chào mừng</h1>
        <span>Cửa hàng Agile101 mang đến nguồn tri thức dành riêng cho bạn</span>
    </div> -->
    <!-- vùng 2: xem trong file planning_readme.md -->
    
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg> -->
        <img src="./assets/slogan1.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Chào mừng đến với Agile101</h1>
            <p>Bạn trả tiền, chúng tôi trao tri thức</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="./assets/slogan2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Câu khẩu hiệu thứ 2.</h1>
            <p>Câu slogan thứ 2.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/slogan3.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Câu khẩu hiệu thứ 3.</h1>
            <p>Câu slogan thứ 3.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
    <!-- vùng 3 -->
    <div class="mt-5 mb-5" align="center">
        <h1>Một câu khẩu hiệu</h1>
        <span>Chúng tôi mang đến cả thế giới sách dành cho bạn</span>
    </div>
        <div class="d-flex align-items-center justify-content-center">
            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Sách thiếu nhi</h2>
                    <p class="lead">Gồm các đầu sách cho trẻ em.</p>
                </div>
                    <button class="btn btn-light"><a href="./components/cart/cart.php" class="text-dark">Truy cập</a></button>
                </div>
                <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Sách giáo khoa</h2>
                    <p class="lead">Gồm các đầu sách phục vụ việc dạy học.</p>
                </div>
                    <div class="bg-transparent shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                        <button class="btn btn-secondary"><a href="./components/cart/cart.php" class="text-light">Truy cập</a></button>
                    </div>
                </div>
            </div>

            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Sách abc</h2>
                    <p class="lead">Gồm các đầu sách về abc xyz.</p>
                </div>
                <div class="bg-tranparent shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <button class="btn btn-secondary"><a href="./components/cart/cart.php" class="text-light">Truy cập</a></button> 
                </div>
                </div>
                <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Sách xyz</h2>
                    <p class="lead">Gồm các đầu sách về xyz abc.</p>
                </div>
                    <button class="btn btn-light"><a href="./components/cart/cart.php" class="text-dark">Truy cập</a></button>
                </div>
            </div>
    </div>
    <!-- thêm phần direct đăng nhập/ đăng kí -->
    <div align="center" class="mt-5">
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2 class="mb-4">Hãy là 1 phần của chúng tôi</h2>
          <img src="./assets/banner1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
          <p class="mt-4">Bạn chưa là thành viên của Agile101 ?.</p>
          <a href="./components/signup.php">
            <button class="btn btn-outline-secondary" type="button">Đăng ký ngay</button>
          </a>
        </div>
      </div>
    </div>
    </div>
    <div>
        <?php
            include("./footer.php");
        ?>
    </div>
</body>
</html>