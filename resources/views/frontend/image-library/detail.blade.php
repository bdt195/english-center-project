@extends('frontend/layout-master/layout-default')
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
        <div class="image-library--gallery">
          <div class="row">
            <div class="col-md-6"><a href="./assets/img/images/img-1.jpg"><img src="{{asset('frontend/img/images/img-1.jpg')}}" alt=""></a></div>
            <div class="col-md-6"><a href="./assets/img/images/img-2.jpg"><img src="{{asset('frontend/img/images/img-2.jpg')}}" alt=""></a></div>
            <div class="col-md-6"><a href="./assets/img/images/img-3.jpg"><img src="{{asset('frontend/img/images/img-3.jpg')}}" alt=""></a></div>
            <div class="col-md-6"><a href="./assets/img/images/img-4.jpg"><img src="{{asset('frontend/img/images/img-4.jpg')}}" alt=""></a></div>
          </div>
        </div>
        <div class="pt-4"></div>
        <div class="d-flex justify-content-center"><a class="btn btn-primary btn-loadmore" href="#">Xem thêm<i class="zmdi zmdi-chevron-down"></i></a></div>
        <div class="pt-5"></div>
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
@endsection