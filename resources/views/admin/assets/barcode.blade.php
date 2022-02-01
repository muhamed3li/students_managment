<div class="barcode">
    <p class="name">{{$user->name}}</p>
    <p class="price">Price: {{$user->email}}</p>
    {!! DNS1D::getBarcodeHTML("$user->id", 'UPCA') !!}
    <p class="pid">{{$user->id}}</p>
</div>