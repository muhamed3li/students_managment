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
            <a href="{{route('exam.index')}}" class="nav-link {{currentRequest('exams/exam') ? 'active' : ''}}">
                <i class="fas fa-table nav-icon"></i>
                <p>جدول الامتحانات</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('examattindance.index')}}"
                class="nav-link {{request()->route()->getName() == 'examattindance.index' ? 'active' : ''}}">
                <i class="fas fa-user-clock nav-icon"></i>
                <p>جدول حضور الامتحانات</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('examattindance.groupAttendancePage')}}"
                class="nav-link {{request()->route()->getName() == 'examattindance.groupAttendancePage' ? 'active' : ''}}">
                <i class="fas fa-users nav-icon"></i>
                <p>حضور مجموعة</p>
            </a>
        </li>
    </ul>
</li>