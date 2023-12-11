<?php
function insert_banner($tenbanner,$hinhanh,$motabanner){
    $sql = "INSERT INTO banner (ten_banner,hinhanh_banner,mota_banner)
                VALUE ('".$tenbanner."','".$hinhanh."','".$motabanner."')";
    pdo_execute($sql);
}
function loadall_banner() {
    $sql = "SELECT * from banner ";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
function delete_banner($id) {
    $sql = "DELETE FROM banner WHERE id_banner=".$id;
    pdo_execute($sql);
}
function loadone_banner($id) {
    $sql = "SELECT * FROM banner WHERE id_banner=".$id;
    $banner = pdo_query_one($sql);
    return $banner;
}
function  update_banner($tenbanner,$filename,$mota_banner,$idbanner) {
    $sql = "UPDATE banner SET ten_banner ='".$tenbanner."', hinhanh_banner ='".$filename."',mota_banner = '".$mota_banner."' where id_banner=".$idbanner;
    pdo_execute($sql);
}
// ---------------------SALE OFF----------------
function insert_sukien($tensukien,$hinhanh,$motasukien,$khuyenmaisukien){
    $sql = "INSERT INTO saleofff (ten_sukien,hinhanh_sukien,mota_sukien,khuyenmai_sukien)
                VALUE ('".$tensukien."','".$hinhanh."','".$motasukien."', '".$khuyenmaisukien."')";
    pdo_execute($sql);
}
function loadall_sukien() {
    $sql = "SELECT * from saleofff ";
    $list_sukien = pdo_query($sql);
    return $list_sukien;
}
function delete_sukien($id) {
    $sql = "DELETE FROM saleofff WHERE id_sukien=".$id;
    pdo_execute($sql);
}
function loadone_sukien($id) {
    $sql = "SELECT * FROM saleofff WHERE id_sukien=".$id;
    $sukien = pdo_query_one($sql);
    return $sukien;
}
function  update_sukien($tensukien,$filename,$mota_sukien,$idsukien,$khuyenmaisukien) {
    $sql = "UPDATE saleofff SET ten_sukien ='".$tensukien."', hinhanh_sukien ='".$filename."',khuyenmai_sukien ='".$khuyenmaisukien."',mota_sukien = '".$mota_sukien."' where id_sukien=".$idsukien;
    pdo_execute($sql);
}
?>