@extends('frontend/layout-master/layout-default')
@section('content')
<div class="main-content-container">  
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">Các khóa học</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
          <li class="breadcrumb-item active" aria-current="page">Các khóa học</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="content-header">
            <h2 class="title">Giới thiệu Le PLATEAU</h2>
            <ul class="menu-icon">
              <li><i class="zmdi zmdi-folder"></i><span>Các khóa học</span></li>
              <li><i class="zmdi zmdi-tag"></i><span>Các khóa học, tháng 11/2018</span></li>
            </ul>
          </div>
          <div class="content-main">
            <h1 class="title">Giới thiệu LE PLATEAU</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            <h3>TẦM NHÌN - SỨ MỆNH ECORP</h3>
            <ol>
              <li><span>Tầm nhìn</span>
                <p>
                  Mô hình giáo dục tập trung, kỷ luật, khai phóng về Tiếng Anh và Tài Chính đầu tiên tại Việt Nam. LE PLATEAU hướng tới xây dưng và mở rộng các trường liên cấp để tạo ra môi trường gíup thế hệ trẻ người Việt xoá bỏ khoảng cách trình độ giáo dục so với các nước tiên tiến.</p>
              </li>
              <li><span>Sứ mệnh</span>
                <p>“VÌ MỘT VIỆT NAM TRÍ RA BIỂN LỚN”</p>
              </li>
            </ol>
            <h3>GIÁ TRỊ CỐT LÕI</h3>
            <ol>
              <li> <span>Education (Tri thức): </span>
                <p>Tập thể LE PLATEAU  luôn giữ thái độ chủ động học tập phát triển không ngừng đón đầu thời đại công nghệ mới.</p>
              </li>
              <li><span>Creative (Sáng tạo Kaizen):</span>
                <p>Với slogan “Make it different”, điều quan trọng bậc nhất của ECORP là sự sáng tạo đúng hướng tạo nên những tốt nhất cho khách hàng và cộng đồng.</p>
              </li>
              <li><span>Orientation (Cống hiến): </span>
                <p>LE PLATEAU tôn vinh và khen thưởng cao nhất cho sự cống hiến. Cống hiến cho đồng đội, cho tập thể, cho doanh nghiệp và cho xã hội.</p>
              </li>
              <li><span>Responsibility (Trách nhiệm): </span>
                <p>LE PLATEAU  luôn nỗ lực hết mình để hoàn thành mục tiêu phục vụ khách hàng. Không lý do, không đổ lỗi, nhận 100% trách nhiệm về bản thân.</p>
              </li>
              <li><span>Process (Quy trình):</span>
                <p>Tôn chỉ làm việc của LE PLATEAU  là làm việc tỉ mỉ, chi tiết, mạch lạc, rõ ràng hướng tới kết quả cao nhất.</p>
              </li>
            </ol>
          </div>
          <div class="info-refe">
            <div class="section__title">
              <h3 class="text-left">Thông tin tham khảo</h3>
            </div>
            <ul class="list-greater-than">
              <li><a href="#">05 điều khắc biệt tại LE PLATEAU</a></li>
              <li><a href="#">Sứ mệnh tầm nhìn</a></li>
              <li><a href="#">Báo chí nói về LE PLATEAU</a></li>
              <li><a href="#">Cơ sở vật chất</a></li>
              <li><a href="#">Đội ngũ giảng viên</a></li>
              <li><a href="#">10 lý do nên chọn học tập tại LE PLATEAU</a></li>
            </ul>
          </div>
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