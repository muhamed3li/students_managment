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




                {{-- groups --}}
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




                {{-- students --}}
                <li class="nav-item {{currentRequest('students') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('students') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الطلبة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('students') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('student.index')}}"
                                class="nav-link {{currentRequest('students/student') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول الطلبة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('attendance.index')}}"
                                class="nav-link {{currentRequest('students/attendance') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول الحضور</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('note.index')}}"
                                class="nav-link {{currentRequest('students/note') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول الملاحظات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('payment.index')}}"
                                class="nav-link {{currentRequest('students/payment') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول الماليات</p>
                            </a>
                        </li>
                    </ul>
                </li>



                {{-- exams --}}
                <li class="nav-item {{currentRequest('exams') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('exams') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الامتحانات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('exams') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('exam.index')}}"
                                class="nav-link {{currentRequest('exams/exam') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('examattindance.index')}}"
                                class="nav-link {{currentRequest('exams/examattindance') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول حضور الامتحانات</p>
                            </a>
                        </li>
                    </ul>
                </li>




                {{-- Levels --}}
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



                {{-- Expences --}}
                <li class="nav-item {{currentRequest('expence') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('expence') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            المصروفات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: {{currentRequest('expence') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('expence.index')}}"
                                class="nav-link {{currentRequest('expence') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول المصروفات</p>
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