@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة واجب</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('homework.store')}}" method="POST">
            @csrf

            <div class="card-body">
                <x-form.input-text name="name" label="اسم الواجب" />

                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="old('group_id')" />

                <x-form.input-date name="deadline" label="اخر معاد للتسليم" />

                <x-form.input-text name="homework_max" label="الدرجه العليا" />
                
                <x-form.input-text name="homework_min" label="الدرجه الصغرى" />

            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>



@endsection




@section('specificScript')
<!-- Page specific script -->
<script>
    $('.select2').select2()

    getGroupFromLevel();
</script>
@endsection