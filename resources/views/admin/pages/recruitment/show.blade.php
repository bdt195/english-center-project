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
            {{ $recruitment->title }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Recruitment</a></li>
            <li class="active">Show</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (Session::has('success'))
            <div class="message-container">
                @foreach(Session::get('success') as $item)
                <div class="alert alert-success alert-dismissible">
                    <p>{{ $item }}</p>
                </div>
                @endforeach
            </div>
        @endif
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
                                <th>Trạng thái</th>
                                <th>Tên file</th>
                                <th>Kiểu file</th>
                                <th>Ngày gửi</th>
                                <th>Chấp nhận</th>
                                <th>Từ chối</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($recruitment->cv as $cv)
                                <tr>
                                    <td>{{ $cv->id }}</td>
                                    @if($cv->status == 0) <td><span class="label label-danger">Đã từ chối</span></td> @endif
                                    @if($cv->status == 1) <td><span class="label label-warning">Đang chờ</span></td> @endif
                                    @if($cv->status == 2) <td><span class="label label-success">Đã chấp nhận</span></td> @endif
                                    <td><a href="/{{ $cv->file_path }}">{{ $cv->file_name }}</a></td>
                                    <td>{{ $cv->file_type }}</td>
                                    <td>{{ $cv->created_at }}</td>
                                    <td><a href="{{ URL::current() . "?cv=$cv->id&action=2" }}"><span class="label label-success">Chấp nhận</span></a></td>
                                    <td><a href="{{ URL::current() . "?cv=$cv->id&action=0" }}"><span class="label label-danger">Từ chối</span></a></td>
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