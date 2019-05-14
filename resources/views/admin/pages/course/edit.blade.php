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
                Sửa thông tin khóa học
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li><a href="#">Course</a></li>
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
                        <form class="form-horizontal" method="POST" action="/admin/course/{{ $course->id }}" enctype="multipart/form-data">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="code" class="col-sm-3 control-label">Course Code</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="code" name="code" value="{{ $course->code }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="facility" class="col-sm-3 control-label">Cơ sở</label>

                                    <div class="col-sm-8">
                                        <select class="form-control" id="facility" name="facility">
                                            @foreach($facilities as $facility)
                                                <option value="{{ $facility->id }}" @if($course->facility_id == $facility->id) selected @endif>{{ $facility->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Name</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start-date" class="col-sm-3 control-label">Start Date</label>

                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="start-date" name="start-date" value="{{ $course->start_date }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-sm-3 control-label">Price</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="price" name="price" value="{{ $course->price }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="teacher" class="col-sm-3 control-label">Teacher</label>

                                    <div class="col-sm-8">
                                        <select class="form-control" id="teacher" name="teacher[]" multiple>
                                            @foreach($teachers as $teacher)
                                                <option value="{{ $teacher->id }}" @if(in_array($teacher->id, $course->teachers)) selected @endif>{{ $teacher->id }} - {{ $teacher->first_name . ' ' . $teacher->last_name }}</option>
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
                                                <td><input type="checkbox" name="schedule[]" value="1" @if(in_array(1, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="4" @if(in_array(4, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="7" @if(in_array(7, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="10" @if(in_array(10, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="13" @if(in_array(13, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="16" @if(in_array(16, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="19" @if(in_array(19, $course->schedule)) checked @endif></td>
                                            </tr>
                                            <tr>
                                                <th>Afternoon</th>
                                                <td><input type="checkbox" name="schedule[]" value="2" @if(in_array(2, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="5" @if(in_array(5, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="8" @if(in_array(8, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="11" @if(in_array(11, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="14" @if(in_array(14, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="17" @if(in_array(17, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="20" @if(in_array(20, $course->schedule)) checked @endif></td>
                                            </tr>
                                            <tr>
                                                <th>Evening</th>
                                                <td><input type="checkbox" name="schedule[]" value="3" @if(in_array(3, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="6" @if(in_array(6, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="9" @if(in_array(9, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="12" @if(in_array(12, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="15" @if(in_array(15, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="18" @if(in_array(18, $course->schedule)) checked @endif></td>
                                                <td><input type="checkbox" name="schedule[]" value="21" @if(in_array(21, $course->schedule)) checked @endif></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="avatar" class="col-sm-3 control-label">Ảnh đại diện</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" id="avatar" name="avatar">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sort-description" class="col-sm-3 control-label">Mô tả ngắn</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="sort-description" name="sort-description" value="{{ $course->sort_description }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-3 control-label">Description</label>

                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="description" name="description">{{ $course->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Trạng thái</label>

                                <div class="col-sm-8">
                                    <select class="form-control" id="status" name="status">
                                        <option value="0" @if($course->status == 0) selected @endif>Khóa</option>
                                        <option value="1" @if($course->status == 1) selected @endif>Mở</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="show-in-slider" class="col-sm-3 control-label">Khóa học nổi bật</label>

                                <div class="col-sm-8">
                                    <select class="form-control" id="show-in-slider" name="show-in-slider">
                                        <option value="0" @if($course->status == 0) selected @endif>Không</option>
                                        <option value="1"  @if($course->status == 1) selected @endif>Có</option>
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