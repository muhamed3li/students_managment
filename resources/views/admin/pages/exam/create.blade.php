@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة امتحان</h3>
        </div>

        <form action="{{route('exam.store')}}" method="POST">
            @csrf

            <div class="card-body">
                <x-form.input-text name="name" label="اسم الامتحان" />

                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="old('group_id')" />

                <x-form.input-date name="exam_date" label="التاريخ" :old="date('Y-m-d')" />

                <x-form.input-text name="exam_max" label="الدرجة العليا" />

                <x-form.input-text name="exam_min" label="الدرجة الصغرى" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>


@endsection

@section('specificScript')
<script>
    $('.select2').select2()

    getGroupFromLevel();
</script>
@endsection