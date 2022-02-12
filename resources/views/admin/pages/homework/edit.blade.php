@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل واجب</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('homework.update',$homework)}}" method="POST">
            @csrf
            @method('PUT')



            {!! form_text('name','اسم الواجب',$homework->name) !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('deadline','اخر معاد للتسليم',$homework->deadline) !!}
            @error('deadline')
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