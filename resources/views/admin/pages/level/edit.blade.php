@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل مستوى</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.update',$obj->id)}}" method="POST">
            @csrf
            @method('PUT')



            {!! form_text('name',$obj->name) !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('reserve_cost',$obj->reserve_cost) !!}
            @error('reserve_cost')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('malazem_cost',$obj->malazem_cost) !!}
            @error('malazem_cost')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('month_cost',$obj->month_cost) !!}
            @error('month_cost')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection