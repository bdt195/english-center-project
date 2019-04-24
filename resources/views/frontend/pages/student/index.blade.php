@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">Cảm nhận học viên</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cảm nhận học viên</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="page__title">
            <h3>Cảm nhận học viên</h3>
            <ul>
              <li><a href="#"><i class="zmdi zmdi-folder"></i>Cảm nhận học viên</a></li>
            </ul>
          </div>
          <div class="student__list">
            <div class="student__list-item">
              <div class="student__list--img"><a href="#"><img src="{{asset('frontend/img/news/news-1.jpg')}}" alt="" srcset=""/></a></div>
              <div class="student__list--content">
                <h3 class="text-primary font-weight-bold">Nguyễn Hạnh Hà My</h3><a class="text-primary student__list--title" href="#">Em rất thích môi trường học thế này</a>
                <p>Giáo trình thực tế, thường xuyên có các bài tập tình huống, làm theo nhóm để các thành viên trong lớp trao đổi ý kiến và hỗ trợ nhau. Giảng viên có kiến thức thực tế, chuyên môn cao và chia sẻ cho học viên... </p><a class="btn" href="#">Xem thêm</a>
              </div>
            </div>
            <div class="student__list-item">
              <div class="student__list--img"><a href="#"><img src="{{asset('frontend/img/news/news-2.jpg')}}" alt="" srcset=""/></a></div>
              <div class="student__list--content">
                <h3 class="text-primary font-weight-bold">Hà Lê Việt Dũng</h3><a class="text-primary student__list--title" href="#">Thoát khỏi sự rụt rè trong giao tiếp bằng tiếng Anh</a>
                <p>Giáo trình thực tế, thường xuyên có các bài tập tình huống, làm theo nhóm để các thành viên trong lớp trao đổi ý kiến và hỗ trợ nhau. Giảng viên có kiến thức thực tế, chuyên môn cao và chia sẻ cho học viên... </p><a class="btn" href="#">Xem thêm</a>
              </div>
            </div>
            <div class="student__list-item">
              <div class="student__list--img"><a href="#"><img src="{{asset('frontend/img/news/news-3.jpg')}}" alt="" srcset=""/></a></div>
              <div class="student__list--content">
                <h3 class="text-primary font-weight-bold">Nguyễn Hạnh Hà My</h3><a class="text-primary student__list--title" href="#">Em rất thích môi trường học thế này</a>
                <p>Giáo trình thực tế, thường xuyên có các bài tập tình huống, làm theo nhóm để các thành viên trong lớp trao đổi ý kiến và hỗ trợ nhau. Giảng viên có kiến thức thực tế, chuyên môn cao và chia sẻ cho học viên... </p><a class="btn" href="#">Xem thêm</a>
              </div>
            </div>
            <div class="student__list-item">
              <div class="student__list--img"><a href="#"><img src="{{asset('frontend/img/news/news-2.jpg')}}" alt="" srcset=""/></a></div>
              <div class="student__list--content">
                <h3 class="text-primary font-weight-bold">Hà Lê Việt Dũng</h3><a class="text-primary student__list--title" href="#">Thoát khỏi sự rụt rè trong giao tiếp bằng tiếng Anh</a>
                <p>Giáo trình thực tế, thường xuyên có các bài tập tình huống, làm theo nhóm để các thành viên trong lớp trao đổi ý kiến và hỗ trợ nhau. Giảng viên có kiến thức thực tế, chuyên môn cao và chia sẻ cho học viên... </p><a class="btn" href="#">Xem thêm</a>
              </div>
            </div>
            <div class="student__list-item">
              <div class="student__list--img"><a href="#"><img src="{{asset('frontend/img/news/news-1.jpg')}}" alt="" srcset=""/></a></div>
              <div class="student__list--content">
                <h3 class="text-primary font-weight-bold">Nguyễn Hạnh Hà My</h3><a class="text-primary student__list--title" href="#">Em rất thích môi trường học thế này</a>
                <p>Giáo trình thực tế, thường xuyên có các bài tập tình huống, làm theo nhóm để các thành viên trong lớp trao đổi ý kiến và hỗ trợ nhau. Giảng viên có kiến thức thực tế, chuyên môn cao và chia sẻ cho học viên... </p><a class="btn" href="#">Xem thêm</a>
              </div>
            </div>
          </div>
          <div class="pt-5"></div>
          <div class="d-flex justify-content-center"><a class="btn btn-primary btn-loadmore" href="#">Xem thêm<i class="zmdi zmdi-chevron-down"></i></a></div>
          <div class="pt-5"></div>
        </div>
        <div class="col-md-4 col-lg-3">
          <!-- include nav-right -->
          @include('frontend.includes.nav-right')
        </div>
      </div>
    </div>
    <div class="student__video">
      <div class="container">
        <div class="section__title">
          <h3>CẢM NHẬN HỌC VIÊN</h3>
        </div>
        <div class="pt-2"></div>
        <div class="swiper-video">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="student__video-item"><a class="popup-video" href="https://www.youtube.com/watch?v=23PmRrFolMw" title=""><img src="{{asset('frontend/img/news/news-1.jpg')}}" alt=""></a></div>
              </div>
              <div class="swiper-slide"> 
                <div class="student__video-item"><a class="popup-video" href="https://www.youtube.com/watch?v=_6GKQmL109g" title=""><img src="{{asset('frontend/img/news/news-2.jpg')}}" alt=""></a></div>
              </div>
              <div class="swiper-slide"> 
                <div class="student__video-item"><a class="popup-video" href="https://www.youtube.com/watch?v=23PmRrFolMw" title=""><img src="{{asset('frontend/img/news/news-3.jpg')}}" alt=""></a></div>
              </div>
              <div class="swiper-slide"> 
                <div class="student__video-item"><a class="popup-video" href="https://www.youtube.com/watch?v=23PmRrFolMw" title=""><img src="{{asset('frontend/img/news/news-1.jpg')}}" alt=""></a></div>
              </div>
            </div>
          </div>
          <!-- Add Arrows-->
          <div class="video-next"><i class="zmdi zmdi-chevron-right"></i></div>
          <div class="video-prev"><i class="zmdi zmdi-chevron-left"></i></div>
        </div>
      </div>
    </div>
    <div class="pt-5"></div>
    <div class="section__form-get-route bg-grey">
      <!-- include form-get-route -->
      @include('frontend.includes.form-get-route')
    </div>
  </div>
</div>
@endsection
