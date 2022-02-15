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
            <a href="{{route('level.index')}}" class="nav-link {{currentRequest('level') ? 'active' : ''}}">
                <i class="fas fa-table nav-icon"></i>
                <p>جدول المستويات</p>
            </a>
        </li>
    </ul>
</li>