<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-y: auto">
    <!-- Sidebar -->
    <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img style="width: 120px" src="{{ asset('/adminLTE/dist/img/user.png') }}" class="img-circle"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Anas Monsef</a>
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


                @include('admin.layouts.partials.group')


                @include('admin.layouts.partials.student')


                @include('admin.layouts.partials.exam')


                @include('admin.layouts.partials.level')


                @include('admin.layouts.partials.expence')


                @include('admin.layouts.partials.homework')


                @include('admin.layouts.partials.report')


            </ul>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>