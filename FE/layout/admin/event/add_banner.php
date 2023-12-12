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
            <h2>Thêm banner</h2>
        </div>
        <form method="post" action="index.php?act=add_banner" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="fname">ID banner:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="id_banner" placeholder="ID banner..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Tên banner:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="tenbanner" placeholder="Tên banner..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Mô tả:</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="motabanner" placeholder="Mô tả.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Hình ảnh:</label>
                </div>
                <div class="col-75">
                    <input type="file" id="lname" name="hinh" value="Thêm hình ảnh">
                </div>
            </div>
            <div class="btn_controler">
                <a href=""><input type="submit" value="Thêm" name="thembanner" class="btn btn_add_product"></a>
                <input type="submit" value="Cập nhật" class="btn btn_add_product">
            </div>
        </form>
    </div>
    <!--------------Close Add Category-------------------- -->
    <!-------------- List Category ----------------->
    <table>
        <tr>
            <th>ID Banner</th>
            <th>Tên Banner</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th></th>
        </tr>
        <?php
    foreach ($listbanner as $banner ) {
        extract ($banner);
        $xoabanner = "index.php?act=xoabanner&id=".$id_banner;
        $suabanner = "index.php?act=suabanner&id=".$id_banner;
        $hinhpath = "../../../FE/core/upload/".$hinhanh_banner;
        if (is_file($hinhpath)) {
            $hinh = "<img src='".$hinhpath."' height = '250'>  ";
        }else {
            $hinh = "no photo";
        }
        echo '<tr>
        <td>'.$id_banner.'</td>
        <td>'.$ten_banner.'</td>
        <td>'.$mota_banner.'</td>
        <td>'.$hinh.'</td>
        <td><a href="'.$suabanner.'" class="btn_delete_update"><input type="button"  value="">Sửa</a>
        <a href="'.$xoabanner.'" class="btn_delete_update"><input type="button"  value="">Xóa</a> </td>
    </tr>';
    }
    ?>
    </table>