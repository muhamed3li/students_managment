@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة حضور الواجب لمجموعة</h3>
        </div>

        <div class="card-body">
            <form action="{{route('homeworkSolution.groupAttendance')}}" method="POST">
                @csrf


                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" />

                <x-select-search :selectdata="$homeworks" name="homework_id" label="الواجب" />

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('specificScript')
<script>
    $('.select2').select2()

    getGroupFromLevel();

    getHomeworkFromGroup();
</script>
@endsection