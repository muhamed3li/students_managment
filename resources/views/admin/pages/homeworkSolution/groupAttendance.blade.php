@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة حضور الواجب لمجموعة <span class="text-success">
                    {{$group->name}}</span> واجب <span class="text-success">
                    {{$homework->name}}</span></h3>
        </div>

        <div class="container mt-2 mb-2" style="width: 70%">
            <div class="form-group">
                <label for="barcode">Barcode Or Id</label>
                <input type="text" class="form-control" id="barcode" name="barcode">
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('homeworkSolution.attendGroup',$homework)}}" method="POST">
                @csrf

                <table id="group" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>اسم الطالب</th>
                            <th>الدرجة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>
                                <div class="form-group mb-0">
                                    <label for="">{{$student->name}}</label>
                                    <input type="hidden" class="form-control" id="" name="id[{{$index}}]"
                                        value="{{$student->id}}">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control degree" id="{{$student->id}}"
                                        name="degree[{{$index}}]"
                                        value="{{$student->getHomeworkSolution($homework->id)->degree ?? ''}}">
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

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection




@section('specificScript')
<script>
    $(function () {
      $("#barcode").on('keypress',function(){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            attendAjax()
        }
      })
    });


    function attendAjax() {
        var id = $("#barcode").val()
        id = idFromBarcode(id)
        id = parseInt(id)
        $(`#${id}`).select()
        $(`#${id}`).get(0).scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"})
        $(`#${id}`).on('keypress',function(e){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                e.preventDefault();
                $("#barcode").focus()
            }
        })
        $("#barcode").val("")
    }


    $(".degree").each(function(index,element){
        $(element).focusin(function(){
            $(element).parent().parent().parent().css("background-color",'#AFD5AA')
        })
        $(element).focusout(function(){
            $(element).parent().parent().parent().css("background-color",'transparent')
        })
    })

    $(".degree").each(function(index,element){
        $(element).on('keypress',function(e){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                e.preventDefault();
                $("#barcode").focus()
            }
        })
    })

</script>
@endsection