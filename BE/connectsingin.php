<?php
session_start();
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];
            $address=$_POST['address'];
        $con = new mysqli('localhost', 'root','','doancoso2');
                if($con){
                    //echo "Kết nối thành công !";
                    $sql = "insert into `account`(first_name,last_name,name,email,phone,password,address)
                            values('$first_name','$last_name','$name','$email','$phone','$password','$address')";
                    $result = mysqli_query($con,$sql);
                        if($result){
                            //echo "Chèn dữ liệu thành công !";
                            header("location: http://localhost/1.PHP/3.Project/7.DACS2/user/view_main/login/login.php");
                        }
                        else{
                            die(mysqli_errno($con));
                        }
                }else{
                    die(mysqli_errno($con));
                }
            echo '<script>alert("Đăng kí thành công");</script>';
        }else{
            echo '<script>alert("Đăng kí thất bại");</script>';
        }
        if ($result) {
            $_SESSION['account'] = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'address' => $address
            );
        
            header("location: http://localhost/1.PHP/3.Project/7.DACS2/user/view_main/login/login.php"); 
        }
?>