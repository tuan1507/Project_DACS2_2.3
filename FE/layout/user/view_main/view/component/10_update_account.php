        <div class="container">
            <div>
                <h2>Cập nhật tài khoản</h2>
            </div>
            <form action="index.php?act=suatk" method="post">
                <?php
                    if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Họ:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="first_name" value="<?=$first_name?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Tên:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="last_name" value="<?=$last_name?>">
                    </div>
                </div>
                <div class=" row">
                    <div class="col-25">
                        <label for="subject">Tên đăng nhập:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="user_account" value="<?=$user_account?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Mật khẩu</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="pass_account" value="<?=$pass_account?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Email:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="email_account" value="<?=$email_account?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Số điện thoại:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="phone_account" value="<?=$phone_account?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Địa chỉ:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="addres_account" value="<?=$address_account?>">
                    </div>
                </div>
                <div class="btn_controler">
                    <input type="hidden" name="id" value="<?=$id_account?>">
                    <input type="reset" value="Nhập lại" class="btn">
                    <input type="submit" value="Cập nhật" name="capnhat" class="btn btn_add_product">
                </div>
            </form>
        </div>