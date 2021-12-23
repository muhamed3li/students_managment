@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مجموعة</h3>
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


            <div class="form-group">
                <label for="time">Example select</label>
                <select name="time_id" class="form-control" id="time">
                    @foreach (App\Models\Time::get() as $item)
                    <option value="{{$item->id}}">
                        {{$item->sat == null ? " " : " // سبت $item->sat "}}
                        {{$item->sun == null ? " " : " // حد $item->sun "}}
                        {{$item->mon == null ? " " : " // اثنين $item->mon "}}
                        {{$item->tus == null ? " " : " // ثلاثاء $item->tus "}}
                        {{$item->wed == null ? " " : " // اربعاء $item->wed "}}
                        {{$item->thu == null ? " " : " // خميس $item->thu "}}
                        {{$item->fri == null ? " " : " // جمعة $item->fri "}}
                    </option>
                    @endforeach
                </select>
            </div>
            @error('time_id')
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