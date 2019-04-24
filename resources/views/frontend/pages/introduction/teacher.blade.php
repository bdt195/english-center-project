@extends('frontend/layouts/default')
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
          <!-- include nav-right -->
          @include('frontend.includes.nav-right')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection