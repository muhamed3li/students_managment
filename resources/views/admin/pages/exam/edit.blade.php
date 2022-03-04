@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل امتحان</h3>
        </div>

        <form action="{{route('exam.update',$exam)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">
                <x-form.input-text name="name" label="اسم الامتحان" :old="$exam->name" />

                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="$exam->level_id" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="$exam->group_id" />

                <x-form.input-date name="exam_date" label="التاريخ" :old="$exam->exam_date" />

                <x-form.input-text name="exam_max" label="الدرجة العليا" :old="$exam->exam_max" />

                <x-form.input-text name="exam_min" label="الدرجة الصغرى" :old="$exam->exam_min" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
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