@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة البطاقات</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row mb-5 justify-content-around">
                    <div class="col">
                        <a href="{{route('cards.someStudentsPage')}}" class="btn btn-lg btn-primary">طباعة عدد من
                            الطلبة</a>
                    </div>
                    <div class="col">
                        <a href="{{route('cards.groupStudentsPage')}}" class="btn btn-lg btn-primary">طباعة البطاقات
                            لمجموعة</a>
                    </div>
                    <div class="col">
                        <a href="{{route('cards.levelStudentsPage')}}" class="btn btn-lg btn-primary">طباعة البطاقات
                            لمستوى</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>

</script>
@endsection