@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة موعد</h3>
        </div>

        <form action="{{route($model.'.store')}}" method="POST">
            @csrf


            {!! form_time('sat','السبت') !!}
            @error('sat')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_time('sun','الأحد') !!}
            @error('sun')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('mon','الإثنين') !!}
            @error('mon')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('tus','الثلاثاء') !!}
            @error('tus')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('wed','الأربعاء') !!}
            @error('wed')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('thu','الخميس') !!}
            @error('thu')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_time('fri','الجمعة') !!}
            @error('fri')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>



@endsection