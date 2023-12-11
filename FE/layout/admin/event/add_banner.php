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