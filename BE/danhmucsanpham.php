<?php
function insert_danhmuc($tendanhmuc,$motadanhmuc) {
    $sql = "INSERT INTO danhmucsanpham (ten_danhmuc,mota_danhmuc)
                VALUE ('".$tendanhmuc."','".$motadanhmuc."')";
    pdo_execute($sql);
}
function loadall_danhmuc() {
    $sql = "SELECT * from danhmucsanpham ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function delete_danhmuc($id) {
    $sql = "DELETE FROM danhmucsanpham WHERE id_danhmuc=".$id;
    pdo_execute($sql);
}
function update_danhmuc($ten_danhmuc,$mota_danhmuc,$id_danhmuc) {
    $sql = "UPDATE danhmucsanpham SET ten_danhmuc='".$ten_danhmuc."', mota_danhmuc='".$mota_danhmuc."' where id_danhmuc=".$id_danhmuc;
                pdo_execute($sql);
}
function loadone_danhmuc($id) {
    $sql = "SELECT * FROM danhmucsanpham WHERE id_danhmuc=".$id;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}
?>