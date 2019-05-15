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
            Tất cả danh mục
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">QUản lý nội dung</a></li>
            <li class="active">Danh mục</li>
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
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Parent Category</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoryCollection as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    @if (!empty($category->parentCategory->name))
                                    <td>{{ $category->parentCategory->name }}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    @if($category->id != 1)
                                    <td><a href="/admin/category/{{ $category->id }}/edit"><span class="label label-success">Sửa</span></a></td>
                                    <td><a href=""><span class="label label-danger">Xóa</span></a></td>
                                    @endif
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