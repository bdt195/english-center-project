@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="py-5">
        <hr class="box-shadow-bottom bg-primary mt-0 mb-4">
        </div>
        <div class="job-name"><h3>{{ $post->title }}</h3></div>
        <div class="time-ago">
          <i class="zmdi zmdi-time-restore mr-1"></i>
          <span class="font-italic">{{ $post->created_at }}</span>
        </div>
        <div class="time-ago">
          <i class="zmdi zmdi-time-restore mr-1"></i>
          <span class="font-italic">{{ $post->author }}</span>
        </div>
        <div class="job-description py-4">
          {!! $post->content !!}
        </div>
        <div class="py-5"></div>
      </div>
    </div>
  </div>
</div>
@endsection
