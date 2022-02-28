@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة الباركود</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row mb-5 justify-content-around">
                    <div class="col">
                        <a href="{{route('barcode.someStudentsPage')}}" class="btn btn-lg btn-primary">طباعة عدد من
                            الطلبة</a>
                    </div>
                    <div class="col">
                        <a href="{{route('barcode.groupStudentsPage')}}" class="btn btn-lg btn-primary">طباعة الباركود
                            لمجموعة</a>
                    </div>
                    <div class="col">
                        <a href="{{route('barcode.levelStudentsPage')}}" class="btn btn-lg btn-primary">طباعة الباركود
                            لمستوى</a>
                    </div>
                </div>
                <div class="row mb-5 justify-content-around">
                    <div class="col">
                        <a href="{{route('barcode.printSomeSmallPrinterPage')}}" class="btn btn-lg btn-primary">طباعة
                            عدد
                            من
                            الباركود طابعة صغيرة</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>

</script>
@endsection