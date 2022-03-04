@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل حضور الامتحان</h3>
        </div>

        <form action="{{route('examattindance.update',$examattindance)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                <x-select-search :selectdata="$students" name="student_id" label="الطالب"
                    :old="$examattindance->student_id" />

                <x-select-search :selectdata="$exams" name="exam_id" label="الإمتحان" :old="$examattindance->exam_id" />

                <x-form.input-text name="degree" label="الدرجة" :old="$examattindance->degree" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>

@endsection