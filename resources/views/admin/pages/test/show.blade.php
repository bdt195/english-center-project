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
            Danh sách đăng ký buổi thi
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Thi thử</a></li>
            <li class="active">Danh sách đăng ký</li>
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
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($studentCollection as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    {{ $status = DB::table('student_test')->where('student_id', $student->id)->where('test_id', 1)->first()->status }}
                                    @if($status == 0) <td><span class="label label-danger">Chưa đóng phí</span></td> @endif
                                    @if($status == 1) <td><span class="label label-success">Đã đóng phí</span></td> @endif
                                    <td>{{ $student->first_name . ' ' . $student->last_name }}</td>
                                    <td>{{ $student->date_of_birth }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone_number }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->created_at }}</td>
                                    <td>{{ $student->updated_at }}</td>
                                    @if($status == 0) <td><a href="{{ URL::current() . "?student=$student->id&action=edit&value=1" }}"><span class="label label-success">Nộp phí</span></a></td>@endif
                                    @if($status == 1) <td><a href="{{ URL::current() . "?student=$student->id&action=edit&value=0" }}"><span class="label label-success">Hủy nộp phí</span></a></td>@endif
                                    <td><a href="{{ URL::current() . "?student=$student->id&action=delete" }}"><span class="label label-danger">Xóa</span></a></td>
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