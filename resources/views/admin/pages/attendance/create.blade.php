@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة حضور</h3>
        </div>

        <form action="{{route('attendance.store')}}" method="POST">
            @csrf

            <div class="card-body">

                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />

                <x-select-search :selectdata="$levels" name="student_id" label="الطالب" />

                <x-form.input-check name="attend" label="حضر ؟" checked="1" />

                <x-form.input-date name="day" label="التاريخ" :old="date('Y-m-d')" />

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
            <h3 class="card-title">اضافة حضور برقم الهوية أو الباركود</h3>
        </div>

        <form action="{{route('attendance.attendanceBarcodeOrId')}}" method="POST">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="barcode">باركود أو رقم الهوية</label>
                    <input type="text" class="form-control" id="barcode" name="barcode">
                </div>

                <div class="form-group">
                    <label>Students</label>
                    <select class="duallistbox" multiple="multiple" style="display: none;" name="students[]"
                        id="students">
                    </select>
                </div>


                <x-form.input-check name="attendBarcode" label="حضر ؟" checked="1" />

                <x-form.input-date name="dayBarcode" label="التاريخ" :old="date('Y-m-d')" />

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
    $('.select2').select2()
    var studentsList = $('.duallistbox').bootstrapDualListbox()


    $("#group_id").html("<option>اختر</option>")
    getGroupFromLevel();

    $("#student_id").html("<option>اختر</option>")
    getStudentFromGroup();

    studentDualBox(studentsList);
</script>
@endsection