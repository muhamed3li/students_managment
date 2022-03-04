@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة حضور لمجموعة</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('attendance.groupAttendance')}}" method="POST">
                @csrf


                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" />

                <x-form.input-date name="day" label="التاريخ" :old="date('Y-m-d')" />

                <!-- /.card-body -->

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $('.select2').select2()
    getGroupFromLevel();    
</script>
@endsection