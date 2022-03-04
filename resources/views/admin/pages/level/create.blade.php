@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مستوي</h3>
        </div>

        <form action="{{route('level.store')}}" method="POST">
            @csrf

            <div class="card-body">
                <x-form.input-text name="name" label="اسم المستوى الدراسي" />

                <x-form.input-text name="malazem_cost" label="مصاريف الملازم" />

                <x-form.input-text name="month_cost" label="الشهرية" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>



@endsection