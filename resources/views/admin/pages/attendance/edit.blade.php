@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل حضور</h3>
        </div>

        <form action="{{route('attendance.update',$attendance)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <x-select-search :selectdata="$students" name="student_id" label="الطالب"
                    :old="$attendance->student_id" />

                <x-form.input-check name="attend" label="حضر ؟" :checked="$attendance->attend" />

                <x-form.input-date name="day" label="التاريخ" :old="$attendance->day" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>

@endsection