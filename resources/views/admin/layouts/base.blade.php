<!DOCTYPE html>
<html>

@include('admin.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.partials.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.partials.main-sidebar')

    <!-- Content Wrapper. Contains page content -->
    @section('content-section')
    @show
    <!-- /.content-wrapper -->

    @include('admin.partials.main-footer')

    <!-- Control Sidebar -->
    @include('admin.partials.control-sidebar')

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('admin.partials.js-libs')
</body>
</html>
