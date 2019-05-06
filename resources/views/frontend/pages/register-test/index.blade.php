@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="pt-5"></div>
    <div class="register-test-form col-lg-8 offset-lg-2">
      <h1 class="title">Đăng kí thi</h1>
      <form action="#">
        <form>
          <div class="form-group">
            <label for="registerTestName" class="font-weight-bold"">Tên đầy đủ</label>
            <input class="form-control" id="registerTestName" type="text" placeholder="Tên đầy đủ của bạn">
          </div>
          <div class="form-group">
            <label for="registerTestEmail" class="font-weight-bold">Địa chỉ email</label>
            <input class="form-control" id="registerTestEmail" type="email" placeholder="Nhập email">
          </div>
          <div class="form-group">
            <label for="registerTestBirthday" class="font-weight-bold">Ngày sinh</label>
            <input class="form-control" id="registerBirthday" type="date" placeholder="Nhập ngày sinh của bạn">
          </div>
          <div class="form-group">
            <label for="registerTestPhone" class="font-weight-bold">Số điện thoại</label>
            <input class="form-control" id="registerTestPhone" type="tel" placeholder="Nhập số điện thoại">
          </div>
          <div class="form-group mb-4">
            <label for="registerTestAddress" class="font-weight-bold">Địa chỉ</label>
            <input class="form-control" id="registerTestAddress" type="tel" placeholder="Nhập địa chỉ">
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <label class="input-group-text font-weight-bold" for="registerTestSelectTimeTest">Chọn ca thi</label>
            </div>
            <select class="custom-select" id="registerTestSelectTimeTest">
              <option selected>Ca 1 (7h-9h)</option>
              <option value="1">Ca 2 (9h-11h)</option>
              <option value="1">Ca 1 (13h-15h)</option>
              <option value="1">Ca 1 (15h-17h)</option>
            </select>
          </div>
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <label class="input-group-text font-weight-bold" for="registerTestSelectSubjectTest">Chọn môn thi</label>
            </div>
            <select class="custom-select" id="registerTestSelectSubjectTest">
              <option selected>Tiếng Anh</option>
              <option value="1">Tiếng Đức</option>
              <option value="1">Tiếng Pháp</option>
              <option value="1">Tiếng Nhật</option>
            </select>
          </div>

          <div class="form-group form-check">
            <input class="form-check-input" id="rememberPassword" type="checkbox">
            <label class="form-check-label" for="rememberPassword">Tôi đã đọc rõ những điều khoản và quy chế</label>
          </div>
          <button class="btn btn-primary" id="btn-login" type="submit">Đăng ký thi</button>
        </form>
      </form>
    </div>
    <div class="pt-5"></div>
  </div>
</div>
@endsection