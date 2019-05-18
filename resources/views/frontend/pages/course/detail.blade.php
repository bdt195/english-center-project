@extends('frontend/layouts/default')
<?php

?>
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
              @if (Session::has('success'))
                <div class="message-container">
                  @foreach(Session::get('success') as $item)
                    <p class="alert-success">{{ $item }}</p>
                  @endforeach
                </div>
              @endif
              <h2 class="title">{{ $course->name }}</h2>
              @if(!$isEnrolled && !$isDuplicate && Auth::check())
              <button id="enroll-btn" class="btn btn-primary mb-3">Ghi Danh</button>
              @elseif($isEnrolled)
              <p class="text-danger">Bạn đã đăng ký khóa học này.</p>
              @elseif($isDuplicate)
              <p class="text-danger">Khóa học này trùng lịch với một trong số khoa học bạn đã đăng ký .</p>
              @endif
              <ul class="">
                <li><span>Ngôn ngữ: {{ $course->category->name }}</span></li>
                <li><span>Ngày bắt đầu: {{ $course->start_date }}</span></li>
                <li><span>Ngày kết thúc: {{ $course->end_date }}</span></li>
                <li><span>Cơ sở: {{ $course->facility->name }}</span></li>
                <li><span>Giảng viên: @foreach($course->teachers as $teacher) {{ $teacher->first_name . ' ' . $teacher->last_name . ',' }} @endforeach</span></li>
                <li><span>Lịch học: @foreach($course->schedule as $schedule ) {{ $schedule . ',' }} @endforeach</span></li>
              </ul>
            </div>
            <div class="content-main">
              {!! $course->description !!}
            </div>
            <form id="form-enroll" action="/course/{{ $course->id }}" method="POST" hidden>
              @csrf
            </form>
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
