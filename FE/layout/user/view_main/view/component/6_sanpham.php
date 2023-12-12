<div class="flash-shale">
    <div class="phone-container">
        <div class="mainsmartphone">
            <?php
                foreach ($dssp as $sanpham) {
                    extract($sanpham);
                    $linksp = "index.php?act=sanpham&idsp=".$id_danhmuc;
                    $img_link = "../../FE/core/upload/";
                    $hinh = $img_link.$hinhanh_sanpham;
                    echo '
                    <div class="phone">
                    <div class="img-phone">
                        <img class="img-phone" src="'.$hinh.'">
                    </div>
                    <div class="deal-phone">
                        <i class="fa-solid fa-percent"></i>
                        <p class="share-phone">GIÁ RẺ QUÁ</p>
                    </div>
                    <div class="price-phone">
                        <p class="price-phone-1">'.$ten_sanpham.'</p>
                        <div class="money">
                            <p class="build">'.$giasp.'</p>
                            <p class="discount">-19%</p>
                        </div>
                        <div class="Evaluate">
                            <div class="star">4.7 <i id="star" class="fa-solid fa-star"></i></div>
                            <div class="sold">(756)</div>
                        </div>
                    </div>
                    <a class="build-nows" href="">
                        <div class="build-now">
                            <p class="build-now-1">Mua Ngay</p>
                        </div>
                    </a>
                </div>';
            }
       ?>
        </div>
    </div>
</div>