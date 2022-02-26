@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل شهر</h3>
        </div>

        <form action="{{route('month.update',$month)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">
                <x-form.input-text name="name" label="الإسم" :old="$month->name" />

                <x-form.input-date name="start" label="يبدأ من" :old="$month->start" />

                <x-form.input-date name="end" label="ينتهي عند" :old="$month->end" />
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection