<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('/adminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/adminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">


            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">




                <li class="nav-item {{currentRequest('attendance') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('attendance') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الحضور
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('attendance') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('attendance.index')}}"
                                class="nav-link {{currentRequest('attendance') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول الحضور</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{currentRequest('groups') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('groups') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            المجاميع
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('groups') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('group.index')}}"
                                class="nav-link {{currentRequest('groups/group') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول المجاميع</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('time.index')}}"
                                class="nav-link {{currentRequest('groups/time') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول المواعيد</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="nav-item {{currentRequest('level') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('level') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            المستويات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('level') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('level.index')}}"
                                class="nav-link {{currentRequest('level') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول المستويات</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>






        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>