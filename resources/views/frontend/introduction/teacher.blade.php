@extends('frontend/layout-master/layout-default')
@section('content')
<div class="main-content-container">
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">Đội ngũ giảng dạy</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đội ngũ giảng dạy</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <h2 class="page-title text-primary text-uppercase">GIÁO VIÊN <span class="font-weight-bold">BẢN NGỮ</span></h2>
          <p>Trường Anh ngữ  là đơn vị tiên phong giảng dạy và truyền cảm hứng học tiếng Anh giao tiếp cho học viên với 100% giáo viên nước ngoài có chứng chỉ giảng dạy được công nhận trên toàn cầu. Đồng thời học viên sẽ được cấp chứng chỉ quốc tế từ Singapore.</p>
          <div class="pt-4"></div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="introduction-teacher"><a href="#"><img src="{{asset('frontend/img/teacher/teacher-5.jpg')}}" alt="" srcset=""/>
                  <div class="introduction-teacher__content">
                    <h3>ANDREW <br/>RICHARDSON</h3><span>Teacher</span>
                  </div></a></div>
            </div>
          </div>
          <div class="pt-4"></div>
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
  </div>
</div>
@endsection