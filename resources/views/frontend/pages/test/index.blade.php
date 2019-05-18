@extends('frontend/layouts/default')
<?php
$result = [];
$user  = Auth::user();
$tests = $user->tests;

$pair =  DB::table('student_test')->where('student_id', $user->id)->get();
foreach($pair as $item1){
  foreach($tests as $item2){
    if($item2->id == $item1->test_id){
      $result[] = [
        'name' => $item2->category->name . ' - ' . $item2->facility->name . ' ' . $item2->schedule . ' Ngày ' . $item2->date,
        'score' =>$item1->score
      ];
    }
  }
}

?>
@section('content')
<div class="main-content-container">
  <div class="container">
    <div class="py-5"></div>
    @if(!$user)
      <div>
        <p>Vui lòng đăng nhập để sử dụng chức năng này.</p>
      </div>
    @else
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active show" id="v-pills-edit-profile-tab" data-toggle="pill" href="#v-pills-edit-profile" role="tab" aria-controls="v-pills-edit-profile" aria-selected="false">Đăng ký thi</a>
            <a class="nav-link" id="v-pills-course-tab" data-toggle="pill" href="#v-pills-course" role="tab" aria-controls="v-pills-course" aria-selected="false">Xem kết quả</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            @if (!Session::has('flag') && Session::has('success'))
              <div class="message-container col-12 alert-success m-0 mb-3 py-2 px-3 rounded">
                @foreach(Session::get('success') as $item)
                  <p class="m-0">{{ $item }}</p>
                @endforeach
              </div>
            @endif
            <div class="tab-pane fade active show" id="v-pills-edit-profile" role="tabpanel" aria-labelledby="v-pills-edit-profile-tab">
              <div class="border rounded p-3 bg-light">
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
                    <div class=http://localhost/test"input-group-prepend">
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
            </div>
            <div class="tab-pane fade" id="v-pills-course" role="tabpanel" aria-labelledby="v-pills-course-tab">
              <div class="border rounded p-3 bg-light">
                <div class="score">
                  <table class="table-bordered">
                    <tr>
                      <th>Buổi thi</th>
                      <th>Kết quả</th>
                    </tr>
                    @foreach($result as $item)
                      <tr>
                        <td>{{$item["name"]}}</td>
                        <td>{{ $item["score"] }}</td>
                      </tr>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    <div class="py-5"></div>
  </div>
</div>
@endsection