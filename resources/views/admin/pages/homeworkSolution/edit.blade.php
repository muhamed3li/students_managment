@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل حل واجب</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('homeworkSolution.update',$homeworkSolution)}}" method="POST">
            @csrf
            @method('PUT')



            {!! form_text('degree','الدرجة',$homeworkSolution->degree) !!}
            @error('degree')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_date('solved_at','تاريخ تسليم الحل',$homeworkSolution->solved_at) !!}
            @error('solved_at')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection