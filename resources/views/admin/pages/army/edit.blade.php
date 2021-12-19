@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">إضافة بيان</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        {{$army}}
        <form action="{{route('army.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="army">تعديل موقف من التجنيد</label>
                    <input type="text" class="form-control" id="army" placeholder="اكتب هنا" name="army">
                </div>
                @error('army')
                <p class="text-danger" id="myError">يجب ادخال موقف التجنيد </p>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection