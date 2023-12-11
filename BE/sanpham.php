<?php
function insert_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$hinhanh,$motadanhmuc,$iddm){
    $sql = "INSERT INTO sanpham (ten_sanpham,soluong_sanpham,giasp,giasp_saukm,hinhanh_sanpham,mota_sanpham,id_danhmuc_sanpham)
                VALUE ('".$tensanpham."','".$soluongsanpham."','".$giasanpham."','".$giasanphamkm."','".$hinhanh."','".$motadanhmuc."','".$iddm."')";
    pdo_execute($sql);
}
function loadall_sanpham() {
    $sql = "SELECT * from sanpham ORDER BY id_danhmuc_sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tainghe() {
    $sql = "SELECT * FROM sanpham WHERE id_danhmuc_sanpham = '14' ORDER BY id_sanpham DESC LIMIT 0, 9";
    $sanphamnew = pdo_query($sql);
    return $sanphamnew;
}
function loadall_sanpham_mouse() {
    $sql = "SELECT * FROM sanpham WHERE id_danhmuc_sanpham = '13' ORDER BY id_sanpham DESC LIMIT 0, 9";
    $sanphamnew = pdo_query($sql);
    return $sanphamnew;
}
function loadall_sanpham_speak() {
    $sql = "SELECT * FROM sanpham WHERE id_danhmuc_sanpham = '18' ORDER BY id_sanpham DESC LIMIT 0, 9";
    $sanphamnew = pdo_query($sql);
    return $sanphamnew;
}
function delete_sanpham($id) {
    $sql = "DELETE FROM sanpham WHERE id_sanpham=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id) {
    $sql = "SELECT * FROM sanpham WHERE id_sanpham=".$id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function   update_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$filename,$motasanpham,$iddanhmuc,$id_sanpham) {
    $sql = "UPDATE sanpham SET ten_sanpham='".$tensanpham."', soluong_sanpham = '".$soluongsanpham."',giasp ='".$giasanpham."',
    giasp_saukm ='".$giasanphamkm."', hinhanh_sanpham ='".$filename."',mota_sanpham='".$motasanpham."',id_danhmuc_sanpham = '".$iddanhmuc."' where id_sanpham=".$id_sanpham;
                pdo_execute($sql);
}
function loadall_sanpham_danhmuc($id_danhmuc) {
    $sql = "SELECT * FROM sanpham WHERE id_danhmuc_sanpham = ".$id_danhmuc;
    $sanpham_dm = pdo_query($sql);
    return $sanpham_dm;
}
?>