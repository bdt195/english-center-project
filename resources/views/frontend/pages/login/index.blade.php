@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="pt-5"></div>
    <div class="login-form">
      <h1 class="title">Login</h1>
      <form action="/login" method="POST">
          @csrf
          <div class="form-group">
            <label for="loginEmail">Email</label>
            <input class="form-control" id="loginEmail" type="email" name="email" placeholder="Nhập email">
          </div>
          <div class="form-group">
            <label for="loginPassword">Mật khẩu</label>
            <input class="form-control" id="loginPassword" type="password" name="password" placeholder="Nhập mật khẩu">
          </div>
          <div class="form-group form-check">
            <input class="form-check-input" id="rememberPassword" type="checkbox">
            <label class="form-check-label" for="rememberPassword">Ghi nhớ tài khoản</label>
          </div>
          <button class="btn btn-primary" id="btn-login" type="submit">Đăng Nhập</button>
      </form>
    </div>
    <div class="pt-5"></div>
  </div>
</div>
@endsection
