<?php
include("../../../BE/pdo.php");
include("../../../BE/danhmucsanpham.php");
include("../../../BE/sanpham.php");
include("../../../BE/event.php");
include("header.php");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_dmsp':
            if(isset($_POST['themdanhmuc'])&&($_POST['themdanhmuc'])) {
                $tendanhmuc=$_POST['tendanhmuc'];
                $motadanhmuc=$_POST['motadanhmuc'];
                insert_danhmuc($tendanhmuc,$motadanhmuc);
            }
            $listdanhmuc = loadall_danhmuc();
            include("danhmucsanpham/add_dmsp.php");
            break;
        case "danhsachdm":
            $listdanhmuc = loadall_danhmuc();
            include("danhmucsanpham/add_dmsp.php");
            break;
        case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                include("danhmucsanpham/add_dmsp.php");
                break;
        case "suadm":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $danhmuc = loadone_danhmuc($_GET['id']);
                    }
                    include("danhmucsanpham/update_dmsp.php");
                    break;
        case "capnhatdanhmuc":
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                        $tendanhmuc=$_POST['tendanhmuc'];
                        $motadanhmuc=$_POST['motadanhmuc'];
                        $iddanhmuc=$_POST['id'];
                        update_danhmuc($tendanhmuc,$motadanhmuc,$iddanhmuc);
                    }
                    $listdanhmuc= loadall_danhmuc();
                    include("danhmucsanpham/add_dmsp.php");
                    break;

                //------------------------ controller san pham ----------------------------
        case "add_sp":
            if(isset($_POST['themsanpham'])&&($_POST['themsanpham'])) {
                $tensanpham=$_POST['tensanpham'];
                $soluongsanpham=$_POST['soluongsanpham'];
                $giasanpham=$_POST['giasanpham'];
                $giasanphamkm=$_POST['giasanphamkm'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../../FE/core/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motasanpham=$_POST['motasanpham'];
                $iddanhmuc=$_POST['iddanhmuc'];

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
                insert_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$filename,$motasanpham,$iddanhmuc);
            }
            $listdanhmuc =loadall_danhmuc();
            $listsanpham =loadall_sanpham();
            include("sanpham/add_sanpham.php");
            break;
        case "xoasp":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
            }
            $listsanpham= loadall_sanpham();
            include("sanpham/add_sanpham.php");
            break;
        case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham();
                $listdanhmuc = loadall_danhmuc();
                include("sanpham/update_sanpham.php");
                break;
        case "capnhatsanpham":
            if(isset($_POST['capnhatsanpham'])&&($_POST['capnhatsanpham'])) {

                $tensanpham=$_POST['tensanpham'];
                $soluongsanpham=$_POST['soluongsanpham'];
                $giasanpham=$_POST['giasanpham'];
                $giasanphamkm=$_POST['giasanphamkm'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../../FE/core/upload/";
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
            include("sanpham/add_sanpham.php");
            break;
            // --------------BANNER-----------------
        case "add_banner":
            if(isset($_POST['thembanner'])&&($_POST['thembanner'])) {
                $tenbanner=$_POST['tenbanner'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../../FE/core/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motabanner=$_POST['motabanner'];
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
                  insert_banner($tenbanner,$filename,$motabanner);
            }
            $listbanner =loadall_banner();
            include("event/add_banner.php");
            break;
        case "xoabanner":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_banner($_GET['id']);
            }
            $listbanner =loadall_banner();
            include("event/add_banner.php");
            break;
        case "suabanner":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $banner = loadone_banner($_GET['id']);
            }
            $listbanner = loadall_banner();
            include("event/update_banner.php");
            break;
        case "capnhatbanner":
            if(isset($_POST['capnhatbanner'])&&($_POST['capnhatbanner'])) {
                    $tenbanner=$_POST['tenbanner'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "../../../FE/core/upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $motabanner=$_POST['motabanner'];
                    $idbanner=$_POST['id'];
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      }
                }
                update_banner($tenbanner,$filename,$motabanner,$idbanner);
                $listbanner = loadall_banner();
                $banner = loadone_banner ($idbanner);
                include("event/add_banner.php");
                break;
            // --------------SU KIEN-----------------
        case "add_sukien":
            if(isset($_POST['them_sukien'])&&($_POST['them_sukien'])) {
                $tensukien=$_POST['ten_sukien'];
                $khuyenmaisukien=$_POST['khuyenmai_sukien'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../../../FE/core/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motasukien=$_POST['mota_sukien'];
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
                insert_sukien($tensukien,$filename,$motasukien,$khuyenmaisukien);
            }
            $list_sukien =loadall_sukien();
            include("event/add_sukien.php");
            break;
        case "xoasukien":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sukien($_GET['id']);
            }
            $list_sukien =loadall_sukien();
            include("event/add_sukien.php");
            break;
        case "suasukien":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sukien = loadone_sukien($_GET['id']);
            }
            $list_sukien =loadall_sukien();
            include("event/update_sukien.php");
            break;
        case "capnhatsukien":
            if(isset($_POST['capnhatsukien'])&&($_POST['capnhatsukien'])) {
                    $tensukien=$_POST['tensukien'];
                    $khuyenmaisukien=$_POST['khuyenmaisukien'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "../../../FE/core/upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $motasukien=$_POST['motasukien'];
                    $idsukien=$_POST['id'];
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      }
                }
                update_sukien($tensukien,$filename,$motasukien,$idsukien,$khuyenmaisukien);
                $list_sukien =loadall_sukien();
                $sukien = loadone_sukien($idsukien);
                include("event/add_sukien.php");
                break;
        // ---------------ACCOUNT-----------
        case "logout":
            if (isset($_GET['act']) && $_GET['act'] == 'logout') {
                session_destroy();
                header("Location: http://localhost/1.PHP/3.Project/7.DACS2/FE/layout/user/");
                exit();
            }
    }
}
?>