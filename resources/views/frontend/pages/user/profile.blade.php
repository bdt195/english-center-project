@extends('frontend/layouts/default')
@section('content')
<?php $user = Auth::user() ?>
<div class="main-content-container">
  <div class="container">
    <div class="py-5">
      <div class="row">
        @if (Session::has('success'))
          <div class="message-container col-12">
            @foreach(Session::get('success') as $item)
              <p class="alert-success">{{ $item }}</p>
            @endforeach
          </div>
        @endif
        @if (Session::has('errors'))
          <div class="message-container col-12">
            @foreach(Session::get('errors') as $item)
              <p class="alert-error">{{ $item }}</p>
            @endforeach
          </div>
        @endif
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link @if(!Session::has('flag')) active show @endif" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="@if(!Session::has('flag')) true @else false @endif">Thông tin cá nhân</a>
            <a class="nav-link" id="v-pills-edit-profile-tab" data-toggle="pill" href="#v-pills-edit-profile" role="tab" aria-controls="v-pills-edit-profile" aria-selected="false">Sửa thông tin cá nhân</a>
            <a class="nav-link @if(Session::get('flag') == 'password') active show @endif" id="v-pills-change-password-tab" data-toggle="pill" href="#v-pills-change-password" role="tab" aria-controls="v-pills-change-password" aria-selected="@if(Session::get('flag') == 'password') true @endif">Đổi mật khẩu</a>
            <a class="nav-link" id="v-pills-course-tab" data-toggle="pill" href="#v-pills-course" role="tab" aria-controls="v-pills-course" aria-selected="false">Khóa học</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade @if(!Session::has('flag')) active show @endif" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="border rounded p-3 bg-light">
                <p><i class="zmdi zmdi-info text-dark mr-2"></i>{{ $user->first_name . $user->last_name }}</p>
                <p><i class="zmdi zmdi-email text-dark mr-2"></i>{{ $user->email }}</p>
                <p><i class="zmdi zmdi-calendar-note text-dark mr-2"></i>{{ $user->date_of_birth }}</p>
                <p><i class="zmdi zmdi-gps-dot text-dark mr-2"></i>{{ $user->address }}</p>
                <p><i class="zmdi zmdi-phone-forwarded text-dark mr-2"></i>{{ $user->phone_number }}</p>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-profile" role="tabpanel" aria-labelledby="v-pills-edit-profile-tab">
              <div class="border rounded p-3 bg-light">
                <form action="/user/profile" method="POST">
                  @csrf
                  <div class="form-group row">
                    <label for="first-name" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-info text-dark mr-2"></i>Họ Và Tên Đệm</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="first-name" name="first-name" value="{{ $user->last_name }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="last-name" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-info text-dark mr-2"></i>Tên</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="last-name" name="last-name" value="{{ $user->first_name }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-email text-dark mr-2"></i>Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="date-of-birth" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-calendar-note text-dark mr-2"></i>Ngày sinh</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="date-of-birth" name="date-of-birth" value="{{ $user->date_of_birth }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-gps-dot text-dark mr-2"></i>Địa chỉ</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="phone-number" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-phone-forwarded text-dark mr-2"></i>Số điện thoại</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="phone-number" name="phone-number" value="{{ $user->phone_number }}">
                    </div>
                  </div>
                  <button class="btn btn-success my-3">Lưu thông tin</button>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-course" role="tabpanel" aria-labelledby="v-pills-course-tab">
              <div class="border rounded p-3 bg-light">
                <div class="list-course-registed">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="course__item border rounded">
                        <div class="course__item--img"><img src="{{asset('frontend/img/course/course-1.jpg')}}" alt="" srcset="" width="375" height="180"/></div>
                        <div class="course__item--content">
                          <h3 class="course__item--title"><a href="#">Khóa học tiếng Anh giao tiếp cơ bản</a></h3>
                          <p class="course__item--des">Trang bị kiến thức, hoàn thiện kỹ năng và rèn luyện chiến thuật làm bài để đạt điểm cao trong các kỳ thi quốc tế IELTS, TOEFL iBT nhằm đáp ứng nhu cầu học tập và công việc của mỗi học viên</p><a class="course__item--button" href="#">Xem chi tiết</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="course__item border rounded">
                        <div class="course__item--img"><img src="{{asset('frontend/img/course/course-1.jpg')}}" alt="" srcset="" width="375" height="180"/></div>
                        <div class="course__item--content">
                          <h3 class="course__item--title"><a href="#">Khóa học tiếng Anh giao tiếp cơ bản</a></h3>
                          <p class="course__item--des">Trang bị kiến thức, hoàn thiện kỹ năng và rèn luyện chiến thuật làm bài để đạt điểm cao trong các kỳ thi quốc tế IELTS, TOEFL iBT nhằm đáp ứng nhu cầu học tập và công việc của mỗi học viên</p><a class="course__item--button" href="#">Xem chi tiết</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="course__item border rounded">
                        <div class="course__item--img"><img src="{{asset('frontend/img/course/course-1.jpg')}}" alt="" srcset="" width="375" height="180"/></div>
                        <div class="course__item--content">
                          <h3 class="course__item--title"><a href="#">Khóa học tiếng Anh giao tiếp cơ bản</a></h3>
                          <p class="course__item--des">Trang bị kiến thức, hoàn thiện kỹ năng và rèn luyện chiến thuật làm bài để đạt điểm cao trong các kỳ thi quốc tế IELTS, TOEFL iBT nhằm đáp ứng nhu cầu học tập và công việc của mỗi học viên</p><a class="course__item--button" href="#">Xem chi tiết</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade @if(Session::get('flag') == 'password') active show @endif" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-change-password-tab">
              <div class="border rounded p-3 bg-light">
                <form action="/user/password" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="password" class="font-weight-bold"><i class="zmdi zmdi-shield-security text-dark mr-2"></i>Mật khẩu cũ</label>
                    <div class="d-block">
                      <input type="password" class="form-control max-w-300" id="password" name="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="new-password" class="font-weight-bold"><i class="zmdi zmdi-shield-security text-dark mr-2"></i>Mật khẩu mới</label>
                    <div class="d-block">
                      <input type="password" class="form-control max-w-300" id="new-password" name="new-password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="new-password-retype" class="font-weight-bold"><i class="zmdi zmdi-shield-security text-dark mr-2"></i>Nhập lại mật khẩu mới</label>
                    <div class="d-block">
                      <input type="password" class="form-control max-w-300" id="new-password-retype" name="new-password-retype">
                    </div>
                  </div>
                  <button class="btn btn-success my-3">Đổi mật khẩu</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection