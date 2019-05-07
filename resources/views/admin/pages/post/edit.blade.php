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
                Edit Post {{ $post->title }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Post</a></li>
                <li class="active">Edit</li>
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
                                    <label for="title" class="col-sm-3 control-label">Title</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="author" class="col-sm-3 control-label">Author</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category-id" class="col-sm-3 control-label">Category</label>
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
                                    <label for="status" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="status" name="status">
                                            <option value="1" @if ($post->status == 1) selected @endif>Enable</option>
                                            <option value="0" @if ($post->status == 0) selected @endif>Disable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-3 control-label">Content</label>
                                    <div class="col-sm-8">
                                        <textarea id="content" name="content" rows="10" cols="80">{{ $post->content }}</textarea>
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