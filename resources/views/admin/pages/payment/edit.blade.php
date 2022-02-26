@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل دفع</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.update',$obj->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <x-select-search :selectdata="$months" name="month_id" label="*اسم الشهر" :old="$obj->month_id" />

                <x-select-search :selectdata="$students" name="student_id" label="*الطالب" :old="$obj->student->id" />


                <x-form.input-text name="month_paid" label="*الشهرية" :old="$obj->month_paid" />

                <x-form.input-text name="malazem_paid" label="*الملازم" :old="$obj->malazem_paid" />


                <x-form.input-text name="discount" label="الخصم" :old="$obj->discount" />


                <x-form.input-text name="total" label="الاجمالي" :old="$obj->total" />

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



@section('specificScript')
<!-- Page specific script -->
<script>
    $('#month_id').select2()

    getLevelByIdForMoney('month_paid','malazem_paid','discount','total');

    calculatePaymentTotal('month_paid','malazem_paid','discount','total');
    
</script>
@endsection