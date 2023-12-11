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
                <input type="text" id="lname" name="tendanhmuc" placeholder="Tên danh mục.." value="<?=$ten_danhmuc?>">
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
            <input type="hidden" name="id" value="<?php if (isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc;?>">
            <a href=""><input type="submit" value="Thêm" name="themdanhmuc" class="btn btn_add_product"></a>
            <input type="submit" value="Cập nhật" name="capnhat" class="btn btn_add_product">
            <input type="submit" value="Danh sách" name="danhsachdm" class="btn btn_add_product">
        </div>
    </form>
</div>