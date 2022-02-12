@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">طباعة بطاقات لعدد من الطلاب</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('cards.printSomeStudentsPage')}}" method="POST">
                @csrf


                <div class="card-body">
                    <div class="form-group">
                        <label for="barcode">باركود او رقم الهوية</label>
                        <input type="text" class="form-control" id="barcode" name="barcode">
                    </div>
                </div>


                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />

                <x-select-search :selectdata="$levels" name="student_id" label="الطالب" />

                <div class="card-body">
                    <div class="form-group">
                        <label>Students</label>
                        <select class="duallistbox" multiple="multiple" style="display: none;" name="students[]"
                            id="students">
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
                </div>
            </form>
        </div>

        <!-- /.card -->
    </div>

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
    });


    $('#student_id').change(function(){
        let id = this.value
        let name = $( "#student_id option:selected" ).text()
        studentsList.append(`
            <option value="${id}" selected>${name}</option>
        `)
        studentsList.bootstrapDualListbox('refresh')
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