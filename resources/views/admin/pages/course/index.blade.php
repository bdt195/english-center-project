@extends('admin.layouts.base')

@section('additional-resource')
<!-- DataTables -->
<link rel="stylesheet" href="/static/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection

@section('additional-script')
<!-- DataTables -->
<script src="/static/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/static/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
@endsection

@section('content-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Course
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Course</a></li>
            <li class="active">Course</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Course Code</th>
                                <th>Name</th>
                                <th>Start Date</th>
                                <th>Schedule</th>
                                <th>Price</th>
                                <th>Teacher</th>
                                <th>Status</th>
                                <th>Show In Slider</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($courseCollection as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->code }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->start_date }}</td>
                                    <td>{{ $course->schedule }}</td>
                                    <td>{{ $course->price }}</td>
                                    <td>{{ $course->teachers }}</td>
                                    <td>{{ $course->status }}</td>
                                    <td>{{ $course->show_in_slider }}</td>
                                    <td><a href="/admin/course/{{ $course->id }}/edit"><span class="label label-success">Edit</span></a></td>
                                    <td><a href=""><span class="label label-danger">Delete</span></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection