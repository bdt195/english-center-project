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

      <div class="pt-3"></div>

      <div class="row">
        <div class="col-md-9">
          @if (!count($courses))
            <div class="message-container">
              <p class="alert-danger">Không tìm thấy khóa học phù hợp, <a href="/course">bấm vào đây</a> để quay lại.</p>
            </div>
          @endif
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
        </div>
        <div class="col-md-3">
          <form action="" method="GET">
            <div class="filter">
              <div class="filter-list filter-list-checkbox">
                <h3 class="title">Lọc theo cơ sở</h3>
                <ul class="list-unstyled px-2">
                  @foreach($facilities as $facility)
                  <li>
                    <input type="checkbox" class="mr-2" value="{{ $facility->id }}" name="facility[]">
                    <a href="#">{{ $facility->name }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="filter">
              <div class="filter-list filter-list-checkbox">
                <h3 class="title">Lọc theo danh mục</h3>
                <ul class="list-unstyled px-2">
                  @foreach($categories as $category)
                    <li>
                      <input type="checkbox" class="mr-2" value="{{ $category->id }}" name="category[]">
                      <a href="#">{{ $category->name }}</a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="filter">
              <div class="filter-list filter-list-checkbox">
                <h3 class="title">Lọc theo thời gian</h3>
                <ul class="list-unstyled px-2">
                    <li>
                      <label for="start-date">Bắt đầu từ ngày</label><br/>
                      <input type="date" id="start-date" class="mr-2" name="start-date[]">
                    </li>
                    <li>
                      <label for="end-date">Đến ngày</label><br/>
                      <input type="date" id="end-date" class="mr-2" name="start-date[]">
                    </li>
                </ul>
              </div>
            </div>
            <div class="filter">
              <div class="filter-list filter-list-checkbox">
                <h3 class="title">Lọc theo thời gian</h3>
                <ul class="list-unstyled px-2">
                  <li>
                    <label for="start-date">Kết thúc từ ngày</label><br/>
                    <input type="date" id="start-date" class="mr-2" name="end-date[]">
                  </li>
                  <li>
                    <label for="end-date">Đến ngày</label><br/>
                    <input type="date" id="end-date" class="mr-2" name="end-date[]">
                  </li>
                </ul>
              </div>
            </div>
            <div class="filter">
            <div class="filter">
              <div class="filter-list filter-list-checkbox">
                <h3 class="title">Lọc theo trạng thái</h3>
                <ul class="list-unstyled px-2">
                  <li>
                    <input type="radio" name="status" value="1"> Mở<br>
                    <input type="radio" name="status" value="0"> Đóng<br>
                  </li>
                </ul>
              </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit">Lọc khóa học</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
