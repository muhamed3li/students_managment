@extends('admin.welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل طالب</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.update',$obj->id)}}" method="POST">
            @csrf
            @method('PUT')



            {!! form_text('name','اسم الطالب',$obj->name) !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_check('gender','مذكر ؟',$obj->gender) !!}
            @error('gender')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('address','العنوان',$obj->address) !!}
            @error('address')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('home_phone','هاتف المنزل',$obj->home_phone) !!}
            @error('home_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('phone','الهاتف المحمول',$obj->phone) !!}
            @error('phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {{-- {!! form_text('father_name','اسم الأب',$obj->father_name) !!}
            @error('father_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror --}}


            {!! form_text('father_phone','هاتف ولى الأمر',$obj->father_phone) !!}
            @error('father_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('school','اسم المدرسة',$obj->school) !!}
            @error('school')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select_array('status','الحالة الدراسية',['reserve','in','out','fired'],$obj->status) !!}
            @error('status')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_text('reserve_paid','الحجز الذي تم دفعه',$obj->reserve_paid) !!}
            @error('reserve_paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('level_id','اسم المستوى الدراسي',$obj->level_id) !!}
            @error('level_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_select('group_id','اسم المجموعة',$obj->group_id) !!}
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