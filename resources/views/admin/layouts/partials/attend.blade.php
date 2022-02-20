<li class="nav-item {{currentRequest('attendances') ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{currentRequest('attendances') ? 'active' : ''}}">
        <i class="fas fa-walking nav-icon"></i>
        <p>
            الحضور
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('attendances') ? 'block' : 'none'}};">
        <li class="nav-item">
            <a href="{{route('attendance.index')}}"
                class="nav-link {{currentRequest('attendances/attendance') ? 'active' : ''}}">
                <i class="fas fa-user-clock nav-icon"></i>
                <p>جدول الحضور</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('attendance.barcodePage')}}"
                class="nav-link {{currentRequest('attendances/attendanceBarcodePage') ? 'active' : ''}}">
                <i class="fas fa-barcode nav-icon"></i>
                <p>حضور بالباركود</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('attendance.groupAttendancePage')}}"
                class="nav-link {{currentRequest('attendances/attendance/groupAttendancePage') ? 'active' : ''}}">
                <i class="fas fa-barcode nav-icon"></i>
                <p>حضور مجموعة</p>
            </a>
        </li>
    </ul>
</li>