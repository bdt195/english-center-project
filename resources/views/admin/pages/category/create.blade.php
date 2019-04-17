@extends('admin.layouts.base')

@section('content-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create New Category
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Category</a></li>
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
                        <form class="form-horizontal" method="POST" action="/admin/category">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category-name" class="col-sm-3 control-label">Name</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="category-name" name="category-name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="parent-category-id" class="col-sm-3 control-label">Parent Category</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="parent-category-id" name="parent-category-id">
                                            @foreach ($categoryCollection as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Create</button>
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