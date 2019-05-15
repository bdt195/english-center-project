@extends('admin.layouts.base')

@section('content-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chỉnh sửa danh mục {{ $category->name }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li><a href="#">Danh mục</a></li>
                <li class="active">Sửa</li>
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
                        <form class="form-horizontal" method="POST" action="/admin/category/{{ $category->id }}">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="box-body">
                                <div class="form-group hidden">
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="category-id" name="category-id" value="{{ $category->id }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category-name" class="col-sm-3 control-label">Tên</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="category-name" name="category-name" value="{{ $category->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="parent-category-id" class="col-sm-3 control-label">Parent Category</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="parent-category-id" name="parent-category-id">
                                            @foreach ($categoryCollection as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $category->id) selected @endif>
                                                {{ $item->name }}
                                            </option>
                                            @endforeach
                                        </select>
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