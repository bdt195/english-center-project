@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="py-3">
      <hr class="box-shadow-bottom bg-primary mt-0 mb-4">
    </div>
    <div class="search-job py-5 px-3">
      <form action="">
        <div class="row">
          <div class="col-md-7">
            <input type="text" class="form-control" placeholder="Nhập công việc tìm kiếm...">
          </div>
          <div class="col-md-3">
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Chọn địa điểm...</option>
            <option value="1">Cơ sở 1</option>
            <option value="2">Cơ sở 2</option>
            <option value="3">Cơ sở 3</option>
          </select>
          </div>
          <div class="col-md-2">
            <button class="btn btn-success w-100">Tìm việc</button>
          </div>
        </div>
      </form>
    </div>
    <div class="list-job my-3">
      @for ($i = 0; $i < 10; $i++)
        <div class="job-cpn">
          <div class="row">
            <div class="col-md-9">
              <a href="#" class="job-name"><h3>Giáo viên tiếng Anh</h3></a>
              <div class="job-description text-2-line">
                <p>- Tham gia giảng dạy các khóa học cho trung tâm. Trợ giảng các lớp Tiếng Anh trung cấp, sơ cấp. Chịu trách nhiệm về chất lượng đầu ra của các học viên Tham gia giảng dạy các khóa học cho trung tâm. Trợ giảng các lớp Tiếng Anh trung cấp, sơ cấp. Chịu trách nhiệm về chất lượng đầu ra của các học viên</p>
              </div>
              <div class="time-ago mt-3">
                <i class="zmdi zmdi-time-restore mr-1"></i>
                <span class="font-italic">5 ngày trước</span>
              </div>
            </div>
            <div class="col-md-3">
              <span class="tag-address mt-3">Cơ sở 1</span>
            </div>
          </div>
        </div>
      @endfor
    </div>
  </div>
</div>
@endsection
