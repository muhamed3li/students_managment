@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة واجب</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('homework.store')}}" method="POST">
            @csrf

            {!! form_text('name','اسم الواجب') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

            <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />


            {!! form_date('deadline','اخر معاد للتسليم') !!}
            @error('deadline')
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