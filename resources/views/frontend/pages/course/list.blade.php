@extends('frontend/layouts/default')
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
  <!-- include form-get-route -->
  @include('frontend.includes.form-get-route')
</div>
@endsection
