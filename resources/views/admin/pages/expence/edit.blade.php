@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل مصروف</h3>
        </div>

        <form action="{{route('expence.update',$expence)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <x-form.input-text name="name" label="اسم المصروف" :old="$expence->name" />

                <x-form.input-textarea name="reason" label="السبب" :old="$expence->reason" />

                <x-form.input-text name="amount" label="الكمية" :old="$expence->amount" />

                <x-form.input-date name="date" label="التاريخ" :old="$expence->date" />
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>

@endsection