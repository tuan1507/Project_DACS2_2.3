<?php
session_start();
include("../../BE/pdo.php");
include("../../BE/sanpham.php");
include("../../BE/danhmucsanpham.php");
include("../../BE/cart.php");
include("../../BE/event.php");
include("../../BE/taikhoan.php");
include("../../global.php");

$sanpham_mouse = loadall_sanpham_mouse();
$sanpham_tainghe = loadall_sanpham_tainghe();
$sanpham_speak = loadall_sanpham_speak();
$sanpham = loadall_sanpham();

if (!isset($_SESSION ['mycart'])) $_SESSION ['mycart'] = [];

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
//---------------------------HOME----------------------
        case "home":
            include ("user/view_main/view/home.php");
            break;
        case "shop":
            include("user/view_main/view/shop.php");
            break;
        case "sanpham":
            if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                $id_danhmuc = $_GET ['iddm'];
                $dssp = loadall_sanpham_danhmuc($id_danhmuc);
                include("user/view_main/view/sanpham_danhmuc.php");
            }
            break;
        case "admin":
            include ("admin/header.php");
            break;
//---------------------------ACCOUNT------------------------------
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
            include("user/view_main/login/signin.php");
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
                        header("Location: index.php?act=admin");
                    }
                }
            }
            include("user/view_main/login/login.php");
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
            include ("user/view_main/view/account.php");
            break;
        case "logout":
            if (isset($_GET['act']) && $_GET['act'] == 'logout') {
                session_destroy();
                header("Location: index.php?act=home");
                exit();
            }
//------------------------------CART-------------------
        case "cart":
            include ("user/view_main/view/cart.php");
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
                header("Location: index.php?act=shop");
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
            include ("user/view_main/view/cart.php");
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
            include ("user/view_main/view/bill.php");
            break;
//------------------------DANH MUC SAN PHAM-------------------
        case 'add_dmsp':
            if(isset($_POST['themdanhmuc'])&&($_POST['themdanhmuc'])) {
                $tendanhmuc=$_POST['tendanhmuc'];
                $motadanhmuc=$_POST['motadanhmuc'];
                insert_danhmuc($tendanhmuc,$motadanhmuc);
            }
            $listdanhmuc = loadall_danhmuc();
            include("admin/danhmucsanpham/add_dmsp.php");
            break;
        case "danhsachdm":
            $listdanhmuc = loadall_danhmuc();
            include("admin/danhmucsanpham/add_dmsp.php");
            break;
        case "xoadm":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc= loadall_danhmuc();
            include("admin/danhmucsanpham/add_dmsp.php");
            break;
        case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $danhmuc = loadone_danhmuc($_GET['id']);
                }
                include("admin/danhmucsanpham/update_dmsp.php");
                break;
        case "capnhatdanhmuc":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $tendanhmuc=$_POST['tendanhmuc'];
                    $motadanhmuc=$_POST['motadanhmuc'];
                    $iddanhmuc=$_POST['id'];
                    update_danhmuc($tendanhmuc,$motadanhmuc,$iddanhmuc);
                }
                $listdanhmuc= loadall_danhmuc();
                include("admin/danhmucsanpham/add_dmsp.php");
                break;
//-------------------------SAN PHAM----------------------------
        case "add_sp":
            if(isset($_POST['themsanpham'])&&($_POST['themsanpham'])) {
                $tensanpham=$_POST['tensanpham'];
                $soluongsanpham=$_POST['soluongsanpham'];
                $giasanpham=$_POST['giasanpham'];
                $giasanphamkm=$_POST['giasanphamkm'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../FE/core/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motasanpham=$_POST['motasanpham'];
                $iddanhmuc=$_POST['iddanhmuc'];

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
                insert_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$filename,$motasanpham,$iddanhmuc);
            }
            $listdanhmuc =loadall_danhmuc();
            $listsanpham =loadall_sanpham();
            include("admin/sanpham/add_sanpham.php");
            break;
        case "xoasp":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
            }
            $listsanpham= loadall_sanpham();
            include("admin/sanpham/add_sanpham.php");
            break;
        case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham();
                $listdanhmuc = loadall_danhmuc();
                include("admin/sanpham/update_sanpham.php");
                break;
        case "capnhatsanpham":
            if(isset($_POST['capnhatsanpham'])&&($_POST['capnhatsanpham'])) {
                $tensanpham=$_POST['tensanpham'];
                $soluongsanpham=$_POST['soluongsanpham'];
                $giasanpham=$_POST['giasanpham'];
                $giasanphamkm=$_POST['giasanphamkm'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../FE/core/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motasanpham=$_POST['motasanpham'];
                $iddanhmuc=$_POST['iddanhmuc'];
                $idsanpham=$_POST['id'];
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
            }
            update_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$filename,$motasanpham,$iddanhmuc,$idsanpham);
            $listsanpham= loadall_sanpham();
            $listdanhmuc= loadall_danhmuc();
            $sanpham = loadone_sanpham($idsanpham);
            include("admin/sanpham/add_sanpham.php");
            break;
//--------------------------------BANNER-------------------------------
        case "add_banner":
            if(isset($_POST['thembanner'])&&($_POST['thembanner'])) {
                $tenbanner=$_POST['tenbanner'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../FE/core/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motabanner=$_POST['motabanner'];
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
                  insert_banner($tenbanner,$filename,$motabanner);
            }
            $listbanner =loadall_banner();
            include("admin/event/add_banner.php");
            break;
        case "xoabanner":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_banner($_GET['id']);
            }
            $listbanner =loadall_banner();
            include("admin/event/add_banner.php");
            break;
        case "suabanner":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $banner = loadone_banner($_GET['id']);
            }
            $listbanner = loadall_banner();
            include("admin/event/update_banner.php");
            break;
        case "capnhatbanner":
            if(isset($_POST['capnhatbanner'])&&($_POST['capnhatbanner'])) {
                    $tenbanner=$_POST['tenbanner'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "../../FE/core/upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $motabanner=$_POST['motabanner'];
                    $idbanner=$_POST['id'];
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      }
                }
                update_banner($tenbanner,$filename,$motabanner,$idbanner);
                $listbanner = loadall_banner();
                $banner = loadone_banner ($idbanner);
                include("admin/event/add_banner.php");
                break;
//--------------------------SU KIEN---------------------
        case "add_sukien":
            if(isset($_POST['them_sukien'])&&($_POST['them_sukien'])) {
                $tensukien=$_POST['ten_sukien'];
                $khuyenmaisukien=$_POST['khuyenmai_sukien'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../FE/core/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motasukien=$_POST['mota_sukien'];
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
                insert_sukien($tensukien,$filename,$motasukien,$khuyenmaisukien);
            }
            $list_sukien =loadall_sukien();
            include("admin/event/add_sukien.php");
            break;
        case "xoasukien":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sukien($_GET['id']);
            }
            $list_sukien =loadall_sukien();
            include("admin/event/add_sukien.php");
            break;
        case "suasukien":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sukien = loadone_sukien($_GET['id']);
            }
            $list_sukien =loadall_sukien();
            include("admin/event/update_sukien.php");
            break;
        case "capnhatsukien":
            if(isset($_POST['capnhatsukien'])&&($_POST['capnhatsukien'])) {
                    $tensukien=$_POST['tensukien'];
                    $khuyenmaisukien=$_POST['khuyenmaisukien'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "../../FE/core/upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $motasukien=$_POST['motasukien'];
                    $idsukien=$_POST['id'];
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      }
                }
                update_sukien($tensukien,$filename,$motasukien,$idsukien,$khuyenmaisukien);
                $list_sukien =loadall_sukien();
                $sukien = loadone_sukien($idsukien);
                include("admin/event/add_sukien.php");
                break;
    }
}else {
    include ("user/view_main/view/home.php");
}

?>