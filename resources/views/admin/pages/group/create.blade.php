@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مجموعة</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf

            {!! form_text('name','اسم المجموعة') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('level_id','المستوى الدراسي') !!}
            @error('level_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <div class="form-group">
                <label for="time">الميعاد</label>
                <select name="time_id" class="form-control" id="time">
                    @foreach (App\Models\Time::doesntHave('group')->get() as $item)
                    <option value="{{$item->id}}">
                        {{is_time_zero($item->sat) ? " " : " // سبت" . format_time_to_twelve($item->sat)}}
                        {{is_time_zero($item->sun) ? " " : " // حد" . format_time_to_twelve($item->sun)}}
                        {{is_time_zero($item->mon) ? " " : " // اثنين" . format_time_to_twelve($item->mon)}}
                        {{is_time_zero($item->tus) ? " " : " // ثلاثاء" . format_time_to_twelve($item->tus)}}
                        {{is_time_zero($item->wed) ? " " : " // اربعاء" . format_time_to_twelve($item->wed)}}
                        {{is_time_zero($item->thu) ? " " : " // خميس" . format_time_to_twelve($item->thu)}}
                        {{is_time_zero($item->fri) ? " " : " // جمعة" . format_time_to_twelve($item->fri)}}
                    </option>
                    @endforeach
                </select>
            </div>
            @error('time_id')
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