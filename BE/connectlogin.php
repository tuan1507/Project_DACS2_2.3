<?php
session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $con = new mysqli('localhost', 'root','','doancoso2');
        if($con->connect_error){
            die("Connection failed: ". $con->connect_error);
        }
        $query = "SELECT * FROM account WHERE name='$name' and password='$password'" ;
        $Result = $con->query($query);
        if($Result->num_rows ==1){
            $row = $Result->fetch_assoc();
            $_SESSION['user_name'] = $row['name'];
            header("location: http://localhost/1.PHP/3.Project/7.DACS2/user/index.php?act=home_user");
            exit();
        }else{
            echo"Đăng nhập thất bại!<br>";
            echo"Nếu bạn chưa có tài khoản vui lòng ";
            // header("location: login.php");
            echo'<a href=http://localhost/1.PHP/3.Project/7.DACS2/user/view_main/login/signin.php>đăng ký tại đây</a>';
            exit();
        }
        $con->close();
    }
?>