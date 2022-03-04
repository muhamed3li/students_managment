@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة حل واجب</h3>
        </div>

        <form action="{{route('homeworkSolution.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />

                <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="old('group_id')" />

                <x-select-search :selectdata="$students" name="student_id" label="الطالب" :old="old('student_id')" />

                <x-select-search :selectdata="$homeworks" name="homework_id" label="الواجب" :old="old('homework_id')" />

                <x-form.input-text name="degree" label="الدرجة" />

                <x-form.input-date name="solved_at" label="تاريخ تسليم الحل" :old="date('Y-m-d')" />
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
            <h3 class="card-title">إضافة حل الواجب برقم الهوية او الباركود</h3>
        </div>

        <form action="{{route('homework.homeworkSolutionByBarcodeOrId')}}" method="POST" id="barcodeOrIdFrom">
            @csrf
            <div class="card-body">
                <x-select-search :selectdata="$groups" name="group_id2" label="المجموعة" :old="old('group_id2')" />

                <x-select-search :selectdata="$homeworks" name="homework_id2" label="الواجب"
                    :old="old('homework_id2')" />

                <x-form.input-date name="solved_at2" label="تاريخ تسليم الحل" :old="date('Y-m-d')" />

                <div class="form-group">
                    <label>Students</label>
                    <select class="duallistbox" multiple="multiple" style="display: none;" name="students[]"
                        id="students">
                    </select>
                </div>
                @error('students')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror

                <div class="form-group">
                    <label for="barcode">Barcode</label>
                    <input type="text" class="form-control" id="barcode" name="barcode">
                </div>



                <x-form.input-text name="degree2" label="الدرجة" />

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
    $("#barcode").focus()


    getGroupFromLevel();

    getHomeworkFromGroup();

    getStudentFromGroup();

    getHomeworkFromGroup('group_id2','homework_id2');

    $("#degree2").on('keypress',function(){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $("#barcodeOrIdFrom").submit()
        }
    })

    studentDualBox(studentsList);
</script>
@endsection