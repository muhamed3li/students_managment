@extends('admin.welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مجموعة</h3>
        </div>

        <form action="{{route('group.store')}}" method="POST">
            @csrf

            <div class="card-body">

                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />

                <x-form.input-text name="name" label="اسم المجموعة" />

                <div class="form-group">
                    <label for="time">الميعاد</label>
                    <select name="time_id" class="form-control" id="time">
                        @foreach ($times as $item)
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
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>



@endsection