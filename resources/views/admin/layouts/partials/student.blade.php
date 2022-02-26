{{-- students --}}
<li class="nav-item {{currentRequest('students') ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{currentRequest('students') ? 'active' : ''}}">
        <i class="fas fa-user-graduate nav-icon"></i>
        <p>
            الطلبة
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('students') ? 'block' : 'none'}};">
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
            <a href="{{route('note.index')}}" class="nav-link {{currentRequest('students/note') ? 'active' : ''}}">
                <i class="fas fa-sticky-note nav-icon"></i>
                <p>جدول الملاحظات</p>
            </a>
        </li>

    </ul>
</li>