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
      @foreach ($recruitmentCollection as $item)
        <div class="job-cpn">
          <div class="row">
            <div class="col-md-9">
              <a href="/recruitment/{{ $item->id }}" class="job-name"><h3>{{ $item->title }}</h3></a>
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
      @endforeach
    </div>
  </div>
</div>
@endsection
