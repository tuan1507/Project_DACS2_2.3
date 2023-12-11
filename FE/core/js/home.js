searchForm = document.querySelector ('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

window.onscroll = () => {
    searchForm.classList.remove('active');
    if (window.scrollY >80) {
        document.querySelector('.header .header-2').classList.add('active');
    }else {
        document.querySelector('.header .header-2').classList.remove('active');
    }
}
let loginFrom = document.querySelector('.login-form-container');
document.querySelector('#login-btn').onclick = () => {
  loginFrom.classList.toggle('active');
}
document.querySelector('#close-login-btn').onclick = () => {
  loginFrom.classList.remove('active');
}
window.onload = () => {
    if (window.scrollY >80) {
        document.querySelector('.header .header-2').classList.add('active');
    }else {
        document.querySelector('.header .header-2').classList.remove('active');
    }
}
// ----------------------
var swiper = new Swiper(".books-slider", {
    loop:true,
    centeredSlides: true,
    autoplay: {
        delay:9500,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
//   --------
var swiper = new Swiper(".featured-silder", {
    loop:true,
    centeredSlides: true,
    autoplay: {
        delay:9500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      450: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
  ///////////////
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    autoplay: {
      delay: 4000, // Đặt thời gian chờ giữa các lượt chuyển đổi (5 giây trong ví dụ này)
      disableOnInteraction: false, // Không tắt autoplay khi người dùng tương tác với swiper
    },
    loop: true, // Cho phép vòng lặp
    effect: "slide", // Sử dụng hiệu ứng slide
    speed: 800, // Điều chỉnh tốc độ chuyển động
    // grabCursor: true, // Hiển thị con trỏ grab khi di chuột trên swiper
    // centeredSlides: true, // Hiển thị slide hiện tại ở giữa
    // slidesPerView: "auto", // Hiển thị số lượng slide tối ưu cho mỗi viewport width
    // spaceBetween: 20, // Khoảng cách giữa các slide
    // breakpoints: {
    //   768: {
    //     slidesPerView: 2,
    //   },
    //   1024: {
    //     slidesPerView: 3,
    //   },
    // },
  });