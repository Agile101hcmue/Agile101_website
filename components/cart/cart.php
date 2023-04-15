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
    
?>