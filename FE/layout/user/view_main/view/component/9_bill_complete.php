        <?php
        if (isset($_SESSION ['user'])) {
            $ten_khachhang = $_SESSION ['user']['last_name'];
             $diachi_khachhang = $_SESSION ['user']['address_account'];
            $sdt_khachhang = $_SESSION ['user']['phone_account'];
            $email_khachhang = $_SESSION ['user']['email_account'];

        }else {
            $ten_khachhang = "";
            $diachi_khachhang = "";
            $sdt_khachhang = "";
            $email_khachhang = "";
        }
        ?>
        <form action="index.php?act=bill_complete" method="post">

            <div class="container">
                <div>
                    <h3>Cảm ơn quý khách đã đặt hàng</h3>
                </div>
                <?php
            if(isset($bill) && (is_array($bill))) {
                extract($bill);
            }

            ?>
                <div class="row">
                    <div>THÔNG TIN ĐƠN HÀNG</div>
                    <div class="col-25">
                        <div>
                            <li>Mã đơn hàng: <?=$bill['id']?></li>
                            <li>Ngày đặt hàng: <?=$bill['bill_date']?></li>
                            <li>Tổng đơn hàng: <?=$bill['total']?></li>
                        </div>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="email_khachhang">
                    </div>
                </div>

                <div>
                    <h3>Thông tin giỏ hàng</h3>
                </div>
                <?php
            viewcart_thanhtoan();
            ?>
        </form>