@extends('admin.layouts.base')

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
                Create New Course
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Course</a></li>
                <li class="active">Create</li>
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
                        <form class="form-horizontal" method="POST" action="/admin/course">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="first-name" class="col-sm-3 control-label">Course Code</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="first-name" name="first-name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last-name" class="col-sm-3 control-label">Name</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="first-name" name="last-name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Start Date</label>

                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date-of-birth" class="col-sm-3 control-label">Schedule</label>

                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="date-of-birth" name="date-of-birth" value="{{ $student->date_of_birth }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date-of-birth" class="col-sm-3 control-label">Schedule</label>

                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="date-of-birth" name="date-of-birth" value="{{ $student->date_of_birth }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">Password</label>

                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone-number" class="col-sm-3 control-label">Phone Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="phone-number" name="phone-number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-3 control-label">Address</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="address" name="address"></textarea>
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