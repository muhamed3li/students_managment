@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مصروف</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf


            {!! form_text('name','اسم المصروف او العنوان') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_textarea('reason','السبب') !!}
            @error('reason')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('amount','الكمية') !!}
            @error('amount')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('date','التاريخ',date("Y-m-d")) !!}
            @error('date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>



@endsection