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
            Danh sách buổi thi
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Buổi thi</a></li>
            <li class="active">Danh sách buổi thi</li>
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
                                <th>Ngôn ngữ</th>
                                <th>Cơ sở</th>
                                <th>Mã buổi thi</th>
                                <th>Ngày thi</th>
                                <th>Ca thi</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($testCollection as $test)
                                <tr>
                                    <td><a href="/admin/test/{{ $test->id }}">{{ $test->id }}</a></td>
                                    <td>{{ $test->category->name }}</td>
                                    <td>{{ $test->facility->name }}</td>
                                    <td>{{ $test->code }}</td>
                                    <td>{{ $test->date }}</td>
                                    <td>{{ $test->schedule }}</td>
                                    <td>{{ $test->created_at }}</td>
                                    <td>{{ $test->updated_at }}</td>
                                    <td><a href="/admin/test/{{ $test->id }}/edit"><span class="label label-success">Sửa</span></a></td>
                                    <td><a href=""><span class="label label-danger">Xóa</span></a></td>
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