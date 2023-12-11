<!-- Add Category -->
<div class="container">
    <div>
        <h2>Thêm sự kiện</h2>
    </div>
    <form method="post" action="index.php?act=add_sukien" enctype="multipart/form-data">
        <div class="row">
            <div class="col-25">
                <label for="lname">Tên sự kiện:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="ten_sukien" placeholder="Tên sự kiện..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Khuyễn mãi:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="khuyenmai_sukien" placeholder="Tên sự kiện..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Mô tả:</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="mota_sukien" placeholder="Mô tả.." style="height:200px"></textarea>
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
            <a href=""><input type="submit" value="Thêm" name="them_sukien" class="btn btn_add_product"></a>
            <input type="submit" value="Cập nhật" class="btn btn_add_product">
        </div>
    </form>
</div>
<!--------------Close Add Category-------------------- -->
<!-------------- List Category ----------------->
<table>
    <tr>
        <th>ID sự kiện</th>
        <th>Tên sự kiện</th>
        <th>Khuyến mãi</th>
        <th>Mô tả</th>
        <th>Hình ảnh</th>
        <th></th>
    </tr>
    <?php
    foreach ($list_sukien as $sukien ) {
        extract ($sukien);
        $xoasukien = "index.php?act=xoasukien&id=".$id_sukien;
        $suasukien = "index.php?act=suasukien&id=".$id_sukien;
        $hinhpath = "../../../FE/core/upload/".$hinhanh_sukien;
        if (is_file($hinhpath)) {
            $hinh = "<img src='".$hinhpath."' height = '250'>  ";
        }else {
            $hinh = "no photo";
        }
        echo '<tr>
        <td>'.$id_sukien.'</td>
        <td>'.$ten_sukien.'</td>
        <td>'.$khuyenmai_sukien.'</td>
        <td>'.$mota_sukien.'</td>
        <td>'.$hinh.'</td>
        <td><a href="'. $suasukien .'" class="btn_delete_update"><input type="button"  value="">Sửa</a>
        <a href="'. $xoasukien.'" class="btn_delete_update"><input type="button"  value="">Xóa</a> </td>
    </tr>';
    }
    ?>
</table>