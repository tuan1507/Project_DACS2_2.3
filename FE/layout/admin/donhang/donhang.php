<!-------------- List Category ----------------->
<table>
    <tr>
        <th>Mã đơn hàng</th>
        <th>Khách hàng</th>
        <th>Số lượng hàng</th>
        <th>Giá trị đơn hàng</th>
        <th>Thao tác</th>
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