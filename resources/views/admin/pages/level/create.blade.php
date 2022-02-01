@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مستوي</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf


            {!! form_text('name','اسم المستوى الدراسي') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {{-- {!! form_text('reserve_cost','مصاريف الحجز') !!}
            @error('reserve_cost')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror --}}


            {!! form_text('malazem_cost','مصاريف الملازم') !!}
            @error('malazem_cost')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('month_cost','الشهرية') !!}
            @error('month_cost')
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