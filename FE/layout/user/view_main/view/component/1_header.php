<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../FE/core/css/home.css">
    <link rel="stylesheet" href="../../FE/core/css/header.css">
    <link rel="stylesheet" href="../../FE/core/css/reponsi.css">
    <link rel="stylesheet" href="../../FE/core/css/login.css">
    <link rel="stylesheet" href="../../FE/core/css/shop.css">
    <link rel="stylesheet" href="../../FE/core/css/addproduct.css">
</head>

<body>
    <header class="header">
        <div class="header-1">
            <a href="" class="logo"><i class="fas fa-store"></i></a>
            <form action="" class="search-form">
                <input type="search" name="" id="search-box" placeholder="Search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <li><a href="index.php?act=cart" class="fas fa-shopping-cart"></a></li>
                <li><a href="index.php?act=dangnhap" class="fas fa-user" id="user"></a>
                    <ul class="taikhoan">
                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                            $user_account = isset($user_account) ? $user_account : '';
                        ?>
                        <li><a href="index.php?act=logout">Thoát</a></li>
                        <li><a href="index.php?act=suatk">Thay đổi thông tin</a></li>
                        <li><a href="" class="taikhoan_main">Xin chào <?=$user_account?></a></li>
                        <?php
                            }else {
                        ?>
                        <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                        <li><a href="index.php?act=dangky">Đăng ký</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
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