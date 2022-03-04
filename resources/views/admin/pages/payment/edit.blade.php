@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل دفع</h3>
        </div>

        <form action="{{route('payment.update',$payment)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">

                <x-select-search :selectdata="$months" name="month_id" label="*اسم الشهر" :old="$payment->month_id" />

                <x-select-search :selectdata="$students" name="student_id" label="*الطالب"
                    :old="$payment->student->id" />


                <x-form.input-text name="month_paid" label="*الشهرية" :old="$payment->month_paid" />

                <x-form.input-text name="malazem_paid" label="*الملازم" :old="$payment->malazem_paid" />


                <x-form.input-text name="discount" label="الخصم" :old="$payment->discount" />


                <x-form.input-text name="total" label="الاجمالي" :old="$payment->total" />

            </div>

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