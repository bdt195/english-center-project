@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="py-5">
        <hr class="box-shadow-bottom bg-primary mt-0 mb-4">
        </div>
        <div class="job-name"><h3>{{ $recruitment->title }}</h3></div>
        <div class="time-ago">
          <i class="zmdi zmdi-time-restore mr-1"></i>
          <span class="font-italic">5 ngày trước</span>
        </div>
        <span class="tag-address my-3">Cơ sở 1</span>
        <div class="job-description py-4">
          {!! $recruitment->content !!}
        </div>
        <div class="apply-job mb-3">
          <div class="custom-file">
            <form action="/recruitment/{{ $recruitment->id }}" enctype="multipart/form-data" method="POST">
              {{ csrf_field() }}
              <input type="file" class="custom-file-input" id="btn-apply-job" name="cv">
              <label class="custom-file-label" for="btn-apply-job" aria-describedby="btn-apply-job"></label>
              <input type="submit" for="btn-apply-job"/>
            </form>
          </div>
        </div>
        <div class="py-5"></div>
      </div>
    </div>
  </div>
</div>
@endsection
