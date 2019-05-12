@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="pt-5"></div>
    <div class="register-form">
      <h1 class="title">Đăng kí tài khoản</h1>
      <form action="/register" method="POST">
        @csrf
        <div class="form-group">
          <label for="registerLastName">Họ</label>
          <input class="form-control" id="registerLastName" type="text" name="last-name" placeholder="Họ" required>
        </div>
        <div class="form-group">
          <label for="registerName">Tên</label>
          <input class="form-control" id="registerName" type="text" name="first-name" placeholder="Tên" required>
        </div>
        <div class="form-group">
          <label for="registerEmail">Địa chỉ Email</label>
          <input class="form-control" id="registerEmail" type="email" name="email" placeholder="Nhập email" required>
        </div>
        <div class="form-group">
          <label for="registerBirthday">Ngày sinh</label>
          <input class="form-control" id="registerBirthday" type="date" name="date-of-birth" required>
        </div>
        <div class="form-group">
          <label for="registerName">Số điện thoại</label>
          <input class="form-control" id="registerPhone" type="text" name="phone" placeholder="Số điện thoại" required>
        </div>
        <div class="form-group">
          <label for="registerAddress">Địa chỉ nơi ở</label>
          <input class="form-control" id="registerAddress" type="text" name="address" placeholder="Địa chỉ của bạn" required>
        </div>
        <div class="form-group">
          <label for="registerPassword">Mật khẩu</label>
          <input class="form-control" id="registerPassword" type="password" name="password" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="form-group">
          <label for="retypeRegisterPassword">Nhập lại mật khẩu</label>
          <input class="form-control" id="retypeRegisterPassword" type="password" name="password-confirmation" placeholder="Nhập lại mật khẩu" required>
        </div>
        <div class="form-group form-check">
          <input class="form-check-input" id="agreeRules" type="checkbox" required>
          <label class="form-check-label" for="agreeRules">Tôi hoàn toàn đồng ý với những điều khoản của trung tâm!</label>
        </div>
        <button class="btn btn-primary" id="btn-register" type="submit">Đăng kí</button>
      </form>
    </div>
    <div class="pt-5"></div>
  </div>
</div>
@endsection
