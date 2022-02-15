{{-- HomeWork --}}
<li class="nav-item {{currentRequest('homeworks') ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{currentRequest('homeworks') ? 'active' : ''}}">
        <i class="nav-icon fas fa-home"></i>
        <p>
            الواجبات
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('homeworks') ? 'block' : 'none'}};">
        <li class="nav-item">
            <a href="{{route('homework.index')}}"
                class="nav-link {{currentRequest('homeworks/homework') ? 'active' : ''}}">
                <i class="fas fa-table nav-icon"></i>
                <p>جدول الواجبات</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('homeworkSolution.index')}}"
                class="nav-link {{request()->route()->getName() == 'homeworkSolution.index' ? 'active' : ''}}">
                <i class="fas fa-table nav-icon"></i>
                <p>جدول حلول الواجبات</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('homeworkSolution.groupAttendancePage')}}"
                class="nav-link {{request()->route()->getName() == 'homeworkSolution.groupAttendancePage' ? 'active' : ''}}">
                <i class="fas fa-users nav-icon"></i>
                <p>حضور مجموعة</p>
            </a>
        </li>
    </ul>
</li>