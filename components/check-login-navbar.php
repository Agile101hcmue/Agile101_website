<?php
    include 'connectdb.php';
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
            echo '<form class="d-flex" action="./components/login.php">
                    <button class="btn btn-light">Đăng nhập</button>
                </form>';
        }
        else{
            echo '<form class="d-flex" action="./components/logout.php">
              <button class="btn btn-light">Đăng xuất</button>
            </form>';
        }
    
?>