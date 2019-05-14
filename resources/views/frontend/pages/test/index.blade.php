@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="pt-5"></div>
    <div class="register-test-form col-lg-8 offset-lg-2">
      <h1 class="title">Đăng kí kiểm tra trình độ</h1>
      @if (Session::has('errors'))
        <div class="message-container">
          @foreach(Session::get('errors') as $item)
            <p class="alert-error">{{ $item }}</p>
          @endforeach
        </div>
      @endif
      <form action="/test" method="POST">
        @csrf
        @if(!Auth::check())
        <div class="form-group">
          <label for="last-name" class="font-weight-bold">Họ</label>
          <input class="form-control" id="last-name" name="last-name" type="text">
        </div>
        <div class="form-group">
          <label for="first-name" class="font-weight-bold">Tên</label>
          <input class="form-control" id="first-name" name="first-name" type="text">
        </div>
        <div class="form-group">
          <label for="email" class="font-weight-bold">Địa chỉ email</label>
          <input class="form-control" id="email" type="email" name="email" placeholder="Nhập email">
        </div>
        <div class="form-group">
          <label for="date-of-birth" class="font-weight-bold">Ngày sinh</label>
          <input class="form-control" id="date-of-birth" name="date-of-birth" type="date" placeholder="Nhập ngày sinh của bạn">
        </div>
        <div class="form-group">
          <label for="phone" class="font-weight-bold">Số điện thoại</label>
          <input class="form-control" id="phone" name="phone" type="text" placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group mb-4">
          <label for="address" class="font-weight-bold">Địa chỉ</label>
          <input class="form-control" id="address" name="address" type="tel" placeholder="Nhập địa chỉ">
        </div>
        @endif
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <label class="input-group-text font-weight-bold" for="test-id">Chọn buổi thi</label>
          </div>
          <select class="custom-select" id="test-id" name="test-id">
            <option value="" selected disabled>Vui lòng chọn buổi thi</option>
            @foreach($tests as $test)
            <option value="{{ $test->id }}">{{ $test->category->name . ' - ' . $test->facility->name . ' ' . $test->schedule . ' Ngày ' . $test->date}}</option>
            @endforeach
          </select>
        </div>
        @if(Auth::check())
        <p>Thông tin tài khoản của bạn sẽ được sử dụng để đăng ký</p>
        @endif
        <div class="form-group form-check">
          <input class="form-check-input" id="rememberPassword" type="checkbox">
          <label class="form-check-label" for="rememberPassword">Tôi đã đọc rõ những điều khoản và quy chế</label>
        </div>
        <button class="btn btn-primary" id="btn-login" type="submit">Đăng ký thi</button>
      </form>
    </div>
    <div class="pt-5"></div>
  </div>
</div>
@endsection