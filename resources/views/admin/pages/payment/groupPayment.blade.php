@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة دفع مجموعة</h3>
        </div>



        <div class="container mt-2 mb-2" style="width: 70%">
            <div class="form-group">
                <label for="barcode">Barcode Or Id</label>
                <input type="text" class="form-control" id="barcode" name="barcode">
            </div>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('payment.payGroup')}}" method="POST">
                @csrf

                <div class="container" style="">
                    <div class="row">
                        <div class="col">
                            @if ($pay_from)
                            {!! form_date('pay_from','من',$pay_from) !!}
                            @else
                            {!! form_date('pay_from','من',date("Y-m-d")) !!}
                            @endif
                            @error('pay_from')
                            <p class="text-danger" id="myError">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            @if ($pay_to)
                            {!! form_date('pay_to','إلى',$pay_to) !!}
                            @else
                            {!! form_date('pay_to','إلى',date("Y-m-d")) !!}
                            @endif
                            @error('pay_to')
                            <p class="text-danger" id="myError">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>اسم الطالب</th>
                            <th>الشهرية</th>
                            <th>الملازم</th>
                            <th>الخصم</th>
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
                                    <input type="text" class="form-control zero" id="{{$student->id}}"
                                        name="month_paid[{{$index}}]" value="{{$month_paid ?? 0}}">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control zero" id="" name="malazem_paid[{{$index}}]"
                                        value="{{$malazem_paid ?? 0}}">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control zero" id="" name="discount[{{$index}}]"
                                        value="{{$discount ?? 0}}">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>اسم الطالب</th>
                            <th>الشهرية</th>
                            <th>الملازم</th>
                            <th>الخصم</th>
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
    $(function () {
      $("#barcode").on('keypress',function(){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            attendAjax()
        }
      })
        $(document).on("keydown", "form", function(event) { 
            return event.key != "Enter";
        });
    });


    function attendAjax() {
        var id = $("#barcode").val()
        id = idFromBarcode(id)
        id = parseInt(id)
        $(`#${id}`).select()
        $(`#${id}`).on('keypress',function(e){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                $("#barcode").focus()
            }
        })
        $("#barcode").val("")
    }

</script>
@endsection