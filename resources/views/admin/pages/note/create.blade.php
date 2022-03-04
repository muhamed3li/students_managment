@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة ملاحظة لطالب</h3>
        </div>

        <form action="{{route('note.store')}}" method="POST">
            @csrf

            <div class="card-body">
                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="old('group_id')" />

                <x-select-search :selectdata="$students" name="student_id" label="الطالب" :old="old('student_id')" />

                <x-form.input-textarea name="note" label="الملاحظة" />
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

    getStudentFromGroup();
</script>
@endsection