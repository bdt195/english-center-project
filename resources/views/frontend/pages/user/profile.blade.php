@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="py-5">
      <div class="row">
        <div class="col-3">
          <div class="avatar-profile" style="background-image: url('{{asset('frontend/img/course/course-1.jpg')}}')"></div>
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Thông tin cá nhân</a>
            <a class="nav-link" id="v-pills-edit-profile-tab" data-toggle="pill" href="#v-pills-edit-profile" role="tab" aria-controls="v-pills-edit-profile" aria-selected="true">Sửa thông tin cá nhân</a>
            <a class="nav-link" id="v-pills-change-password-tab" data-toggle="pill" href="#v-pills-change-password" role="tab" aria-controls="v-pills-change-password" aria-selected="false">Đổi mật khẩu</a>
            <a class="nav-link" id="v-pills-course-tab" data-toggle="pill" href="#v-pills-course" role="tab" aria-controls="v-pills-course" aria-selected="false">Khóa học</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="border rounded p-3 bg-light">
                <p><i class="zmdi zmdi-info text-dark mr-2"></i>Nguyen Van A</p>
                <p><i class="zmdi zmdi-email text-dark mr-2"></i>nguyenvana@gmail.com</p>
                <p><i class="zmdi zmdi-calendar-note text-dark mr-2"></i>01/01/1996</p>
                <p><i class="zmdi zmdi-gps-dot text-dark mr-2"></i>Cau giay, Ha Noi</p>
                <p><i class="zmdi zmdi-phone-forwarded text-dark mr-2"></i>098 999 999</p>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-profile" role="tabpanel" aria-labelledby="v-pills-edit-profile-tab">
              <div class="border rounded p-3 bg-light">
                <form action="">
                  <div class="form-group row">
                    <label for="staticFirstName" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-info text-dark mr-2"></i>Tên họ</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticFirstName" value="Nguyen">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticLastName" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-info text-dark mr-2"></i>Tên đệm</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticLastName" value="Van A">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-email text-dark mr-2"></i>Email</label>
                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticBirthday" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-calendar-note text-dark mr-2"></i>Ngày sinh</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="staticBirthday" value="1996-01-01">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticAddress" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-gps-dot text-dark mr-2"></i>Địa chỉ</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticAddress" value="Cau Giay, Ha Noi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticPhone" class="col-sm-3 col-form-label font-weight-bold"><i class="zmdi zmdi-phone-forwarded text-dark mr-2"></i>Số điện thoại</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticPhone" value="098 999 999">
                    </div>
                  </div>
                  <button class="btn btn-success my-3">Sửa thông tin</button>
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
            <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-change-password-tab">
              <div class="border rounded p-3 bg-light">
                <form action="">
                  <div class="form-group">
                    <label for="staticOldPassword" class="font-weight-bold"><i class="zmdi zmdi-shield-security text-dark mr-2"></i>Mật khẩu cũ</label>
                    <div class="d-block">
                      <input type="password" class="form-control max-w-300" id="staticOldPassword">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="staticNewPassword" class="font-weight-bold"><i class="zmdi zmdi-shield-security text-dark mr-2"></i>Mật khẩu mới</label>
                    <div class="d-block">
                      <input type="password" class="form-control max-w-300" id="staticNewPassword">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="staticReNewPassword" class="font-weight-bold"><i class="zmdi zmdi-shield-security text-dark mr-2"></i>Nhập lại mật khẩu mới</label>
                    <div class="d-block">
                      <input type="password" class="form-control max-w-300" id="staticReNewPassword">
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