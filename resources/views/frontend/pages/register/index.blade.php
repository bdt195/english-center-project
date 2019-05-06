@extends('frontend/layouts/default')
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="pt-5"></div>
    <div class="register-form">
      <h1 class="title">Register</h1>
      <form action="#">
        <form>
          <div class="form-group">
            <label for="registerEmail">Email address</label>
            <input class="form-control" id="registerEmail" type="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="registerPassword">Password</label>
            <input class="form-control" id="registerPassword" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="retypeRegisterPassword">Retype Password</label>
            <input class="form-control" id="retypeRegisterPassword" type="password" placeholder="Retype Password">
          </div>
          <div class="form-group">
            <label for="registerName">Full Name</label>
            <input class="form-control" id="registerName" type="text" placeholder="Full Name">
          </div>
          <div class="form-group">
            <label for="registerName">Phone Number</label>
            <input class="form-control" id="registerPhone" type="text" placeholder="PhoneNumber">
          </div>
          <div class="form-group form-check">
            <input class="form-check-input" id="agreeRules" type="checkbox">
            <label class="form-check-label" for="agreeRules">Agree with our rules!</label>
          </div>
          <button class="btn btn-primary" id="btn-register" type="submit">Register</button>
        </form>
      </form>
    </div>
    <div class="pt-5"></div>
  </div>
</div>
@endsection
