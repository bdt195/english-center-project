@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">Các khóa học</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
          <li class="breadcrumb-item"><a href="#">Lịch khai giảng</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lịch khai giảng Pe Plateau tháng 11/2018</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="content-header">
            <h2 class="title">Lịch khai giảng Le Plateau tháng 11/2018</h2>
            <ul class="menu-icon">
              <li><i class="zmdi zmdi-folder"></i><span>Lịch khai giảng</span></li>
              <li><i class="zmdi zmdi-tag"></i><span>lịch khai giảng tháng 11/2018</span></li>
            </ul>
          </div>
          <div class="content-main">
            <p><a class="text-uppercase text-primary font-weight-bold" href="introduction.html">Plateau </a>là đơn vị đào tạo tiếng anh giao tiếp đầu tiên tại Việt Nam cấp chứng chỉ quốc tế Singapo với 100% giáo viên bản những.
              Trược thuộc sở giao dục dào tạo. PLATEAU đi đầu trong lĩnh vực ứng dụng kiến thức kích thics não bộ BSM để học tiếng anh cho mọi người.
            </p>
            <p>PLATEAU xin gửi các bạn <a class="font-weight-bold" href="#">lịch khai giảng tháng 11/2018.</a><br><a class="font-weight-bold" href="#">Đăng kí ngay </a>để nhận HỌC PHÍ SIÊU ƯU ĐÃI - QUÀ TẶNG SIÊU HẤP DẪN.</p>
            <div class="pt-3"></div>
            <ul class="list-style-gift"> 
              <li>05 điều khắc biệt tại LE PLATEAU</li>
              <li>Sứ mệnh tầm nhìn</li>
              <li>Báo chí nói về LE PLATEAU</li>
              <li>Cơ sở vật chất</li>
              <li>Đội ngũ giảng viên</li>
              <li>10 lý do nên chọn học tập tại LE PLATEAU</li>
            </ul>
            <div class="row d-flex justify-content-center">
              <div class="col-lg-10">
                <div class="section__title">
                  <h3>Đăng kí học tại Le Plateau</h3>
                </div>
                <div class="advisory__form form-input-bg-grey">
                  <form>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Họ và tên">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Số điện thoại">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Năm sinh">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Trường học">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <select class="custom-select" id="selectCourse">
                            <option selected>Chọn khóa học</option>
                            <option value="1">Khóa Tiếng Anh</option>
                            <option value="2">Khóa Tiếng Nhật</option>
                            <option value="3">Khóa Tiếng Pháp</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <select class="custom-select" id="selectArea">
                            <option selected>Chọn cơ sở</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">Tp Hồ Chí Minh</option>
                            <option value="3">Đà Nẵng</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4">
                        <button class="btn btn-primary btn-block text-uppercase font-weight-bold">Đăng kí ngay</button>
                      </div>
                      <div class="col-lg-4"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="section__title">
              <h3>Đăng kí học tại Le Plateau</h3>
            </div>
            <div class="tabble-calendar-system table-responsive mb-4">   
              <table class="table table-bordered">
                <tr>
                  <th>Lớp học</th>
                  <th>Thời gian</th>
                  <th>Khai giảng</th>
                  <th>Địa điểm</th>
                  <th>Đăng kí</th>
                </tr>
                <tr>
                  <td>LCB-01</td>
                  <td>Sáng</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-02</td>
                  <td>Tối</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-03</td>
                  <td>Sáng</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-04</td>
                  <td>Tối</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-05</td>
                  <td>Sáng</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-06</td>
                  <td>Tối</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-07</td>
                  <td>Sáng</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-08</td>
                  <td>Tối</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
                <tr>
                  <td>LCB-09</td>
                  <td>Sáng</td>
                  <td>Tháng 11/2018</td>
                  <td>Măng Đen</td>
                  <td>
                    <button class="btn btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Đăng kí ngay</span></button>
                  </td>
                </tr>
              </table>
            </div>
            <p class="font-weight-bold">Chúng tôi đang phát triển mô hình giáo dục Tiếng Anh tập trung, hoàn toàn mới tại Măng Đen và Đại Lãnh, kết hợp với rèn luyện thể chất, và kỷ luật cao độ để đạt được hiệu quả cao nhất trong quá trình học.</p>
            <h5 class="font-weight-bold text-primary">Cảm nhận của học viên xuyên suốt khóa Level 1</h5>
            <ul class="list-style-star">
              <li><a href="#">LE PLATEAU tự hào ra mắt sách “Kích thích não bộ tăng tốc phản xạ và ghi nhớ tiếng anh”</a></li>
              <li><a href="#">Giới thiệu về LE PLATEAU – Cơ sở vật chất</a></li>
              <li><a href="#">LE PLATEAU – Sự khác biệt trong giảng dạy tiếng Anh</a></li>
            </ul>
            <div class="pt-5"></div>
          </div>
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
