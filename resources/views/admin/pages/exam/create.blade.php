@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة امتحان</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf



            {!! form_text('name') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('level_id') !!}
            @error('level_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('group_id') !!}
            @error('group_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('exam_date') !!}
            @error('exam_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('exam_max') !!}
            @error('exam_max')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('exam_min') !!}
            @error('exam_min')
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