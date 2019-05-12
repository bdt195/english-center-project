@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="pt-5"></div>
    <div class="register-form">
      <h1 class="title">Đăng kí tài khoản</h1>
      <form action="#">
        <form>
          <div class="form-group">
            <label for="registerEmail">Địa chỉ Email</label>
            <input class="form-control" id="registerEmail" type="email" placeholder="Nhập email">
          </div>
          <div class="form-group">
            <label for="registerPassword">Mật khẩu</label>
            <input class="form-control" id="registerPassword" type="password" placeholder="Nhập mật khẩu">
          </div>
          <div class="form-group">
            <label for="retypeRegisterPassword">Nhập lại mật khẩu</label>
            <input class="form-control" id="retypeRegisterPassword" type="password" placeholder="Nhập lại mật khẩu">
          </div>
          <div class="form-group">
            <label for="registerLastName">Họ</label>
            <input class="form-control" id="registerLastName" type="text" placeholder="Họ">
          </div>
          <div class="form-group">
            <label for="registerName">Tên</label>
            <input class="form-control" id="registerName" type="text" placeholder="Tên">
          </div>
          <div class="form-group">
            <label for="registerBirthday">Ngày sinh</label>
            <input class="form-control" id="registerBirthday" type="date">
          </div>
          <div class="form-group">
            <label for="registerName">Số điện thoại</label>
            <input class="form-control" id="registerPhone" type="text" placeholder="Số điện thoại">
          </div>
          <div class="form-group">
            <label for="registerAddress">Địa chỉ nơi ở</label>
            <input class="form-control" id="registerAddress" type="email" placeholder="Địa chỉ của bạn">
          </div>
          <div class="form-group form-check">
            <input class="form-check-input" id="agreeRules" type="checkbox">
            <label class="form-check-label" for="agreeRules">Tôi hoàn toàn đồng ý với những điều khoản của trung tâm!</label>
          </div>
          <button class="btn btn-primary" id="btn-register" type="submit">Đăng kí</button>
        </form>
      </form>
    </div>
    <div class="pt-5"></div>
  </div>
</div>
@endsection
