@extends('admin.layouts.base')

@section('content-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sửa thông tin liên hệ
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li><a href="#">Liên hệ</a></li>
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
                        <form class="form-horizontal" method="POST" action="/admin/contact/{{ $contact->id }}">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="first-name" class="col-sm-3 control-label">Tên</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="first-name" name="first-name" value="{{ $contact->first_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last-name" class="col-sm-3 control-label">Họ và tên đệm</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="first-name" name="last-name" value="{{ $contact->last_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Email</label>

                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone-number" class="col-sm-3 control-label">Số điện thoại</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="phone-number" name="phone-number"  value="{{ $contact->phone_number }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="address" name="address" value="{{ $contact->address }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-3 control-label">Nội dung</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="content" name="content">{{ $contact->content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-3 control-label">Trạng thái</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="status" name="status">
                                            <option value="1">Mới</option>
                                            <option value="2">Đã xem</option>
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