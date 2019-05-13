@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="main__content">
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
              <h2 class="title">{{ $course->name }}</h2>
              @if(!$isEnrolled && !$isDuplicate)
              <button id="enroll-btn">Ghi Danh</button>
              @elseif($isEnrolled)
              <p class="text-danger">Bạn đã đăng ký khóa học này.</p>
              @elseif($isDuplicate)
              <p class="text-danger">Khóa học này trùng lịch với một trong số khoa học bạn đã đăng ký .</p>
              @endif
              <ul class="menu-icon">
                <li><i class="zmdi zmdi-folder"></i><span>Các khóa học</span></li>
                <li><i class="zmdi zmdi-tag"></i><span>Các khóa học, tháng 11/2018</span></li>
              </ul>
            </div>
            <div class="content-main">
              {!! $course->description !!}
            </div>
            <form id="form-enroll" action="/course/{{ $course->id }}" method="POST" hidden>
              @csrf
            </form>
          </div>
          <div class="col-md-4 col-lg-3">
            <div class="nav-course-list"><a href="#">Khóa học đào tạo tiếng anh sơ cấp</a><a href="#">Khóa học ĐÀO TẠO TIẾNG ANH PRE-IELTS</a><a href="#">Khóa học LUYỆN THI TIẾNG ANH IELTS</a><a href="#">Khóa học TÀI CHÍNH</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('enroll-btn').addEventListener('click', function() {
    document.getElementById('form-enroll').submit();
  });
</script>
@endsection
