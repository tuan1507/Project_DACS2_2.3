 <!-- home section  -->
 <div class="swiper mySwiper">
     <div class="swiper-wrapper">
         <?php
        $listbanner = loadall_banner();
        foreach ($listbanner as $banner) {
            extract ($banner);
            $img_link = "../../FE/core/upload/";
            $hinh = $img_link.$hinhanh_banner;
            echo '<div class="swiper-slide poster"><img src="'. $hinh.'" alt=""></div>';
        }
        ?>
     </div>
     <div class="swiper-pagination"></div>
 </div>
 <!-- deal section -->
 <section class="deal">
     <div class="content">
         <?php
        $list_sukien = loadall_sukien();
        foreach ($list_sukien as $sukien) {
            extract ($sukien);
            echo '<h3>'.$ten_sukien.'</h3>';
            echo '  <h1>'.$khuyenmai_sukien.'</h1>';
            echo '<p>'.$mota_sukien.'</p>';
            echo '<a href="" class="btn">Shop now</a>';
            $img_link = "../../FE/core/upload/";
            $hinh = $img_link.$hinhanh_sukien;
        }
        ?>
     </div>
     <?php
        echo '<div class="image">
                <img src="'.$hinh.'" alt="">
            </div>';
        ?>

 </section>
 </header>