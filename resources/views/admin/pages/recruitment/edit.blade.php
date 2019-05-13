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
                Edit Recruitment
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Recruitment</a></li>
                <li class="active">Edit</li>
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
                        <form class="form-horizontal" method="POST" action="/admin/recruitment/{{ $recruitment->id }}">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">Title</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $recruitment->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-3 control-label">Content</label>

                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="content" name="content">{{ $recruitment->content }}"</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="expire-date" class="col-sm-3 control-label">Expire Date</label>

                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="expire-date" name="expire-date" value="{{ $recruitment->expire_date }}">
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