<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="../../FE/core/css/signin.css">
</head>

<body>
    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="index.php?act=dangky" method="post">
            <h3>Đăng Ký</h3>
            <span>Tên đăng nhập</span>
            <input type="text" name="user_account" class="box" placeholder="Tên đăng nhập" id="" require>
            <span>Mật khẩu</span>
            <input type="password" name="pass_account" class="box" placeholder="Mật khẩu" id="">
            <span>Email</span>
            <input type="text" name="email_account" class="box" placeholder="Email" id="">
            <span>Địa chỉ</span>
            <input type="text" name="address_account" class="box" placeholder="Địa chỉ" id="">
            <span>Số điện thoại</span>
            <input type="text" name="phone_account" class="box" placeholder="SĐT" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">
                    <p>Tôi đã đọc và đồng ý<a href="#"> Chính sách điều khoản</a></p>
                </label>
            </div>
            <input type="submit" value="Đăng Ký" class="btn" name="dangky">
            <input type="reset" value="Nhập lại" class="btn">
            <p>Bạn đã có tài khoản ? <a href="index.php?act=dangnhap">đăng nhập</a></p>
        </form>
    </div>
</body>

</html>