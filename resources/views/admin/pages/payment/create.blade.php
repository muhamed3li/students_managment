@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة دفع</h3>
        </div>

        <form action="{{route('payment.store')}}" method="POST">
            @csrf
            <div class="card-body">


                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="old('group_id')" />


                <x-select-search :selectdata="$months" name="month_id" label="*اسم الشهر" :old="old('month_id')" />

                <x-select-search :selectdata="$students" name="student_id" label="*الطالب" :old="old('student_id')" />

                <x-form.input-text name="month_paid" label="*الشهرية" />

                <x-form.input-text name="malazem_paid" label="*الملازم" />


                <x-form.input-text name="discount" label="الخصم" />


                <x-form.input-text name="total" label="الاجمالي" />
            </div>


            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>


<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة دفع بالباركود او رقم الهوية</h3>
        </div>

        <form action="{{route('payment.paymentBarcodeOrId')}}" method="POST">
            @csrf


            <div class="card-body">
                <div class="form-group">
                    <label for="barcode">Barcode Or Id</label>
                    <input type="text" class="form-control" id="barcode" name="barcode">
                </div>

                <x-select-search :selectdata="$months" name="month_id2" label="*اسم الشهر" />

                <div class="form-group">
                    <label>Students</label>
                    <select class="duallistbox" multiple="multiple" style="display: none;" name="students[]"
                        id="students">
                    </select>
                </div>

                <x-form.input-text name="month_paid2" label="*الشهرية" />

                <x-form.input-text name="malazem_paid2" label="*الملازم" />

                <x-form.input-text name="discount2" label="الخصم" />

                <x-form.input-text name="total2" label="الاجمالي" />

            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>

@endsection


@section('specificScript')
<script>
    var studentsList = $('.duallistbox').bootstrapDualListbox()
    $('#group_id').select2()
    $('#level_id').select2()
    $('#student_id').select2()
    $('#month_id').select2()
    
    getGroupFromLevel();

    getStudentFromGroup();

    getLevelByIdForMoney('month_paid','malazem_paid','discount','total');
    getLevelByIdForMoney('month_paid2','malazem_paid2','discount2','total2');

    calculatePaymentTotal('month_paid','malazem_paid','discount','total');
    calculatePaymentTotal('month_paid2','malazem_paid2','discount2','total2');

    
    studentDualBox(studentsList);
</script>
@endsection