@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة حل واجب</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('homeworkSolution.store')}}" method="POST">
            @csrf

            <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

            <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />

            <x-select-search :selectdata="$levels" name="student_id" label="الطالب" />

            <x-select-search :selectdata="$levels" name="homework_id" label="الواجب" />


            {!! form_check('solved','تم الحل ؟') !!}
            @error('solved')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_date('solved_at','تاريخ تسليم الحل') !!}
            @error('solved_at')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

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


    $("#group_id").html("<option>اختر</option>")
    $('#level_id').change(function(){
        $.ajax("/level/getGroups/" + this.value ,
        {
            dataType: 'json',
            success:function(data,status){
                $("#group_id").html("<option>اختر</option>")
                data.forEach(element => {
                $("#group_id").append(`
                <option value="${element.id}">${element.name}</option>
                `)
                });
            },
            error: function (jqXhr, textStatus, errorMessage) { 
                console.log(errorMessage)
            }
        })
    });

    $("#student_id").html("<option>اختر</option>")
    $("#homework_id").html("<option>اختر</option>")

    $('#group_id').change(function(){
        $.ajax("/groups/getStudents/" + this.value ,
        {
            dataType: 'json',
            success:function(data,status){
                $("#student_id").html("<option>اختر</option>")
                data.forEach(element => {
                $("#student_id").append(`
                <option value="${element.id}">${element.name}</option>
                `)
                });
            },
            error: function (jqXhr, textStatus, errorMessage) { 
                console.log(errorMessage)
            }
        })

        $.ajax("/groups/getHomework/" + this.value ,
        {
            dataType: 'json',
            success:function(data,status){
                console.log(data)
                $("#homework_id").html("<option>اختر</option>")
                data.forEach(element => {
                $("#homework_id").append(`
                <option value="${element.id}">${element.name}</option>
                `)
                });
            },
            error: function (jqXhr, textStatus, errorMessage) { 
                console.log(errorMessage)
            }
        })
    });





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