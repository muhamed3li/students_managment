@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل واجب</h3>
        </div>

        <form action="{{route('homework.update',$homework)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                <x-form.input-text name="name" label="اسم الواجب" :old="$homework->name" />

                <x-form.input-date name="deadline" label="اخر معاد للتسليم" :old="$homework->deadline" />

            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection