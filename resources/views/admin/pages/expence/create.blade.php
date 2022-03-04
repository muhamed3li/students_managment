@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مصروف</h3>
        </div>

        <form action="{{route('expence.store')}}" method="POST">
            @csrf

            <div class="card-body">
                <x-form.input-text name="name" label="اسم المصروف" />

                <x-form.input-textarea name="reason" label="السبب" />

                <x-form.input-text name="amount" label="الكمية" />

                <x-form.input-date name="date" label="التاريخ" :old="date('Y-m-d')" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>



@endsection