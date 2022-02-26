@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة شهر</h3>
        </div>


        <form action="{{route('month.store')}}" method="POST">
            @csrf

            <div class="card-body">

                <x-form.input-text name="name" label="الإسم" />

                <x-form.input-date name="start" label="يبدأ من" />

                <x-form.input-date name="end" label="ينتهي عند" />

            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>

    </div>
</div>



@endsection