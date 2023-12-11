<?php
if (is_array($sukien)) {
    extract($sukien);
    $hinhpath = "../upload/".$hinhanh_sukien;
    if (is_file($hinhpath)) {
        $hinh = "<img src='".$hinhpath."' ";
    }else {
        $hinh = "no photo";
    }
}
?>
<div class="container">
    <div>
        <h2>Cập nhật sự kiện</h2>
    </div>
    <form method="post" action="index.php?act=capnhatsukien" enctype="multipart/form-data">
        <div class="row">
            <div class="col-25">
                <label for="lname">Tên sự kiện:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="tensukien" value="<?=$ten_sukien?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Khuyến mãi:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="khuyenmaisukien" value="<?=$khuyenmai_sukien?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Hình ảnh:</label>
            </div>
            <div class="col-75">
                <input type="file" id="lname" name="hinh" style="" value="Thêm hình ảnh"><?=$hinhanh_sukien?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Mô tả:</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="motasukien" style="height:200px"><?=$mota_sukien?></textarea>
            </div>
        </div>
        <div class="btn_controler">
            <input type="hidden" name="id" value="<?php if (isset($id_sukien)&&($id_sukien>0)) echo $id_sukien;?>">
            <a href=""><input type="submit" value="Thêm" name="themsukien" class="btn btn_add_product"></a>
            <input type="submit" value="Cập nhật" name="capnhatsukien" class="btn btn_add_product">
        </div>
    </form>
</div>
<!--------------Close Add Category-------------------- -->