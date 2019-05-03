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
          <!-- include nav-right -->
          @include('frontend.includes.nav-right')
        </div>
      </div>
    </div>
    <div class="section__form-get-route bg-grey">
      <!-- include form-get-route -->
      @include('frontend.includes.form-get-route')
    </div>
  </div>
</div>
@endsection