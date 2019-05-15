@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="page__breadcrumb">
    <div class="container">
      <h3 class="page__breadcrumb--title">{{ $category->name }}</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Danh mục bài viết</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page__content">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          @if (!count($posts))
            <div class="message-container">
              <p class="alert-danger">Không tìm thấy bài viết phù hợp.</p>
            </div>
          @endif
          <div class="row">
            @foreach($posts as $post)
              <div class="col-lg-4 col-md-6">
                <div class="course__item course__item--dark">
                  <div class="course__item--img"><img src="/{{ $post->avatar }}" alt="" srcset="" width="375" height="180"/></div>
                  <div class="course__item--content">
                    <h3 class="course__item--title"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
{{--                    <p class="course__item--des text-2-line mb-4">{{ $post->sort_description }}</p><a class="course__item--button" href="/course/{{ $post->id }}">Xem chi tiết</a>--}}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
