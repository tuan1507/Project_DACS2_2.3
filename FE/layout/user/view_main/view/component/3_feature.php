   <!-- featured section -->
   <section class="featured" id="#featured">
       <h1 class="heading"><span>Headphones</span></h1>
       <?php
                echo '<div class="swiper featured-silder">
                <div class="swiper-wrapper">';
                foreach ($sanpham_tainghe as $sanpham) {
                    extract($sanpham);
                    $img_link = "../../FE/core/upload/";
                    $hinh = $img_link.$hinhanh_sanpham;
                    echo '
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="" class="fas fa-search"></a>
                            <a href="" class="fas fa-heart"></a>
                            <a href="" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="'.$hinh.'" alt="">
                        </div>
                        <div class="content">
                            <h3>'.$ten_sanpham.'</h3>
                            <div class="price">'.$giasp_saukm.' <span>'.$giasp.'</span></div>
                   <a href="" class="btn">Add to cart</a>
               </div>
               </div>';
            }
            echo '</div>';
            echo '<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>'
            ;
       ?>
   </section>
   <!-- featured section mouse -->
   <section class="featured" id="#featured">
       <h1 class="heading"><span>Mouse</span></h1>
       <?php
                echo '<div class="swiper featured-silder">
                <div class="swiper-wrapper">';
                foreach ($sanpham_mouse as $sanpham) {
                    extract($sanpham);
                    $img_link = "../../FE/core/upload/";
                    $hinh = $img_link.$hinhanh_sanpham;
                    echo '
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="" class="fas fa-search"></a>
                            <a href="" class="fas fa-heart"></a>
                            <a href="" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="'.$hinh.'" alt="">
                        </div>
                        <div class="content">
                            <h3>'.$ten_sanpham.'</h3>
                            <div class="price">'.$giasp_saukm.' <span>'.$giasp.'</span></div>
                   <a href="" class="btn">Add to cart</a>
               </div>
               </div>';
            }
            echo '</div>';
            echo '<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>'
            ;
       ?>
   </section>
   <!-- featured section mouse -->
   <section class="featured" id="#featured">
       <h1 class="heading"><span>Speaker</span></h1>
       <?php
                echo '<div class="swiper featured-silder">
                <div class="swiper-wrapper">';
                foreach ($sanpham_speak as $sanpham) {
                    extract($sanpham);
                    $img_link = "../../FE/core/upload/";
                    $hinh = $img_link.$hinhanh_sanpham;
                    echo '
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="" class="fas fa-search"></a>
                            <a href="" class="fas fa-heart"></a>
                            <a href="" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="'.$hinh.'" alt="">
                        </div>
                        <div class="content">
                            <h3>'.$ten_sanpham.'</h3>
                            <div class="price">'.$giasp_saukm.' <span>'.$giasp.'</span></div>
                   <a href="" class="btn">Add to cart</a>
               </div>
               </div>';
            }
            echo '</div>';
            echo '<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>'
            ;
       ?>
   </section>




   <!-- --------login----------- -->
   <div class="login-form-container">
       <div id="close-login-btn" class="fas fa-times"></div>
       <form action="">
           <h3>Đăng Nhập</h3>
           <span>Tên đăng nhập</span>
           <input type="email" name="" class="box" placeholder="Email" id="">
           <span>Mật khẩu</span>
           <input type="password" name="" class="box" placeholder="Mật khẩu" id="">
           <div class="checkbox">
               <input type="checkbox" name="" id="remember-me">
               <label for="remember-me">remember me</label>
           </div>
           <input type="submit" value="Đăng nhập" class="btn">
           <p>Quên mật khẩu ? <a href="#">Click vào đây</a></p>
           <p>Chưa có tài khoản ? <a href="#">Tạo tài khoản mới</a></p>
       </form>
   </div>
   <!-- --------login----------- -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="js/home.js"></script>