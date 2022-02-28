<li class="nav-item {{currentRequest('qrcode') ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{currentRequest('qrcode') ? 'active' : ''}}">
        <i class="nav-icon fas fa-qrcode"></i>
        <p>
            Qr Code
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('qrcode') ? 'block' : 'none'}};">
        <li class="nav-item">
            <a href="{{route('qrcode.index')}}" class="nav-link {{currentRequest('qrcode') ? 'active' : ''}}">
                <i class="fas fa-home nav-icon"></i>
                <p>الرئيسية</p>
            </a>
        </li>
    </ul>
</li>