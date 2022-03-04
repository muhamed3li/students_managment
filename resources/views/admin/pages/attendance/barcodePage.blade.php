@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">حضور بالباركود</h3>
        </div>

        <div class="container mt-5 mb-5" style="width: 70%">
            <div class="form-group">
                <label for="barcode">Barcode</label>
                <input type="text" class="form-control" id="barcode" name="barcode">
            </div>
            <button type="submit" class="btn btn-primary" id="barcodeButton">Submit</button>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>اسم الطالب</th>
                        <th>حالة الحضور</th>
                        <th>التاريخ</th>

                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>اسم الطالب</th>
                        <th>حالة الحضور</th>
                        <th>التاريخ</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $(function () {
      $('tbody').html('');


      $("#barcode").on('keypress',function(){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            attendAjax()
        }
      })
      $('#barcodeButton').on('click',attendAjax);
    });


    function attendAjax() {
        var id = $("#barcode").val()
        id = idFromBarcode(id)
        $.ajax({
            type: "POST",
            url: 'attendanceById/' + id,
            data: {_token: '{{csrf_token()}}'},
            success: function (data) {
                // console.log(data);
                let studentData = JSON.parse(data);
                let date = new Date().toLocaleDateString();
                $('tbody').append(`
                    <tr>
                        <td>${studentData.student.name}</td>
                        <td>حضر</td>
                        <td>${date}</td>
                    </tr>
                `)

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