@extends('admin.layouts.base')

@section('content-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sửa thông tin buổi thi
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li><a href="#">Thi thử</a></li>
                <li class="active">Chỉnh sửa</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- right column -->
                <div class="col-md-10">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST" action="/admin/test/{{ $test->id }}">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Ngôn ngữ</label>

                                    <div class="col-sm-8">
                                        <select class="form-control" id="category" name="category">
                                            @foreach($courseCategory as $category)
                                                <option value="{{ $category->id }}" @if($test->category->id == $category->id) selected @endif>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Cơ sở</label>

                                    <div class="col-sm-8">
                                        <select class="form-control" id="facility" name="facility">
                                            @foreach($facilities as $facility)
                                                <option value="{{ $facility->id }}" @if($test->facility->id == $facility->id) selected @endif>{{ $facility->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="code" class="col-sm-3 control-label">Mã buổi thi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="code" name="code" value="{{ $test->code }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="col-sm-3 control-label">Ngày thi</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="date" name="date">
                                            @for($i = 1; $i < 30; $i++)
                                                <option value="{{ $i }}" @if($test->date == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="schedule" class="col-sm-3 control-label">Ca thi</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="schedule" name="schedule">
                                            <option value="1" @if($test->schedule == 1) selected @endif>Sáng</option>
                                            <option value="2" @if($test->schedule == 2) selected @endif>Chiều</option>
                                            <option value="3" @if($test->schedule == 3) selected @endif>Tối</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-3 control-label">Trạng thái</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="status" name="status">
                                            <option value="0" @if($test->status == 0) selected @endif>Đóng</option>
                                            <option value="1"  @if($test->status == 1) selected @endif>Mở</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection