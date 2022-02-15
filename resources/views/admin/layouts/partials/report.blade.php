{{-- Reports --}}
<li class="nav-item {{currentRequest('reports') ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{currentRequest('reports') ? 'active' : ''}}">
        <i class="fas fa-poll nav-icon"></i>
        <p>
            التقارير
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('reports') ? 'block' : 'none'}};">
        <li class="nav-item">
            <a href="{{route('reports.allStudents')}}" class="nav-link {{currentRequest('reports') ? 'active' : ''}}">
                <i class="fas fa-users nav-icon"></i>
                <p>تقارير الطلاب</p>
            </a>
        </li>
    </ul>
</li>