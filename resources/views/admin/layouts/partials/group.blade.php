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
            <a href="{{route('group.index')}}" class="nav-link {{currentRequest('groups/group') ? 'active' : ''}}">
                <i class="fas fa-table nav-icon"></i>
                <p>جدول المجاميع</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('time.index')}}" class="nav-link {{currentRequest('groups/time') ? 'active' : ''}}">
                <i class="far fa-clock nav-icon"></i>
                <p>جدول المواعيد</p>
            </a>
        </li>
    </ul>
</li>