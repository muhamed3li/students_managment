@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة حضور الامتحانات لمجموعة <span class="text-success">
                    {{$group->name}}</span> امتحان <span class="text-success">
                    {{$exam->name}}</span></h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('examattindance.attendGroup',$exam)}}" method="POST">
                @csrf

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>اسم الطالب</th>
                            <th>الدرجة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                        <tr>
                            <td>
                                <div class="form-group mb-0">
                                    <label for="">{{$student->name}}</label>
                                    <input type="hidden" class="form-control" id="" name="id[{{$index}}]"
                                        value="{{$student->id}}">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="" name="degree[{{$index}}]"
                                        value="{{$student->getExamAttendance($exam->id)->degree ?? ''}}">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>اسم الطالب</th>
                            <th>الدرجة</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $('.select2').select2()

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

    $("#exam_id").html("<option>اختر</option>")
    $('#group_id').change(function(){
        $.ajax("/groups/getExams/" + this.value ,
        {
            dataType: 'json',
            success:function(data,status){
                $("#exam_id").html("<option>اختر</option>")
                data.forEach(element => {
                $("#exam_id").append(`
                <option value="${element.id}">${element.name}</option>
                `)
                });
            },
            error: function (jqXhr, textStatus, errorMessage) { 
                console.log(errorMessage)
            }
        })
    });
</script>
@endsection