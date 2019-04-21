@extends('frontend/layout-master/layout-default')
@section('content')
<div class="main-content-container">
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">Em rất thích môi trường học thế này</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">LE PLATEAU</a></li>
          <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cảm nhận học viên</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="page__title">
            <h3>Em rất thích môi trường học thế này</h3><span class="text-primary">Cảm nhận học viên </span><span>- 25/10/2018 - 1088 Lượt xem</span>
            <div class="pt-2"></div>
          </div>
          <div class="page-content">
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            <div class="pt-2"></div>
            <div class="text-center"><img src="./assets/img/students/camnhan.jpg" alt="" srcset=""></div>
            <div class="pt-4"></div>
            <p><span class="font-weight-bold">Giải đáp thắc mắc học IELTS mất bao nhiêu thời gian?</span><br>Các cơ quan thuộc chính phủ Anh, Úc, Canada, Mỹ, New Zealand, v.v. thường dùng chứng chỉ IELTS như một phần tham khảo hoặc bắt buộc để xem xét đơn xin thị thực, đơn xin cư trú của người nhập cư. Nhiều trường cao đẳng, đại học và các tổ chức giáo dục quốc tế cũng dựa vào số điểm đạt được trên chứng chỉ IELTS để quyết định nhận sinh viên hay không. IELTS được xem như chứng chỉ đáng tin cậy trong việc đánh giá khả năng sử dụng tiếng Anh thành thạo của những người mà tiếng Anh không phải là ngôn ngữ mẹ đẻ, và nó có vai trò quan trọng trong việc quyết định cho phép cư trú, học tập và làm việc tại nước ngoài. Có thể nói, IELTS góp phần rất quan trọng trong việc quyết định tương lai của bạn.</p>
            <div class="pt-2"></div>
            <p> <span class="font-weight-bold">Học IELTS mất bao nhiêu thời gian?</span><br>Khi ôn luyện cho kì thi IELTS, bạn phải xác định được các tiêu chí chấm điểm cho từng mục tiêu điểm số của mình. Tuỳ thuộc vào mục tiêu đề ra, sẽ có những thời gian học khác nhau. Tuy nhiên, thời gian luyện thi IELTS sẽ phụ thuộc vào tất cả những kiến thức bạn đang có tốt đến như thế nào.</p>
            <div class="pt-2"></div>
            <div class="text-center"><img src="./assets/img/students/camnhan.jpg" alt="" srcset=""></div>
            <div class="pt-5"></div>
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            <div class="pt-5"></div>
          </div><img src="./assets/img/fb-demo.jpg" alt="" srcset="">
          <div class="pt-5"></div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="section__nav-right">
            <div class="advisory">
              <div class="advisory__banner">
                <div class="title"><span>Hotline </span><b>Tư vấn</b></div>
                <div class="content d-flex align-items-center justify-content-around justify-content-md-between">
                  <div class="icon"><img src="{{asset('frontend/img/phone-call-blue.png')}}" alt="Icon Phone"></div>
                  <div class="phone-number">
                    <div class="d-flex align-items-center flex-md-column flex-xl-row mb-2"><a href="tel:098888999"><b class="number mr-2">098 888 999</b></a><span class="employee">Măng đen</span></div>
                    <div class="d-flex align-items-center flex-md-column flex-xl-row"><a href="tel:098888999"><b class="number mr-2">098 888 999</b></a><span class="employee">Măng đen</span></div>
                  </div>
                </div>
              </div>
              <div class="advisory__form">
                <h5 class="form-title">Đăng kí tư vấn</h5>
                <form>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Họ và tên">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Số điện thoại">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email"><i class="zmdi zmdi-email"></i>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Trường">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Năm sinh">
                  </div>
                  <div class="form-group">
                    <select class="custom-select" id="selectArea">
                      <option selected>Địa điểm muốn học</option>
                      <option value="1">Hà Nội</option>
                      <option value="2">Tp Hồ Chí Minh</option>
                      <option value="3">Đà Nẵng</option>
                    </select>
                  </div>
                  <button class="btn btn-primary btn-block text-uppercase font-weight-bold">Đăng kí ngay</button>
                </form>
              </div>
            </div>
            <div class="newpost">
              <h5 class="newpost-header">Bài viết mới nhất</h5>
              <div class="newpost-list">
                <div class="newpost-item">
                  <div class="img-wrap"><a href="#"><img src="{{asset('frontend/img/newpost/newpost-1.png')}}" alt="#"></a></div>
                  <h6 class="title"> <a href="#">Le Plateau, sự lựa chọn hàng đầu cho bạn</a></h6>
                  <div class="time">26 Tháng Mười, 2018</div>
                </div>
                <div class="newpost-item">
                  <div class="img-wrap"><a href="#"><img src="{{asset('frontend/img/newpost/newpost-2.png')}}" alt="#"></a></div>
                  <h6 class="title"><a href="#">Những điều cần làm khi bắt đầu học tiếng Anh</a></h6>
                  <div class="time">26 Tháng Mười, 2018</div>
                </div>
                <div class="newpost-item">
                  <div class="img-wrap"><a href="#"><img src="{{asset('frontend/img/newpost/newpost-3.png')}}" alt="#"></a></div>
                  <h6 class="title"><a href="#">Những lợi ích tuyệt vời khi học tiếng Anh ở Le Plateau mà bạn nên biết</a></h6>
                  <div class="time">26 Tháng Mười, 2018</div>
                </div>
              </div>
            </div>
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
  </div>
</div>
@endsection
