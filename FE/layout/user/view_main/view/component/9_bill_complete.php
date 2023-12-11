<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../../FE/core/css/home.css">
    <link rel="stylesheet" href="../../../FE/core/css/header.css">
    <link rel="stylesheet" href="../../../FE/core/css/reponsi.css">
    <link rel="stylesheet" href="../../../FE/core/css/login.css">
    <link rel="stylesheet" href="../../../FE/core/css/shop.css">
    <link rel="stylesheet" href="../../../FE/core/css/addproduct.css">
</head>

<body>
    <!-- header section  -->
    <header class="header">
        <div class="header-1">
            <a href="" class="logo"><i class="fas fa-store"></i></a>
            <form action="" class="search-form">
                <input type="search" name="" id="search-box" placeholder="Search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <li><a href="#" class="fas fa-shopping-cart"></a></li>
                <li><a href="index.php?act=dangnhap" class="fas fa-user" id="user"></a></li>
                <li>
                    <div id="login-btn" class="fas fa-heart"></div>
                </li>
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <li><a href="index.php?act=home">Home</a></li>
                <li><a href="index.php?act=shop">Shop</a>
                    <ul class="main_menu">
                        <?php
                        $listdanhmuc = loadall_danhmuc();
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $linkdm = "index.php?act=sanpham&iddm=".$id_danhmuc;
                            echo '<li><a href="'.$linkdm.'">'.$ten_danhmuc.'</a></li>';
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="#home">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </nav>
        </div>
        <!-- bottom navbar -->
        <nav class="bottom-navbar">
            <a href="#home" class="fas fa-home"></a>
            <a href="#home" class="fas fa-list"></a>
            <a href="#home" class="fas fa-tags"></a>
            <a href="#home" class="fas fa-comments"></a>
            <a href="#contact" class="fas fa-blogs"></a>
        </nav>
        <!-- -------------------------------- -->
        <?php
        if (isset($_SESSION ['user'])) {
            $ten_khachhang = $_SESSION ['user']['last_name'];
             $diachi_khachhang = $_SESSION ['user']['address_account'];
            $sdt_khachhang = $_SESSION ['user']['phone_account'];
            $email_khachhang = $_SESSION ['user']['email_account'];

        }else {
            $ten_khachhang = "";
            $diachi_khachhang = "";
            $sdt_khachhang = "";
            $email_khachhang = "";
        }
        ?>
        <form action="index.php?act=bill_complete" method="post">

            <div class="container">
                <div>
                    <h3>Cảm ơn quý khách đã đặt hàng</h3>
                </div>
                <?php
            if(isset($bill) && (is_array($bill))) {
                extract($bill);
            }

            ?>
                <div class="row">
                    <div>THÔNG TIN ĐƠN HÀNG</div>
                    <div class="col-25">
                        <div>
                            <li>Mã đơn hàng: <?=$bill['id']?></li>
                            <li>Ngày đặt hàng: <?=$bill['bill_date']?></li>
                            <li>Tổng đơn hàng: <?=$bill['total']?></li>
                        </div>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="email_khachhang">
                    </div>
                </div>

                <div>
                    <h3>Thông tin giỏ hàng</h3>
                </div>
                <?php
            viewcart_thanhtoan();
            ?>
        </form>