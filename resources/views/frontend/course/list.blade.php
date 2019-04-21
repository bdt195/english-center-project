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
      <div class="page__title">
        <h3>Các khóa hoc</h3>
        <ul>
          <li><a href="#"><i class="zmdi zmdi-folder"></i>Các khóa học</a></li>
          <li></li><a href="#"><i class="zmdi zmdi-tag"></i>Các khóa học, tháng 11/2018</a>
        </ul>
      </div>
      <p><span class="text-primary font-weight-bold">LE PLATEAU </span>đang phát triển mô hình giáo dục Tiếng Anh tập trung, hoàn toàn mới tại Măng Đen và Đại Lãnh, Kontum, Khái Hòa kết hợp với rèn luyện thể chất, và kỷ luật cao độ, khai phóng về Tiếng Anh và Tài Chính đầu tiên tại Việt Nam để đạt được hiệu quả cao nhất cho người học. </p>
      <div class="pt-4"></div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="course__item course__item--dark">
            <div class="course__item--img"><img src="{{asset('frontend/img/course/course-1.jpg')}}" alt="" srcset="" width="375" height="180"/></div>
            <div class="course__item--content">
              <h3 class="course__item--title"><a href="#">Khóa học tiếng Anh giao tiếp cơ bản</a></h3>
              <p class="course__item--des">Trang bị kiến thức, hoàn thiện kỹ năng và rèn luyện chiến thuật làm bài để đạt điểm cao trong các kỳ thi quốc tế IELTS, TOEFL iBT nhằm đáp ứng nhu cầu học tập và công việc của mỗi học viên</p><a class="course__item--button" href="#">Xem chi tiết</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="course__item course__item--dark">
            <div class="course__item--img"><img src="{{asset('frontend/img/course/course-3.jpg')}}" alt="" srcset="" width="375" height="180"/></div>
            <div class="course__item--content">
              <h3 class="course__item--title"><a href="#">Khóa học luyện thi ielts</a></h3>
              <p class="course__item--des">Trang bị kiến thức, hoàn thiện kỹ năng và rèn luyện chiến thuật làm bài để đạt điểm cao trong các kỳ thi quốc tế IELTS, TOEFL iBT nhằm đáp ứng nhu cầu học tập và công việc của mỗi học viên</p><a class="course__item--button" href="#">Xem chi tiết</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="course__item course__item--dark">
            <div class="course__item--img"><img src="{{asset('frontend/img/course/course-2.jpg')}}" alt="" srcset="" width="375" height="180"/></div>
            <div class="course__item--content">
              <h3 class="course__item--title"><a href="#">Khóa học tài chính</a></h3>
              <p class="course__item--des">Trang bị kiến thức, hoàn thiện kỹ năng và rèn luyện chiến thuật làm bài để đạt điểm cao trong các kỳ thi quốc tế IELTS, TOEFL iBT nhằm đáp ứng nhu cầu học tập và công việc của mỗi học viên</p><a class="course__item--button" href="#">Xem chi tiết</a>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-3"></div>
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
@endsection
