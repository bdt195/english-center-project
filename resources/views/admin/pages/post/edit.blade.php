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
                Chỉnh sửa bài viết {{ $post->title }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                <li><a href="#">Post</a></li>
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
                        <form class="form-horizontal" method="POST" action="/admin/post/{{ $post->id }}">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">Tiêu đề</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="author" class="col-sm-3 control-label">Tác giả</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category-id" class="col-sm-3 control-label">Danh mục</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category-id" name="category-id">
                                            @foreach ($categoryCollection as $category)
                                            <option value="{{ $category->id }}" @if ($category->id == $post->category_id) selected @endif>
                                                {{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-3 control-label">Trạng thái</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="status" name="status">
                                            <option value="1" @if ($post->status == 1) selected @endif>Hiện</option>
                                            <option value="0" @if ($post->status == 0) selected @endif>Ẩn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-3 control-label">Nội dung</label>
                                    <div class="col-sm-8">
                                        <textarea id="content" name="content" rows="10" cols="80">{{ $post->content }}</textarea>
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