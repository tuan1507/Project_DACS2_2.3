<?php
session_start();
include("../../../BE/pdo.php");
include("../../../BE/sanpham.php");
include("../../../BE/danhmucsanpham.php");
include("../../../BE/cart.php");
include("../../../BE/event.php");
include("../../../BE/taikhoan.php");
include("../../../global.php");

$sanpham_mouse = loadall_sanpham_mouse();
$sanpham_tainghe = loadall_sanpham_tainghe();
$sanpham_speak = loadall_sanpham_speak();
$sanpham = loadall_sanpham();

if (!isset($_SESSION ['mycart'])) $_SESSION ['mycart'] = [];

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // ------------------HOME----------------------
        case "home":
            include ("view_main/view/home.php");
            break;
        case "shop":
            include("view_main/view/shop.php");
            break;
        case "sanpham":
            if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                $id_danhmuc = $_GET ['iddm'];
                $dssp = loadall_sanpham_danhmuc($id_danhmuc);
                include("view_main/view/sanpham_danhmuc.php");
            }
            break;
        //--------------- ACCOUNT -----------------
        case "dangky":
            if (isset($_POST['dangky'])&& ($_POST['dangky'])) {
                $user_account=$_POST['user_account'];
                $pass_account=$_POST['pass_account'];
                $email_account=$_POST['email_account'];
                $address_account=$_POST['address_account'];
                $phone_account=$_POST['phone_account'];
                insert_account($user_account,$pass_account,$email_account,$address_account,$phone_account);
                header ("Location: index.php?act=dangnhap");
            }
            include("view_main/login/signin.php");
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap'])&& ($_POST['dangnhap'])) {
                $user_account=$_POST['name_account'];
                $pass_account = $_POST['pass_account'];
                $check_account = check_account ($user_account, $pass_account);
                if (is_array($check_account)) {
                    $_SESSION ['user'] = $check_account;
                    if ($check_account['role'] == '0') {
                        header("Location: index.php?act=home");
                    } else {
                        header("Location: http://localhost/1.PHP/3.Project/7.DACS2/FE/layout/admin/");
                    }
                }
            }
            include("view_main/login/login.php");
            break;
        case "suatk":
            if (isset($_POST['capnhat'])&& ($_POST['capnhat'])) {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $pass_account = $_POST['pass_account'];
                $email_account = $_POST['email_account'];
                $address_account = $_POST['addres_account'];
                $phone_account = $_POST['phone_account'];
                $id_account = $_POST['id'];
                update_account ($first_name,$last_name,$id_account,$pass_account,$email_account,$address_account,$phone_account);
                $_SESSION ['user'] = check_account ($user_account,$pass_account);
                header ('Location: index.php?act=dangnhap');
            }
            include ("view_main/view/account.php");
            break;
        case "logout":
            if (isset($_GET['act']) && $_GET['act'] == 'logout') {
                session_destroy();
                header("Location: index.php?act=home");
                exit();
            }
       // -----------------CART-------------------
       case "cart":
        include ("view_main/view/component/7_addtocart.php");
        break;
    case "addtocart":
        if (isset($_POST['addtocart'])&& ($_POST['addtocart'])) {
            $id_sanpham = $_POST ['id_sanpham'];
            $ten_sanpham = $_POST ['ten_sanpham'];
            $gia_sanpham = $_POST ['gia_sanpham'];
            $hinh_sanpham = $_POST ['hinh_sanpham'];
            $soluong = 1;
            $tongtien = $soluong * $gia_sanpham;
            $sanpham_add = [ $id_sanpham, $ten_sanpham, $gia_sanpham, $hinh_sanpham, $soluong, $tongtien];
            array_push($_SESSION ['mycart'], $sanpham_add);
            header("Location: http://localhost/1.PHP/3.Project/7.DACS2/FE/layout/user/index.php?act=shop");
            exit();
        }
        break;
    case "deletecart":
        if (isset($_GET['idcart'])) {
            unset($_SESSION['mycart'][$_GET['idcart']]);
            $_SESSION['mycart'] = array_values($_SESSION['mycart']);
        } else {
            $_SESSION['mycart'] = [];
        }
        header("Location: index.php?act=cart");
        exit();
    case "bill":
        include ("view_main/view/component/8_bill.php");
        break;
    case "bill_complete":
        if (isset($_POST['dongydathang'])&& ($_POST['dongydathang'])){
            $ten_khachhang = $_POST ['ten_khachhang'];
            $diachi_khachhang = $_POST['diachi_khachhang'];
            $sdt_khachhang = $_POST ['sdt_khachhang'];
            $email_khachhang = $_POST ['email_khachhang'];
            $ngaydathang=date('h:i:sa d/m/y');
            $tongdonhang=tongdonhang();

            $idbill = insert_bill($ten_khachhang,$diachi_khachhang,$sdt_khachhang,$email_khachhang,$ngaydathang,$tongdonhang) ;

            foreach ($_SESSION['mycart'] as $cart){
                insert_cart($_SESSION['user']['id_account'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
            }
        }
        $bill = loadone_bill($idbill);
        include ("view_main/view/component/9_bill_complete.php");
        break;
    }
}else {
    include ("view_main/view/home.php");
}

?>