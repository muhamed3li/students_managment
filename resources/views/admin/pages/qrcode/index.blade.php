@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">QR Code page</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row mb-5 justify-content-around">
                    <div class="col">
                        <a href="{{route('qrcode.printSomeSmallPrinterPage')}}" class="btn btn-lg btn-primary">طباعة عدد
                            من
                            الكود طابعة صغيرة</a>
                    </div>
                    <div class="col">
                        <a href="{{route('qrcode.printSomeBigPrinterPage')}}" class="btn btn-lg btn-primary">طباعة عدد
                            من
                            الكود طابعة كبيرة</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>


@endsection