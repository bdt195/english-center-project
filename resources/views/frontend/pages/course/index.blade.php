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
      </div>
      <p><span class="text-primary font-weight-bold">LE PLATEAU </span>đang phát triển mô hình giáo dục Tiếng Anh tập trung, hoàn toàn mới tại Măng Đen và Đại Lãnh, Kontum, Khái Hòa kết hợp với rèn luyện thể chất, và kỷ luật cao độ, khai phóng về Tiếng Anh và Tài Chính đầu tiên tại Việt Nam để đạt được hiệu quả cao nhất cho người học. </p>
      <div class="pt-4"></div>
        <div class="row">
        @foreach($courses as $course)
          <div class="col-lg-4 col-md-6">
            <div class="course__item course__item--dark">
              <div class="course__item--img"><img src="/{{ $course->avatar }}" alt="" srcset="" width="375" height="180"/></div>
              <div class="course__item--content">
                <h3 class="course__item--title"><a href="/course/{{ $course->id }}">{{ $course->name }}</a></h3>
                <p class="course__item--des text-2-line mb-4">{{ $course->sort_description }}</p><a class="course__item--button" href="/course/{{ $course->id }}">Xem chi tiết</a>
              </div>
            </div>
          </div>
        @endforeach
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
