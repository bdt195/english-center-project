@extends('admin.layouts.base')

@section('content-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sửa thông tin cơ sở
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li><a href="#">Cơ sở</a></li>
                <li class="active">Sửa thông tin</li>
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
                        <form class="form-horizontal" method="POST" action="/admin/facility/{{ $facility->id }}">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Tên cơ sở</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $facility->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone-number" class="col-sm-3 control-label">Số điện thoại</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="phone-number" name="phone-number" value="{{ $facility->phone_number }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="address" name="address" value="{{ $facility->address }}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
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