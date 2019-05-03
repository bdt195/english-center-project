@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">Thư viện ảnh</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
          <li class="breadcrumb-item active" aria-current="page">Thư viện ảnh / Hình ảnh</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <div class="container">
        <div class="page__title">
          <h3>Hình ảnh học viên Le Plateau</h3>
          <ul>
            <li><a href="#"><i class="zmdi zmdi-folder"></i>Hình ảnh học viên Le Plateau</a></li>
          </ul>
        </div>
        <div class="pt-3"></div>
        <div class="row">
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-1.jpg')}}" alt="" srcset=""/><span class="text-primary">Chỗ ăn ở, học tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-2.jpg')}}" alt="" srcset=""/><span class="text-primary">Học tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-3.jpg')}}" alt="" srcset=""/><span class="text-primary">Ngoại khóa</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-4.jpg')}}" alt="" srcset=""/><span class="text-primary">Thực tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-1.jpg')}}" alt="" srcset=""/><span class="text-primary">Chỗ ăn ở, học tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-2.jpg')}}" alt="" srcset=""/><span class="text-primary">Học tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-3.jpg')}}" alt="" srcset=""/><span class="text-primary">Ngoại khóa</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-4.jpg')}}" alt="" srcset=""/><span class="text-primary">Thực tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-1.jpg')}}" alt="" srcset=""/><span class="text-primary">Chỗ ăn ở, học tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-2.jpg')}}" alt="" srcset=""/><span class="text-primary">Học tập</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-3.jpg')}}" alt="" srcset=""/><span class="text-primary">Ngoại khóa</span></a></div>
          <div class="col-md-4 col-lg-3"><a class="image-library__item" href="image-library-detail.html"><img src="{{asset('static/frontend/img/images/img-4.jpg')}}" alt="" srcset=""/><span class="text-primary">Thực tập</span></a></div>
        </div>
        <div class="pt-2"></div>
        <div class="d-flex justify-content-center"><a class="btn btn-primary btn-loadmore" href="#">Xem thêm<i class="zmdi zmdi-chevron-down"></i></a></div>
        <div class="pt-5"></div>
      </div>
    </div>
  </div>
</div>
<div class="section__form-get-route bg-grey">
  <!-- include form-get-route -->
  @include('frontend.includes.form-get-route')
</div>
@endsection