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
            CKEDITOR.replace('description')
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
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
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
                        <form class="form-horizontal" method="POST" action="/admin/course" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="code" class="col-sm-3 control-label">Course Code</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="code" name="code">
                                    </div>
                                </div>
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
                                    <label for="name" class="col-sm-3 control-label">Name</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start-date" class="col-sm-3 control-label">Start Date</label>

                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="start-date" name="start-date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-sm-3 control-label">Price</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="price" name="price"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="teacher" class="col-sm-3 control-label">Teacher</label>

                                    <div class="col-sm-8">
                                        <select class="form-control" id="teacher" name="teacher[]" multiple>
                                            @foreach($teachers as $teacher)
                                                <option value="{{ $teacher->id }}">{{ $teacher->id }} - {{ $teacher->first_name . ' ' . $teacher->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="schedule" class="col-sm-3 control-label">Schedule</label>

                                    <div class="col-sm-8">
                                        <table id="schedule">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Monday</th>
                                                    <th>Tuesday</th>
                                                    <th>Wenesday</th>
                                                    <th>Thursday</th>
                                                    <th>Friday</th>
                                                    <th>Saturday</th>
                                                    <th>Sunday</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Morning</th>
                                                    <td><input type="checkbox" name="schedule[]" value="1"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="4"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="7"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="10"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="13"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="16"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="19"></td>
                                                </tr>
                                                <tr>
                                                    <th>Afternoon</th>
                                                    <td><input type="checkbox" name="schedule[]" value="2"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="5"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="8"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="11"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="14"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="17"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="20"></td>
                                                </tr>
                                                <tr>
                                                    <th>Evening</th>
                                                    <td><input type="checkbox" name="schedule[]" value="3"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="6"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="9"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="12"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="15"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="18"></td>
                                                    <td><input type="checkbox" name="schedule[]" value="21"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="avatar" class="col-sm-3 control-label">Ảnh đại diện</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" id="avatar" name="avatar"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sort-description" class="col-sm-3 control-label">Mô tả ngắn</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="sort-description" name="sort-description"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-3 control-label">Description</label>

                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="description" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Trạng thái</label>

                                <div class="col-sm-8">
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" selected>Mở</option>
                                        <option value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="show-in-slider" class="col-sm-3 control-label">Khóa học nổi bật</label>

                                <div class="col-sm-8">
                                    <select class="form-control" id="show-in-slider" name="show-in-slider">
                                        <option value="0" selected>Không</option>
                                        <option value="1">Có</option>
                                    </select>
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