@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة طالب</h3>
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


            {!! form_text('name','اسم الطالب') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_check('gender','مذكر ؟') !!}
            @error('gender')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('address','العنوان') !!}
            @error('address')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('home_phone','هاتف المنزل') !!}
            @error('home_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('phone','هاتف المحمول') !!}
            @error('phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('father_name','اسم الأب') !!}
            @error('father_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('father_phone','هاتف الأب') !!}
            @error('father_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('school','اسم المدرسة') !!}
            @error('school')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select_array('status','الحالة الدراسية',[
            'reserve' => 'قيد الحجز',
            'in' => 'يدرس',
            'out' => 'لا يدرس',
            'fired' => 'مطرود'
            ]
            ) !!}
            @error('status')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_text('reserve_paid','قيمة الحجز المدفوع') !!}
            @error('reserve_paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('level_id','اسم المستوى') !!}
            @error('level_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_select('group_id','اسم المجموعة') !!}
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
    $('#level_id').change(function(){
        $.ajax("/level/getGroups/" + this.value ,
    {
        dataType: 'json',
        success:function(data,status){
            $("#group_id").html("")
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