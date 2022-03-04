@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل حل واجب</h3>
        </div>

        <form action="{{route('homeworkSolution.update',$homeworkSolution)}}" method="POST">
            @csrf
            @method('PUT')

            <x-form.input-text name="degree" label="الدرجة" :old="$homeworkSolution->degree" />

            <x-form.input-date name="solved_at" label="تاريخ تسليم الحل" :old="$homeworkSolution->solved_at" />

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection