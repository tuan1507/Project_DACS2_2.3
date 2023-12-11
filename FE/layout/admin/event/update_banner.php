<?php
if (is_array($banner)) {
    extract($banner);
    $hinhpath = "../upload/".$hinhanh_banner;
    if (is_file($hinhpath)) {
        $hinh = "<img src='".$hinhpath."' ";
    }else {
        $hinh = "no photo";
    }
}
?>
<div class="container">
    <div>
        <h2>Cập nhật banner</h2>
    </div>
    <form method="post" action="index.php?act=capnhatbanner" enctype="multipart/form-data">
        <div class="row">
            <div class="col-25">
                <label for="lname">Tên banner:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="tenbanner" value="<?=$ten_banner?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Hình ảnh:</label>
            </div>
            <div class="col-75">
                <input type="file" id="lname" name="hinh" style="" value="Thêm hình ảnh"><?=$hinhanh_banner?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Mô tả:</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="motabanner" style="height:200px"><?=$mota_banner?></textarea>
            </div>
        </div>
        <div class="btn_controler">
            <input type="hidden" name="id" value="<?php if (isset($id_banner)&&($id_banner>0)) echo $id_banner;?>">
            <a href=""><input type="submit" value="Thêm" name="thembanner" class="btn btn_add_product"></a>
            <input type="submit" value="Cập nhật" name="capnhatbanner" class="btn btn_add_product">
        </div>
    </form>
</div>
<!--------------Close Add Category-------------------- -->