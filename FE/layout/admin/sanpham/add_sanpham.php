<!-- Add Category -->
<div class="container">
    <div>
        <h2>Thêm sản phẩm</h2>
    </div>
    <form method="post" action="index.php?act=add_sp" enctype="multipart/form-data">
        <div class="row">
            <div class="col-25">
                <label for="fname">Danh mục sản phẩm:</label>
            </div>
            <div class="col-75">
                <select name="iddanhmuc" id="">
                    <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id_danhmuc.'">'.$ten_danhmuc.' </option>';
                                }
                                ?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="fname">ID sản phẩm:</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="id_sanpham">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Tên sản phẩm:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="tensanpham">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Số lượng sản phẩm:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="soluongsanpham">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Giá sản phẩm:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="giasanpham">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Giá sản phẩm km:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="giasanphamkm">
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
        <div class="row">
            <div class="col-25">
                <label for="subject">Mô tả:</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="motasanpham" style="height:200px"></textarea>
            </div>
        </div>
        <div class="btn_controler">
            <input type="submit" value="Cập nhật" name="capnhatsanpham" class="btn btn_add_product">
            <a href=""><input type="submit" value="Thêm" name="themsanpham" class="btn btn_add_product"></a>
        </div>
    </form>
</div>
<!--------------Close Add Category-------------------- -->
<!-------------- List Category ----------------->
<table>
    <tr>
        <th>ID Sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Giá khuyến mãi</th>
        <th>Hình ảnh</th>
        <th></th>
    </tr>
    <?php
    foreach ($listsanpham as $sanpham ) {
        extract ($sanpham);
        $xoasp = "index.php?act=xoasp&id=".$id_sanpham;
        $suadm = "index.php?act=suasp&id=".$id_sanpham;
        $hinhpath = "../../../FE/core/upload/".$hinhanh_sanpham;
            if (is_file($hinhpath)) {
                $hinh = "<img src='".$hinhpath."' height = '80'> ";
            }else {
                $hinh = "no photo";
            }
        echo '<tr>
        <td>'.$id_sanpham.'</td>
        <td>'.$ten_sanpham.'</td>
        <td>'.$soluong_sanpham.'</td>
        <td>'.$giasp.'</td>
        <td>'.$giasp_saukm.'</td>
        <td>'.$hinh.'</td>
        <td><a href="'.$suadm.'" class="btn_delete_update"><input type="button"  value="">Sửa</a>
        <a href="'.$xoasp.'" class="btn_delete_update"><input type="button"  value="">Xóa</a> </td>
    </tr>';
    }
    ?>
</table>