<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
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




                {{-- groups --}}
                <li class="nav-item {{currentRequest('groups') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('groups') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            المجاميع
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('groups') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('group.index')}}"
                                class="nav-link {{currentRequest('groups/group') ? 'active' : ''}}">
                                <i class="fas fa-table nav-icon"></i>
                                <p>جدول المجاميع</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('time.index')}}"
                                class="nav-link {{currentRequest('groups/time') ? 'active' : ''}}">
                                <i class="far fa-clock nav-icon"></i>
                                <p>جدول المواعيد</p>
                            </a>
                        </li>
                    </ul>
                </li>




                {{-- students --}}
                <li class="nav-item {{currentRequest('students') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('students') ? 'active' : ''}}">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>
                            الطلبة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3"
                        style="display: {{currentRequest('students') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('student.index')}}"
                                class="nav-link {{currentRequest('students/student') ? 'active' : ''}}">
                                <i class="fas fa-table nav-icon"></i>
                                <p>جدول الطلبة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('barcode.index')}}"
                                class="nav-link {{currentRequest('students/barcode/index') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-print"></i>
                                <p>باركود</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cards.index')}}"
                                class="nav-link {{currentRequest('students/cards/index') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-print"></i>
                                <p>البطاقات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('attendance.index')}}"
                                class="nav-link {{currentRequest('students/attendance') ? 'active' : ''}}">
                                <i class="fas fa-user-clock nav-icon"></i>
                                <p>جدول الحضور</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('attendance.barcodePage')}}"
                                class="nav-link {{currentRequest('students/attendanceBarcodePage') ? 'active' : ''}}">
                                <i class="fas fa-barcode nav-icon"></i>
                                <p>حضور بالباركود</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('note.index')}}"
                                class="nav-link {{currentRequest('students/note') ? 'active' : ''}}">
                                <i class="fas fa-sticky-note nav-icon"></i>
                                <p>جدول الملاحظات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('payment.index')}}"
                                class="nav-link {{currentRequest('students/payment') ? 'active' : ''}}">
                                <i class="fas fa-dollar-sign nav-icon"></i>
                                <p>جدول الماليات</p>
                            </a>
                        </li>
                    </ul>
                </li>



                {{-- exams --}}
                <li class="nav-item {{currentRequest('exams') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('exams') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-spell-check"></i>
                        <p>
                            الامتحانات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('exams') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('exam.index')}}"
                                class="nav-link {{currentRequest('exams/exam') ? 'active' : ''}}">
                                <i class="fas fa-table nav-icon"></i>
                                <p>جدول الامتحانات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('examattindance.index')}}"
                                class="nav-link {{currentRequest('exams/examattindance') ? 'active' : ''}}">
                                <i class="fas fa-user-clock nav-icon"></i>
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
                    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('level') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('level.index')}}"
                                class="nav-link {{currentRequest('level') ? 'active' : ''}}">
                                <i class="fas fa-table nav-icon"></i>
                                <p>جدول المستويات</p>
                            </a>
                        </li>
                    </ul>
                </li>



                {{-- Expences --}}
                <li class="nav-item {{currentRequest('expence') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('expence') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-hand-holding-usd"></i>
                        <p>
                            المصروفات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3"
                        style="display: {{currentRequest('expence') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('expence.index')}}"
                                class="nav-link {{currentRequest('expence') ? 'active' : ''}}">
                                <i class="fas fa-table nav-icon"></i>
                                <p>جدول المصروفات</p>
                            </a>
                        </li>
                    </ul>
                </li>





                {{-- HomeWork --}}
                <li class="nav-item {{currentRequest('homeworks') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('homeworks') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            الواجبات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3"
                        style="display: {{currentRequest('homeworks') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('homework.index')}}"
                                class="nav-link {{currentRequest('homeworks/homework') ? 'active' : ''}}">
                                <i class="fas fa-table nav-icon"></i>
                                <p>جدول الواجبات</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('homeworkSolution.index')}}"
                                class="nav-link {{currentRequest('homeworks/homeworkSolution') ? 'active' : ''}}">
                                <i class="fas fa-table nav-icon"></i>
                                <p>جدول حلول الواجبات</p>
                            </a>
                        </li>
                    </ul>
                </li>




                {{-- Reports --}}
                <li class="nav-item {{currentRequest('reports') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRequest('reports') ? 'active' : ''}}">
                        <i class="fas fa-poll nav-icon"></i>
                        <p>
                            التقارير
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3"
                        style="display: {{currentRequest('reports') ? 'block' : 'none'}};">
                        <li class="nav-item">
                            <a href="{{route('reports.allStudents')}}"
                                class="nav-link {{currentRequest('reports') ? 'active' : ''}}">
                                <i class="fas fa-users nav-icon"></i>
                                <p>تقارير الطلاب</p>
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