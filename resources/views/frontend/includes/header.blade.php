<?php
  $user = null;
  if(Auth::check()){
    $user = Auth::user();
  }

  $categories = \App\Category::where('parent_id', 1)->get();
?>
<div class="header__top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9 col-md-8">
        <ul class="header__info text-right">
          <li><a href="mailto:cskh@eng-ct.edu.vn" title="mailto:cskh@.edu.vn"><i class="zmdi zmdi-email"></i><span>cskh@eng-ct.edu.vn</span></a></li>
          <li><a class="font-weight-bold" href="tel:+1900 63 65 68 " title="tel:+1900 63 65 68 ">1900 63 65 68 </a><span>(8:30 - 18:00)</span></li>
          <li><a class="font-weight-bold" href="tel:+0917 850 648" title="tel:+0917 850 648">0917 850 648</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="login-logout-inner text-right">
          @if(!$user)
          <a href="/login" class="mr-3">Đăng nhập</a>
          <a href="/register">Đăng ký</a>
          @endif
          @if($user)
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle avatar-user-inner" type="button" id="avatar-user-inner-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar-user">
                @if($user->avatar)
                <img src="/{{ $user->avatar }}" alt="" class="mr-2">
                @else
                <img src="{{asset('/static/frontend/img/profile.png')}}" alt="" class="mr-2">
                @endif
                <span>{{ $user->first_name . ' ' . $user->last_name }}</span>
              </div>
            </button>
            <div class="dropdown-menu avatar-user-inner-dropdown-menu" aria-labelledby="avatar-user-inner-dropdown">
              <a class="dropdown-item" href="/user/profile">Thông tin cá nhân</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                Đăng xuất
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class="header__main">
  <div class="container">
    <div class="header__menu">
      <h1 class="header__logo"><a href="/"><img src="{{asset('/static/frontend/img/logo.png')}}" alt="" srcset=""></a></h1>
      <ul class="menu__main">
        <li class="menu__item menu__item--has-child menu__current-item"><a href="/introduction">Giới thiệu</a>
          <ul class="menu__sub">
            <li class="menu__item menu__current-item"><a href="#">Sứ mệnh tầm nhìn</a></li>
            <li class="menu__item"><a href="#">Cơ sở vật chất</a></li>
            <li class="menu__item"><a href="#">Đội ngũ giảng viên</a></li>
            <li class="menu__item"><a href="#">05 điều khác biệt tại LE PLATEAU</a></li>
            <li class="menu__item"><a href="#">10 lý do nên học tại LE PLATEAU</a></li>
          </ul>
        </li>
        <li class="menu__item menu__item--has-child"><a href="#">Bài viết</a>
          <ul class="menu__sub">
            @foreach($categories as $category)
              <li class="menu__item"><a href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="menu__item"><a href="/course">khóa học</a></li>
{{--        <li class="menu__item"><a href="/student">Học viên</a></li>--}}
        <li class="menu__item"><a href="/test">Kiểm tra trình độ</a></li>
        <li class="menu__item"><a href="/recruitment">Tuyển dụng</a></li>
        <li class="menu__item"><a href="/contact">Liên hệ</a></li>
      </ul>
      <div class="navbar-toggler-icon" data-control="aside"><i class="zmdi zmdi-menu"></i></div>
    </div>
  </div>
</div>
