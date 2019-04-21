<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page | Edu</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&amp;amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&amp;amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- google font-->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- eng-ct -->
    <!-- Place favicon.ico in the root directory-->
    <link rel="stylesheet" href="{{asset('frontend/css/font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
  </head>
  <body>
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-10 col-md-9">
              <ul class="header__info text-right">
                <li><a href="mailto:cskh@eng-ct.edu.vn" title="mailto:cskh@.edu.vn"><i class="zmdi zmdi-email"></i><span>cskh@eng-ct.edu.vn</span></a></li>
                <li><a class="font-weight-bold" href="tel:+1900 63 65 68 " title="tel:+1900 63 65 68 ">1900 63 65 68 </a><span>(8:30 - 18:00)</span></li>
                <li><a class="font-weight-bold" href="tel:+0917 850 648" title="tel:+0917 850 648">0917 850 648</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-3">
              <div class="header__search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="zmdi zmdi-search"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header__main">
        <div class="container">
          <div class="header__menu">
            <h1 class="header__logo"><a href="index.html"><img src="{{asset('frontend/img/logo.png')}}" alt="" srcset=""></a></h1>
            <ul class="menu__main">
              <li class="menu__item menu__item--has-child menu__current-item"><a href="introduction.html">Giới thiệu</a>
                <ul class="menu__sub">
                  <li class="menu__item menu__current-item"><a href="#">Sứ mệnh tầm nhìn</a></li>
                  <li class="menu__item"><a href="#">Cơ sở vật chất</a></li>
                  <li class="menu__item"><a href="#">Đội ngũ giảng viên</a></li>
                  <li class="menu__item"><a href="#">05 điều khác biệt tại LE PLATEAU</a></li>
                  <li class="menu__item"><a href="#">10 lý do nên học tại LE PLATEAU</a></li>
                </ul>
              </li>
              <li class="menu__item"><a href="course-list.html">khóa học</a></li>
              <li class="menu__item"><a href="admissions.html">Tuyển sinh</a></li>
              <li class="menu__item"><a href="new-activity-list.html">Tin tức - Hoạt động</a></li>
              <li class="menu__item"><a href="student.html">Học viên</a></li>
              <li class="menu__item"><a href="#">Tuyển dụng</a></li>
              <li class="menu__item"><a href="contact.html">liên hệ</a></li>
              <li class="menu__item"><a href="#">Đăng ký thi thử</a></li>
            </ul>
            <div class="navbar-toggler-icon" data-control="aside"><i class="zmdi zmdi-menu"></i></div>
          </div>
        </div>
      </div>
    </header>
    <div class="main__content">
      @yield('content')
    </div>
    <aside class="panel-aside" id="panel-aside">
      <div class="aside-inner">
        <div class="aside-heading"><span>Menu</span><a class="aside-btn" href="#panel-aside" data-control="aside"><i class="zmdi zmdi-close-circle-o"></i></a></div>
        <nav class="aside-sidebar">
          <div class="header__search-form">
            <form action="">
              <input type="text">
              <button type="submit"><i class="zmdi zmdi-search"></i></button>
            </form>
          </div>
          <ul class="nav-sidebar">
            <li class="current-menu-item"><a href="index.html" title="Trang chủ">Giới thiệu</a>
              <ul class="sub-nav-sidebar">
                <li><a href="#" title="">Sứ mệnh tầm nhìn</a></li>
                <li><a href="#" title="">Cơ sở vật chất</a></li>
                <li><a href="#" title="">Đội ngũ giảng viên</a></li>
                <li><a href="#" title="">05 điều khác biệt tại LE PLATEAU</a></li>
                <li><a href="#" title="">10 lý do nên học tại LE PLATEAU</a></li>
              </ul>
            </li>
            <li><a href="course-list.html" title="">KHÓA HỌC</a></li>
            <li><a href="#" title="">TUYỂN SINH </a></li>
            <li><a href="new-activity-list.html" title="">TIN TỨC - HOẠT ĐỘNG</a></li>
            <li><a href="student.html" title="">Học viên</a></li>
            <li><a href="#" title="">Tuyển dụng</a></li>
            <li><a href="contact.html" title="">liên hệ</a></li>
            <li><a href="#" title="">Đăng ký thi thử</a></li>
          </ul>
          <ul class="nav-infor">
            <li><a href="http://"><i class="zmdi zmdi-email"></i><span>cskh@eng-ct.edu.vn</span></a></li>
            <li><a href="tel:1900 63 65 68 "><i class="zmdi zmdi-phone"></i><span>1900 63 65 68 </span>(8:30 - 18:00)</a></li>
            <li><a href="tel:0917 850 648"><i class="zmdi zmdi-phone"></i><span>0917 850 648 </span></a></li>
          </ul>
        </nav>
      </div>
    </aside><a class="aside-cover" href="#" data-control="aside"></a>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer__logo"><a href="/"><img src="{{asset('frontend/img/logo-white.png')}}" alt="Logo White"></a></div>
          </div>
          <div class="col-md-8">
            <div class="row pt-md-3">
              <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                <ul class="list-arrow-down">
                  <li><a href="#">Giới Thiệu Về Le Plateau</a></li>
                  <li><a href="#">Các Khoá Học</a></li>
                  <li><a href="#">Lịch khai giảng</a></li>
                  <li><a href="#">Cảm nhận học viên</a></li>
                  <li><a href="#">Thư viện Video</a></li>
                  <li><a href="#">Thư viện hình ảnh</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                <ul class="list-arrow-down">
                  <li><a href="#">Tin Tức - Hoạt động</a></li>
                  <li><a href="#">Cơ Hội Nghề Nghiệp</a></li>
                  <li><a href="#">Tuyển sinh</a></li>
                  <li><a href="#">Cơ sở vật chất</a></li>
                  <li><a href="#">Cẩm nang khóa học</a></li>
                  <li><a href="#">Đăng ký thi thử</a></li>
                </ul>
              </div>
              <div class="col-sm-4 col-md-6 col-lg-4">
                <h6>Hotline</h6>
                <div class="text-icon-note icon-lg"><i class="zmdi zmdi-phone-in-talk"></i><a href="tel:02473083333"> <span>(024) 7308 3333</span></a></div>
                <h6>Măng Đen</h6>
                <div class="text-icon-note icon-lg"><i class="zmdi zmdi-phone-in-talk"></i><a href="tel:02433881199"><span>(024) 3388 1199</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <hr class="light">
        <div class="text-copyright">
          <p><span>&copy; CÔNG TY TNHH MTV CUNG ỨNG NHÂN LỰC LE PLATEAU </span>- Giấy chứng nhận doanh nghiệp số: 0313548147, Ngày cấp giấy phép: 24/11/2015,</p>
          <p>Trụ Sở Chính Tại Quốc lộ 1A, thôn Đông Nam, xã Đại Lãnh, huyện Vạn Ninh, tỉnh Khánh Hòa, Điện thoại: 094 191 6000</p>
        </div>
      </div>
      <div class="back-to-top" id="back-to-top"><a href="#"><i class="zmdi zmdi-long-arrow-up"></i></a></div>
    </footer>
    <!-- <div class="popup" id="popup-subscribe">
      <div class="popup-content" id="popup-modal"><span class="close-popup"><i class="zmdi zmdi-close"></i></span>
        <div class="grid">
          <div class="popup-wrapper">
            <div class="popup-title">ĐĂNG KÝ NHẬN TIN NGAY HÔM NAY</div>
            <div class="popup-desc">Le Plateau hứa sẽ không gửi những mail với nội dung không quan trọng hoặc spam. Các bạn là người đầu tiên biết được về:</div>
            <ul class="popup-list">
              <li>Các thông tin tuyển sinh, du học, học bổng mới nhất.</li>
              <li>Tin tức mới nhất về các hoạt động, sự kiện, đào tạo giáo dục của nhà trường.</li>
              <li>Các khóa học mới với học phí ưu đãi.</li>
              <li>Thông tin về tuyển dụng việc làm từ các doanh nghiệp đối tác.</li>
            </ul>
            <div class="popup-form">
              <div class="form-desc">Đăng ký:</div>
              <form class="contact-form">
                <div class="input-group">
                  <input class="input-group-field" id="Email" type="email" value="" placeholder="Nhập email của bạn..." name="contact[email]" aria-label="email@example.com">
                  <button id="subscribe" type="submit" name="subscribe" value="GỬI">Đăng ký</button>
                </div>
              </form>
              <div class="popup-social"><a class="popup-social-network" href="https://www.facebook.com/" target="_blank"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a><a class="popup-social-network" href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus" aria-hidden="true"></i></a><a class="popup-social-network" href="https://www.instagram.com/" target="_blank"><i class="zmdi zmdi-instagram" aria-hidden="true"></i></a><a class="popup-social-network" href="https://twitter.com/" target="_blank"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a><a class="popup-social-network" href="https://www.youtube.com/" target="_blank"><i class="zmdi zmdi-youtube" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--script(src='/bower_components/jquery/dist/jquery.js')-->
    <script src="{{asset('frontend/js/vendor.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
  </body>
</html>