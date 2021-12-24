@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل دفع</h3>
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



            {!! form_date('pay_from',$obj->pay_from) !!}
            @error('pay_from')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('pay_to',$obj->pay_to) !!}
            @error('pay_to')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('month_paid',$obj->month_paid) !!}
            @error('month_paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('malazem_paid',$obj->malazem_paid) !!}
            @error('malazem_paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('discount',$obj->discount) !!}
            @error('discount')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('student_id',$obj->student_id) !!}
            @error('student_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('group_id',$obj->group_id) !!}
            @error('group_id')
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