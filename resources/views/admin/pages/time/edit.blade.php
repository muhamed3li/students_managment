@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل موعد</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.update',$obj->id)}}" method="POST">
            @csrf
            @method('PUT')



            {!! form_time('sat','السبت',$obj->sat) !!}
            @error('sat')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_time('sun','الأحد',$obj->sun) !!}
            @error('sun')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('mon','الإثنين',$obj->mon) !!}
            @error('mon')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('tus','الثلاثاء',$obj->tus) !!}
            @error('tus')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('wed','الأربعاء',$obj->wed) !!}
            @error('wed')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('thu','الخميس',$obj->thu) !!}
            @error('thu')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('fri','الجمعة',$obj->fri) !!}
            @error('fri')
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