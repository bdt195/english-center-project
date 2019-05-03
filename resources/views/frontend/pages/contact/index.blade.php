@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
<div class="main__content">
      <div class="page__breadcrumb">
        <div class="container">
          <h3 class="page__breadcrumb--title">Liên hệ</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
              <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="page__content">
        <div class="container">
          <div class="page__title">
            <h3>Liên hệ</h3>
            <ul>
              <li><a href="#"><i class="zmdi zmdi-folder"></i>Liên hệ</a></li>
            </ul>
          </div>
          <div class="row contact-wrap">
            <div class="col-lg-5">
              <div class="contact-infor">
                <p class="text-uppercase font-weight-bold">CÔNG TY TNHH MTV CUNG ỨNG NHÂN LỰC LE PLATEAU </p>
                <p>Biệt thự trắng - Măng Đen</p>
                <p>Phone 1: <a href="tel:+0999 999 999">0999 999 999</a></p>
                <p>Phone 2: <a href="tel:+0999 999 999">0999 999 999</a></p>
                <p>Phone 3: <a href="tel:+0999 999 999">0999 999 999</a></p>
                <p>E: <a href="mailto:info@leplateau.vn">info@leplateau.vn</a></p>
                <p>Facebook: <a href="https://www.facebook.com/leplateau.education.md/">https://www.facebook.com/leplateau.education.md/</a></p>
              </div>
              <div class="contact-form">
                <h3 class="text-uppercase font-weight-bold text-primary">FORM THÔNG TIN</h3>
                <form action="" method="post"><input type="text" name="" id="input" class="form-control" value="" placeholder="Họ và tên" title="" >
                  <input type="phone" name="" id="input" class="form-control" value="" placeholder="Điện thoại" title="" >
                  <input type="email" name="" id="input" class="form-control" value="" placeholder="Email" title="" >
                  <textarea name="" cols="30" rows="5" placeholder="Nội dung"></textarea>
                </form>
                <button class="contact-form-btn text-uppercase font-weight-bold">Đăng ký ngay</button>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.917959756979!2d105.78877917680438!3d21.03432725792586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4872174067%3A0x9d6ee5065eacbc83!2zROG7i2NoIFbhu41uZywgQ-G6p3UgR2nhuqV5LCBIYW5vaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1541925322799" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
          <div class="pt-5"></div>
        </div>
      </div>
    </div>
</div>
@endsection
