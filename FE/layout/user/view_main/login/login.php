<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../FE/core/css/signin.css">
</head>

<body>
    <div class="login-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="index.php?act=dangnhap" method="post">
            <h3>Đăng Nhập</h3>
            <span>Tên đăng nhập</span>
            <input type="text" name="name_account" class="box" placeholder="Tên đăng nhập" id="" require>
            <span>Mật khẩu</span>
            <input type="password" name="pass_account" class="box" placeholder="Mật khẩu" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <input type="submit" value="Đăng nhập" class="btn" name="dangnhap">
            <p>Quên mật khẩu ? <a href="#">Click vào đây</a></p>
            <p>Chưa có tài khoản ? <a href="index.php?act=dangky">Tạo tài khoản mới</a></p>
        </form>

    </div>
</body>

</html>