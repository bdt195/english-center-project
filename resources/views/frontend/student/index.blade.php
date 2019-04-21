@extends('frontend/layout-master/layout-default')
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
          <div class="section__nav-right">
            <div class="advisory">
              <div class="advisory__banner">
                <div class="title"><span>Hotline </span><b>Tư vấn</b></div>
                <div class="content d-flex align-items-center justify-content-around justify-content-md-between">
                  <div class="icon"><img src="{{asset('frontend/img/phone-call-blue.png')}}" alt="Icon Phone"></div>
                  <div class="phone-number">
                    <div class="d-flex align-items-center flex-md-column flex-xl-row mb-2"><a href="tel:098888999"><b class="number mr-2">098 888 999</b></a><span class="employee">Măng đen</span></div>
                    <div class="d-flex align-items-center flex-md-column flex-xl-row"><a href="tel:098888999"><b class="number mr-2">098 888 999</b></a><span class="employee">Măng đen</span></div>
                  </div>
                </div>
              </div>
              <div class="advisory__form">
                <h5 class="form-title">Đăng kí tư vấn</h5>
                <form>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Họ và tên">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Số điện thoại">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email"><i class="zmdi zmdi-email"></i>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Trường">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Năm sinh">
                  </div>
                  <div class="form-group">
                    <select class="custom-select" id="selectArea">
                      <option selected>Địa điểm muốn học</option>
                      <option value="1">Hà Nội</option>
                      <option value="2">Tp Hồ Chí Minh</option>
                      <option value="3">Đà Nẵng</option>
                    </select>
                  </div>
                  <button class="btn btn-primary btn-block text-uppercase font-weight-bold">Đăng kí ngay</button>
                </form>
              </div>
            </div>
            <div class="newpost">
              <h5 class="newpost-header">Bài viết mới nhất</h5>
              <div class="newpost-list">
                <div class="newpost-item">
                  <div class="img-wrap"><a href="#"><img src="{{asset('frontend/img/newpost/newpost-1.png')}}" alt="#"></a></div>
                  <h6 class="title"> <a href="#">Le Plateau, sự lựa chọn hàng đầu cho bạn</a></h6>
                  <div class="time">26 Tháng Mười, 2018</div>
                </div>
                <div class="newpost-item">
                  <div class="img-wrap"><a href="#"><img src="{{asset('frontend/img/newpost/newpost-2.png')}}" alt="#"></a></div>
                  <h6 class="title"><a href="#">Những điều cần làm khi bắt đầu học tiếng Anh</a></h6>
                  <div class="time">26 Tháng Mười, 2018</div>
                </div>
                <div class="newpost-item">
                  <div class="img-wrap"><a href="#"><img src="{{asset('frontend/img/newpost/newpost-3.png')}}" alt="#"></a></div>
                  <h6 class="title"><a href="#">Những lợi ích tuyệt vời khi học tiếng Anh ở Le Plateau mà bạn nên biết</a></h6>
                  <div class="time">26 Tháng Mười, 2018</div>
                </div>
              </div>
            </div>
          </div>
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
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-9">
            <div class="section__title">
              <h3>Nhận tư vấn lộ trình Anh ngữ từ Le Plateau</h3>
              <p class="text-center">Hãy để lại thông tin, tư vấn viên của LE PLATEAU sẽ liên lạc với bạn trong thời gian sớm nhất.</p>
            </div>
            <div class="form-get-route">
              <form>
                <div class="input-wrap">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Họ và tên">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Số điện thoại">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Email">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group mb-0">
                        <input class="form-control" type="text" placeholder="Độ tuổi">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group mb-0">
                        <select class="custom-select" id="selectArea">
                          <option selected>Khu vực</option>
                          <option value="1">Hà Nội</option>
                          <option value="2">Tp Hồ Chí Minh</option>
                          <option value="3">Đà Nẵng</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button class="btn btn-primary btn-send" type="submit">Gửi thông tin</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
