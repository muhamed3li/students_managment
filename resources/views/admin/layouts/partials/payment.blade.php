<li class="nav-item {{currentRequest('payments') ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{currentRequest('payments') ? 'active' : ''}}">
        <i class="fas fa-money-check-alt nav-icon"></i>
        <p>
            الماليات
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ml-3" style="display: {{currentRequest('payments') ? 'block' : 'none'}};">
        <li class="nav-item">
            <a href="{{route('month.index')}}" class="nav-link {{currentRequest('payments/month') ? 'active' : ''}}">
                <i class="fas fa-table nav-icon"></i>
                <p>جدول الشهور</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('payment.index')}}"
                class="nav-link {{currentRequest('payments/payment') ? 'active' : ''}}">
                <i class="fas fa-dollar-sign nav-icon"></i>
                <p>جدول الماليات</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('payment.groupPaymentPage')}}"
                class="nav-link {{currentRequest('payments/paymentCustom/groupPaymentPage') ? 'active' : ''}}">
                <i class="fas fa-cash-register nav-icon"></i>
                <p>دفع مجموعة</p>
            </a>
        </li>
    </ul>
</li>