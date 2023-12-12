<?php
function viewcart() {
   echo ' <table>
   <tr>
       <th>Hình ảnh</th>
       <th>Tên sản phẩm</th>
       <th>Số lượng</th>
       <th>Giá</th>
       <th>Thành tiền</th>
       <th>Thao tác</th>
   </tr>';
            $tong = 0;
            $img_link = "";
            $i = 0;
            foreach ($_SESSION ['mycart'] as $cart) {
                $ttien = $cart[2];
                $tong += $ttien;
                $hinh = $img_link.$cart[3];
                $xoa_cart = '<a href="index.php?act=deletecart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                echo '<tr>
                <td><img src= "'.$hinh.'" height = "80px"></td>
                <td>'.$cart[1].'</td>
                <td>'.$cart[4].'</td>
                <td>'.$cart[2].'</td>
                <td>'.$cart[5].'</td>
                <td>'.$xoa_cart.'</td>
            </tr>';
            $i +=1 ;
            }
            echo '<tr>
            <td>Tổng giá tiền</td>
            <td>'.$tong.'</td></tr>';
            echo '</table>';

}
function viewcart_thanhtoan() {
    echo ' <table>
    <tr>
        <th>Hình ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
    </tr>';
             $tong = 0;
             $img_link = "";
             $i = 0;
             foreach ($_SESSION ['mycart'] as $cart) {
                 $ttien = $cart[2];
                 $tong += $ttien;
                 $hinh = $img_link.$cart[3];
                 echo '<tr>
                 <td><img src= "'.$hinh.'" height = "80px"></td>
                 <td>'.$cart[1].'</td>
                 <td>'.$cart[4].'</td>
                 <td>'.$cart[2].'</td>
                 <td>'.$cart[5].'</td>
             </tr>';
             $i +=1 ;
             }
             echo '<tr>
             <td>Tổng giá tiền</td>
             <td>'.$tong.'</td></tr>';
             echo '</table>';

}
 function tongdonhang() {
            $tong = 0;
            foreach ($_SESSION ['mycart'] as $cart) {
                 $ttien = $cart[2];
                 $tong += $ttien;
            }
            return $tong;
 }
 function insert_bill($ten_khachhang,$diachi_khachhang,$sdt_khachhang,$email_khachhang,$ngaydathang,$tongdonhang){
    $sql="INSERT INTO bill (bill_name,bill_address,bill_tel,bill_email,bill_date,total)
          values('$ten_khachhang','$diachi_khachhang','$sdt_khachhang','$email_khachhang','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
 }
 function insert_cart($id_account,$id_sanpham,$img,$ten_sanpham,$giasp,$soluong,$thanhtien,$id_bill){
    $sql="INSERT INTO cart(id_account,id_sanpham,img,ten_sanpham,giasp,soluong,thanhtien,id_bill)
          values('$id_account','$id_sanpham','$img','$ten_sanpham','$giasp','$soluong','$thanhtien','$id_bill')";
    return pdo_execute($sql);
 }
 function loadone_bill($id){
    $sql= "SELECT * from bill where id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;
 }
 function load_bill($id_account){
    $sql= "SELECT * from bill ";
    if ($id_account>0) $sql.=" AND id_account=".$id_account;
    $sql.="ORDER BY id DESC";
    pdo_query_one($sql);
 }
?>