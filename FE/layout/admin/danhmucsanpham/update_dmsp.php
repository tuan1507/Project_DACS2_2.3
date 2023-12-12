<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../FE/core/css/home_admin.css">
    <link rel="stylesheet" href="../../FE/core/css/header.css">
    <link rel="stylesheet" href="../../FE/core/css/reponsi.css">
    <link rel="stylesheet" href="../../FE/core/css/login.css">
    <link rel="stylesheet" href="../../FE/core/css/shop.css">
    <link rel="stylesheet" href="../../FE/core/css/addproduct.css">
</head>

<body>
    <!-- header section  -->
    <header class="header">
        <div class="header-1">
            <p>Admin</p>
            <form action="" class="search-form">
                <input type="search" name="" id="search-box" placeholder="Tìm kiếm...">
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
                        <li><a href="" class="taikhoan_main">Xin chào <?=$user_account?></a></li>
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
                <a href="index.php?act=add_dmsp">Danh mục</a>
                <a href="index.php?act=add_sp">Sản phẩm</a>
                <a href="index.php?act=add_banner">Banner</a>
                <a href="index.php?act=add_sukien">Sale off</a>
                <a href="index.php?act=donhang">Đơn hàng</a>
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
    </header>
    <?php
if (is_array($danhmuc)) {
    extract($danhmuc);
}
?>
    <div class="container">
        <div>
            <h2>Cập nhật danh mục sản phẩm</h2>
        </div>
        <form method="post" action="index.php?act=capnhatdanhmuc" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="fname">ID danh mục:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="id_danhmuc" placeholder="ID danh mục..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Tên danh mục:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="tendanhmuc" placeholder="Tên danh mục.."
                        value="<?=$ten_danhmuc?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Mô tả:</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="motadanhmuc" placeholder=" Mô tả.."
                        style="height:200px"> <?=$mota_danhmuc?></textarea>
                </div>
            </div>
            <div class="btn_controler">
                <input type="hidden" name="id"
                    value="<?php if (isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc;?>">
                <a href=""><input type="submit" value="Thêm" name="themdanhmuc" class="btn btn_add_product"></a>
                <input type="submit" value="Cập nhật" name="capnhat" class="btn btn_add_product">
                <input type="submit" value="Danh sách" name="danhsachdm" class="btn btn_add_product">
            </div>
        </form>
    </div>