@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">طباعة باركود لمجموعة</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('barcode.printGroupStudentsPage')}}" method="POST">
                @csrf

                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />

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
</script>
@endsection