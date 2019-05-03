@extends('frontend/layouts/default')
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
