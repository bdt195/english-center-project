@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">  
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">Hoạt động Ngoại khóa - Cộng đồng</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
          <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
          <li class="breadcrumb-item active" aria-current="page">Hoạt động Ngoại khóa - Cộng đồng</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <h2 class="page-title text-primary text-uppercase">Hoạt động <span class="font-weight-bold">Ngoại khóa - Cộng đồng</span></h2>
      <p>đang phát triển mô hình giáo dục Tiếng Anh tập trung, hoàn toàn mới tại Măng Đen và Đại Lãnh, Kontum, Khái Hòa kết hợp với rèn luyện thể chất, và kỷ luật cao độ, khai phóng về Tiếng Anh và Tài Chính đầu tiên tại Việt Nam để đạt được hiệu quả cao nhất cho người học. </p>
      <div class="pt-3"></div>
      <div class="layout__masonry">
        <div class="left">
          <div class="card card-news card-news--3">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-1.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">CÙNG LE PLATEAU KHÁM PHÁ CÁC ĐỊA DANH TRÊN THẾ GIỚI TRONG ĐÊM CHUNG KẾT “ALL AROUND THE WORLD</a></h5>
              <p class="card-text">Tối ngày 28/8, Le Plateau đã có cơ hội được đồng hành với tư cách là nhà tài trợ Kim Cương cùng các bạn sinh viên của…</p>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="layout__masonry--item">
            <div class="card card-news card-news-right">
              <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-3.jpg')}}"></a></div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">VÌ SAO CÁC BẬC PHỤ HUYNH TIN TƯỞNG LỰA CHỌN CHƯƠNG TRÌNH TIẾNG ANH DÀNH CHO THCS TẠI LE PLATEAU</a></h5>
                <div class="text-icon-note"><i class="zmdi zmdi-time"></i><span>25/10/2018</span></div>
              </div>
            </div>
          </div>
          <div class="layout__masonry--item">
            <div class="card card-news card-news-left">
              <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-2.jpg')}}"></a></div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">[BACK-TO-SCHOOL] VỮNG VÀNG TIẾNG ANH – CHÀO NĂM HỌC MỚI với Quỹ Học bổng Anh ngữ</a></h5>
                <div class="text-icon-note"><i class="zmdi zmdi-time"></i><span>25/10/2018</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-1.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Trung tâm học tiếng Anh cho người đi làm ở đâu tốt?</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-2.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">KINH NGHIỆM HỌC IELTS CHO NGƯỜI MỚI BẮT ĐẦU</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-3.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">PHƯƠNG PHÁP HỌC TIẾNG ANH GIAO TIẾP HIỆU QUẢ</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-2.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">MÁCH NHỎ BÍ QUYẾT LUYỆN THIIELTS CHO NGƯỜI MỚI BẮT ĐẦU</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-1.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Trung tâm học tiếng Anh cho người đi làm ở đâu tốt?</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-3.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">MÁCH NHỎ BÍ QUYẾT LUYỆN THI IELTS CHO NGƯỜI MỚI BẮT ĐẦU</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-1.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Trung tâm học tiếng Anh cho người đi làm ở đâu tốt?</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="card card-news card-news--2">
            <div class="card-img"><a href="#"><img src="{{asset('frontend/img/news/news-3.jpg')}}"/></a></div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">PHƯƠNG PHÁP HỌC TIẾNG ANH GIAO TIẾP HIỆU QUẢ</a></h5>
              <p class="card-text">Nếu bạn là người đang đi làm, mong muốn cải thiện tiếng Anh để có</p>
              <div class="d-flex justify-content-between"><a class="cart-link text-primary text-uppercase font-weight-bold" href="#">Xem thêm</a><span>22/10/2018</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-3"></div>
      <div class="d-flex justify-content-center"><a class="btn btn-primary btn-loadmore" href="#">Xem thêm<i class="zmdi zmdi-chevron-down"></i></a></div>
      <div class="pt-5"></div>
    </div>
  </div>
</div>
<div class="section__form-get-route bg-grey">
  <!-- include form-get-route -->
  @include('frontend.includes.form-get-route')
</div>
@endsection