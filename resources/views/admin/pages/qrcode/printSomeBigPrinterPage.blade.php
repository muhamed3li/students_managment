@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">QR Code page Big Printer</h3>
        </div>

        <div class="card-body">
            <div class="container">
                <form action="{{route('qrcode.printSomeBigPrinter')}}" method="POST">
                    @csrf

                    <div class="card-body">
                        <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                        <x-form.input-text name="number" label="العدد" />

                        <x-form.input-text name="label" label="العنوان" />

                        <x-form.input-text name="link" label="النص المراد تحويله" />


                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection