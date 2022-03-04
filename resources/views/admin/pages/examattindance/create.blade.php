@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة حضور امتحان</h3>
        </div>


        <form action="{{route('examattindance.store')}}" method="POST">
            @csrf

            <div class="card-body">
                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="old('group_id')" />

                <x-select-search :selectdata="$students" name="student_id" label="الطالب" :old="old('student_id')" />

                <x-select-search :selectdata="$exams" name="exam_id" label="الإمتحان" :old="old('exam_id')" />

                <x-form.input-text name="degree" label="الدرجة" />
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

        <form action="{{route('examattindance.examAttendaceByBarcodeOrId')}}" method="POST">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="barcode">Barcode</label>
                    <input type="text" class="form-control" id="barcode" name="barcode">
                </div>


                <x-select-search :selectdata="$exams" name="exam_id2" label="الإمتحان" :old="old('exam_id2')" />

                <div class="form-group">
                    <label>Students</label>
                    <select class="duallistbox" multiple="multiple" style="display: none;" name="students[]"
                        id="students">
                    </select>
                </div>


                <x-form.input-text name="degree2" label="الدرجة" />

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
    $('.select2').select2()
    var studentsList = $('.duallistbox').bootstrapDualListbox()


    getGroupFromLevel();

    getExamFromGroup();

    getStudentFromGroup();

    studentDualBox(studentsList);
</script>
@endsection