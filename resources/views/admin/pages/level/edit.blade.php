@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل مستوى</h3>
        </div>

        <form action="{{route('level.update',$level)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">
                <x-form.input-text name="name" label="اسم المستوى الدراسي" :old="$level->name" />

                <x-form.input-text name="malazem_cost" label="مصاريف الملازم" :old="$level->malazem_cost" />

                <x-form.input-text name="month_cost" label="الشهرية" :old="$level->month_cost" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection