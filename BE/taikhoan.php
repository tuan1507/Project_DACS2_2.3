<?php
function insert_account($user_account,$pass_account,$email_account,$address_account,$phone_account) {
    $sql = "INSERT INTO taikhoan(user_account,pass_account,email_account,address_account,phone_account)
    VALUES ('$user_account','$pass_account','$email_account','$address_account','$phone_account')";
    pdo_execute ($sql);
}
function check_account ($user_account,$pass_account) {
    $sql = "SELECT * FROM taikhoan WHERE user_account='".$user_account."' AND pass_account='".$pass_account."'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function  update_account ($first_name,$last_name,$id_account,$pass_account,$email_account,$address_account,$phone_account) {
    $sql = "UPDATE taikhoan set first_name='".$first_name."',last_name='".$last_name."',pass_account='".$pass_account."',email_account='".$email_account."',address_account='".$address_account."',
    phone_account='".$phone_account."' WHERE id_account='".$id_account."' ";
    pdo_execute($sql);
}
?>