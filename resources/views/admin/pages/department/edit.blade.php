@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update department</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('department.update',$department->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="name" name="name"
                        value="{{$department->name}}">
                </div>
                @error('name')
                <p class="text-danger" id="myError">Name is required</p>
                @enderror
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" class="form-control" id="description" placeholder="description"
                        name="description"> {{$department->description}} </textarea>
                </div>
                @error('description')
                <p class="text-danger" id="myError">Description is required</p>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection