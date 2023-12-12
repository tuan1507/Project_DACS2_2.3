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
    <!-- Add Category -->
    <div class="container">
        <div>
            <h2>Thêm danh mục sản phẩm</h2>
        </div>
        <form method="post" action="index.php?act=add_dmsp">
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
                    <input type="text" id="lname" name="tendanhmuc" placeholder="Tên danh mục..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Mô tả:</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="motadanhmuc" placeholder="Mô tả.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="btn_controler">
                <a href=""><input type="submit" value="Thêm" name="themdanhmuc" class="btn btn_add_product"></a>
                <input type="submit" value="Cập nhật" class="btn btn_add_product">
            </div>
        </form>
    </div>
    <!--------------Close Add Category-------------------- -->
    <!-------------- List Category ----------------->
    <table>
        <tr>
            <th>ID Danh Mục</th>
            <th>Tên Danh Mục</th>
            <th>Mô tả</th>
            <th></th>
        </tr>
        <?php
    foreach ($listdanhmuc as $danhmuc ) {
        extract ($danhmuc);
        $xoadm = "index.php?act=xoadm&id=".$id_danhmuc;
        $suadm = "index.php?act=suadm&id=".$id_danhmuc;
        echo '<tr>
        <td>'.$id_danhmuc.'</td>
        <td>'.$ten_danhmuc.'</td>
        <td>'.$mota_danhmuc.'</td>
        <td><a href="'.$suadm.'" class="btn_delete_update"><input type="button"  value="">Sửa</a>
        <a href="'.$xoadm.'" class="btn_delete_update"><input type="button"  value="">Xóa</a> </td>
    </tr>';
    }
    ?>
    </table>