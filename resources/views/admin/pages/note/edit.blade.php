@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل ملاحظة طالب</h3>
        </div>

        <form action="{{route('note.update',$note)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <x-select-search :selectdata="$students" name="student_id" label="اسم الطالب"
                    :old="$note->student_id" />

                <x-form.input-textarea name="note" label="الملاحظة" :old="$note->note" />
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection