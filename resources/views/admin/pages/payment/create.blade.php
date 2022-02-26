@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة دفع</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf

            <div class="card-body">


                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />


                <x-select-search :selectdata="$months" name="month_id" label="*اسم الشهر" />

                <x-select-search :selectdata="$students" name="student_id" label="*الطالب" />


                <x-form.input-text name="month_paid" label="*الشهرية" />

                <x-form.input-text name="malazem_paid" label="*الملازم" />


                <x-form.input-text name="discount" label="الخصم" />


                <x-form.input-text name="total" label="الاجمالي" />
            </div>


            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>





<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة دفع بالباركود او رقم الهوية</h3>
        </div>

        <!-- form start -->
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
    <!-- /.card -->
</div>




@endsection



@section('specificScript')
<!-- Page specific script -->
<script>
    var studentsList = $('.duallistbox').bootstrapDualListbox()
    $('#group_id').select2()
    $('#level_id').select2()
    $('#student_id').select2()
    $('#month_id').select2()
    
    $("#group_id").html("<option>اختر</option>");
    getGroupFromLevel();

    getStudentFromGroup();

    getLevelByIdForMoney('month_paid','malazem_paid','discount','total');
    getLevelByIdForMoney('month_paid2','malazem_paid2','discount2','total2');

    calculatePaymentTotal('month_paid','malazem_paid','discount','total');
    calculatePaymentTotal('month_paid2','malazem_paid2','discount2','total2');

    $("#barcode").on('keypress',function(){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            attendAjax(event)
        }
    })
    

    function attendAjax(e) {
        e.preventDefault();
        
        var id = $("#barcode").val()
        id = idFromBarcode(id)

        $.ajax({
            type: "GET",
            url: '/students/getStudetnById/' + id,
            data: {_token: '{{csrf_token()}}'},
            success: function (data) {
                let student = JSON.parse(data);
                // console.log($('#students')[0]);
                studentsList.append(`
                <option value="${student.id}" selected>${student.name}</option>
                `)
                studentsList.bootstrapDualListbox('refresh')
                $("#barcode").val("")
                $("#barcode").focus()
            },
            error: function (data, textStatus, errorThrown) {
                console.log(data);
            },
        });
    }
    
</script>
@endsection