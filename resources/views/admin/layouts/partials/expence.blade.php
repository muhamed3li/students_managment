{{-- Expences --}}
<li class="nav-item {{currentRequest('expence') ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{currentRequest('expence') ? 'active' : ''}}">
        <i class="nav-icon fas fa-hand-holding-usd"></i>
        <p>
            المصروفات
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('expence') ? 'block' : 'none'}};">
        <li class="nav-item">
            <a href="{{route('expence.index')}}" class="nav-link {{currentRequest('expence') ? 'active' : ''}}">
                <i class="fas fa-table nav-icon"></i>
                <p>جدول المصروفات</p>
            </a>
        </li>
    </ul>
</li>