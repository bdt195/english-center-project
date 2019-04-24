@extends('frontend/layout-master/layout-default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="pt-5"></div>
    <div class="login-form">
      <h1 class="title">Login</h1>
      <form action="#">
        <form>
          <div class="form-group">
            <label for="loginEmail">Email address</label>
            <input class="form-control" id="loginEmail" type="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="loginPassword">Password</label>
            <input class="form-control" id="loginPassword" type="password" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input class="form-check-input" id="rememberPassword" type="checkbox">
            <label class="form-check-label" for="rememberPassword">Remember me</label>
          </div>
          <button class="btn btn-primary" id="btn-login" type="submit">Login</button>
        </form>
      </form>
    </div>
    <div class="pt-5"></div>
  </div>
</div>
@endsection
