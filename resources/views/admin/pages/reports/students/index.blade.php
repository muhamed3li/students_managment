@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">تقارير الطلاب</h3>
        </div>


        <div class="card-body">
            <div class="container">
                <div class="row mb-5 justify-content-around">
                    <div class="col">
                        <a href="{{route('reports.students.singleStudentReport')}}" class="btn btn-lg btn-primary">تقرير
                            طالب</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $(function () {
    });
</script>
@endsection