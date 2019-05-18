@extends('admin.layouts.base')

@section('additional-resource')
    <style>
        table#schedule {
            border: 1px solid #ccc;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 5px;
            text-align: center;
        }
    </style>
@endsection

@section('additional-script')
    <!-- CK Editor -->
    <script src="/static/admin/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace('content')
        })
    </script>
@endsection

@section('content-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create New Recruitment
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li><a href="#">Recruitment</a></li>
                <li class="active">Tạo</li>
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
                        <form class="form-horizontal" method="POST" action="/admin/recruitment">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="facility" class="col-sm-3 control-label">Cơ sở</label>

                                    <div class="col-sm-8">
                                        <select class="form-control" id="facility" name="facility">
                                            @foreach($facilities as $facility)
                                                <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">Tiêu đề</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-3 control-label">Nội dung</label>

                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="content" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="expire-date" class="col-sm-3 control-label">Ngày hết hạn</label>

                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="expire-date" name="expire-date">
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