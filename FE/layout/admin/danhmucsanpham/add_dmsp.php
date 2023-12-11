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