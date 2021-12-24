@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل طالب</h3>
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


            {!! form_check('gender',$obj->gender) !!}
            @error('gender')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('address',$obj->address) !!}
            @error('address')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('home_phone',$obj->home_phone) !!}
            @error('home_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('phone',$obj->phone) !!}
            @error('phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('father_name',$obj->father_name) !!}
            @error('father_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('father_phone',$obj->father_phone) !!}
            @error('father_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('school',$obj->school) !!}
            @error('school')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select_array('status',['reserve','in','out','fired'],$obj->status) !!}
            @error('status')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_text('reserve_paid',$obj->reserve_paid) !!}
            @error('reserve_paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('level_id',$obj->level_id) !!}
            @error('level_id')
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