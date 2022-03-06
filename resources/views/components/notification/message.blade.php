<a href="#" class="dropdown-item">
    <p>
        <span>الطالب :</span>
        <span class="text-warninig">{{$notification->data['name']}}</span>
        <span>لم يدفع في شهر:</span>
        <span class="text-info">{{$notification->data['month']}}</span>
    </p>
    <span class="float-right text-muted text-sm">
        {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->format('Y-F-l')}}
    </span>
</a>