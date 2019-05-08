@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="py-5">
        <hr class="box-shadow-bottom bg-primary mt-0 mb-4">
        </div>
        <div class="job-name"><h3>Giáo viên tiếng Anh</h3></div>
        <div class="time-ago">
          <i class="zmdi zmdi-time-restore mr-1"></i>
          <span class="font-italic">5 ngày trước</span>
        </div>
        <span class="tag-address my-3">Cơ sở 1</span>
        <div class="job-description py-4">
          <h5>Mô tả công việc</h5>
          <div class="pl-3">
            <p>Tham gia giảng dạy các khóa học cho trung tâm. Trợ giảng các lớp Tiếng Anh trung cấp, sơ cấp. Chịu trách nhiệm về chất lượng đầu ra của các học viên Tham gia giảng dạy các khóa học cho trung tâm. Trợ giảng các lớp Tiếng Anh trung cấp, sơ cấp. Chịu trách nhiệm về chất lượng đầu ra của các học viên</p>
            <p>Toic >800</p>
            <p>Ngoại hình cao > 1m60</p>
            <p>Có 2 năm kinh nghiệm ở vị trí tương đương</p>
            <p>Thời gian làm việc: từ thứ 2 đến thứ 5. Bắt đầu từ 8h-17h</p>
            <p>Lương: 15 triệu đồng (có phụ cấp ăn trưa 30K)</p>
          </div>
        </div>
        <div class="apply-job mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="btn-apply-job">
            <label class="custom-file-label" for="btn-apply-job" aria-describedby="btn-apply-job"></label>
          </div>
        </div>
        <div class="py-5"></div>
      </div>
    </div>
  </div>
</div>
@endsection
