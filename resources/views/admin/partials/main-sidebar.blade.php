<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/static/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Quản lý nội dung</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/category/create"><i class="fa fa-circle-o"></i> Danh mục mới</a></li>
                    <li><a href="/admin/category"><i class="fa fa-circle-o"></i> Danh sách danh mục</a></li>
                    <li><a href="/admin/post/create"><i class="fa fa-circle-o"></i> Bài viết mới</a></li>
                    <li><a href="/admin/post"><i class="fa fa-circle-o"></i> Tất cả bài viết</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Học viên</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/student/create"><i class="fa fa-circle-o"></i> Tạo học viên mới</a></li>
                    <li><a href="/admin/student"><i class="fa fa-circle-o"></i> Tất cả học viên</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Giảng viên</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/teacher/create"><i class="fa fa-circle-o"></i> Giảng viên mới</a></li>
                    <li><a href="/admin/teacher"><i class="fa fa-circle-o"></i> Tất cả giảng viên</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Khóa học</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/course/create"><i class="fa fa-circle-o"></i> Tạo khóa học mới</a></li>
                    <li><a href="/admin/course"><i class="fa fa-circle-o"></i> Tất cả khóa học</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Thi thử</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/test/create"><i class="fa fa-circle-o"></i> Tạo buổi thi thử mới</a></li>
                    <li><a href="/admin/test"><i class="fa fa-circle-o"></i> Danh sách buổi thi thử</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Tuyển dụng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/recruitment/create"><i class="fa fa-circle-o"></i> Tạo tin tuyển dụng</a></li>
                    <li><a href="/admin/recruitment"><i class="fa fa-circle-o"></i> Danh sách tin tuyển dụng</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Quản lý cơ sở</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/facility/create"><i class="fa fa-circle-o"></i> Tạo cơ sở mới</a></li>
                    <li><a href="/admin/facility"><i class="fa fa-circle-o"></i> Danh sách cơ sở</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Quản lý liên hệ</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/contact"><i class="fa fa-circle-o"></i> Danh sách liên hệ</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>