@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة دفع</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf

            {!! form_date('pay_from','من') !!}
            @error('pay_from')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('pay_to','إلى') !!}
            @error('pay_to')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('month_paid','الشهرية') !!}
            @error('month_paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('malazem_paid','الملازم') !!}
            @error('malazem_paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('discount','الخصم') !!}
            @error('discount')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('student_id','الطالب') !!}
            @error('student_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('group_id','المجموعة') !!}
            @error('group_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            <!-- /.card-body -->

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
    $("#group_id").html("")
    $('#student_id').change(function(){
        $.ajax("/student/getGroups/" + this.value ,
        {
            dataType: 'json',
            success:function(data,status){
                $("#group_id").html("")

                $("#group_id").append(`
                    <option value="${data.id}">${data.name}</option>
                `)

            },
            error: function (jqXhr, textStatus, errorMessage) { 
                console.log(errorMessage)
            }
        })
    });
    
</script>
@endsection