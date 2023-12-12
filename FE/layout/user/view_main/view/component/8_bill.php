        <form action="index.php?act=bill_complete" method="post">

            <?php
            if (isset($_SESSION ['user'])) {
                $ten_khachhang = $_SESSION ['user']['last_name'];
                $diachi_khachhang = $_SESSION['user']['address_account'];
                $sdt_khachhang = $_SESSION ['user']['phone_account'];
                $email_khachhang = $_SESSION ['user']['email_account'];

            }else {
                $ten_khachhang = "";
                $diachi_khachhang = "";
                $sdt_khachhang = "";
                $email_khachhang = "";
            }
            ?>
            <div class="container">
                <div>
                    <h2>Đặt hàng</h2>
                </div>
                <div>
                    <h3>Thông tin đơn hàng</h3>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Tên khách hàng:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="ten_khachhang" value="<?=$ten_khachhang?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Địa chỉ:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="diachi_khachhang" value="<?=$diachi_khachhang?>">
                    </div>
                </div>
                <div class=" row">
                    <div class="col-25">
                        <label for="subject">Số điện thoại:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="sdt_khachhang" value="<?=$sdt_khachhang?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Email:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="email_khachhang" value="<?=$email_khachhang?>">
                    </div>
                </div>
                <div>
                    <h3>Thông tin giỏ hàng</h3>
                </div>
                <?php
                viewcart_thanhtoan();
                ?>
                <div>
                    <input type="submit" name="dongydathang" id="" value="Đồng ý đặt hàng">
                </div>
            </div>
        </form>