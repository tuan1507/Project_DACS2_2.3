<?php
if (is_array($sanpham)) {
    extract($sanpham);
    $hinhpath = "../upload/".$hinhanh_sanpham;
    if (is_file($hinhpath)) {
        $hinh = "<img src='".$hinhpath."' ";
    }else {
        $hinh = "no photo";
    }
}
?>
<div class="container">
    <div>
        <h2>Cập nhật sản phẩm</h2>
    </div>
    <form method="post" action="index.php?act=capnhatsanpham" enctype="multipart/form-data" ư>
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
                <input type="text" id="lname" name="tensanpham" value="<?=$ten_sanpham?>">
            </div>
        </div>
        <div class=" row">
            <div class="col-25">
                <label for="subject">Số lượng sản phẩm:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="soluongsanpham" value="<?=$soluong_sanpham?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Giá sản phẩm:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="giasanpham" value="<?=$giasp?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Giá sản phẩm km:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="giasanphamkm" value="<?=$giasp_saukm?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Hình ảnh:</label>
            </div>
            <div class="col-75">
                <input type="file" id="lname" name="hinh" style="" value="Thêm hình ảnh"><?=$hinh?>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Mô tả:</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="motasanpham" style="height:200px"><?=$mota_sanpham?></textarea>
            </div>
        </div>
        <div class="btn_controler">
            <input type="hidden" name="id" value="<?php if (isset($id_sanpham)&&($id_sanpham>0)) echo $id_sanpham;?>">
            <a href=""><input type="submit" value="Thêm" name="themsanpham" class="btn btn_add_product"></a>
            <input type="submit" value="Cập nhật" name="capnhatsanpham" class="btn btn_add_product">
        </div>
    </form>
</div>
<!--------------Close Add Category-------------------- -->