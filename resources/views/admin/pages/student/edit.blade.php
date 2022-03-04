@extends('admin.welcome')

@section('content')

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل طالب</h3>
        </div>

        <form action="{{route('student.update',$student)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body row">
                <div class="col-6">
                    <x-form.input-text name="name" label="*اسم الطالب" :old="$student->name" />

                    <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="$student->level_id" />

                    <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="$student->group_id" />

                    <x-form.input-radio name="gender" label="النوع" :arr="[
                    '0' => 'مؤنث',
                    '1' => 'مذكر',
                ]" :old="$student->gender" />

                    <x-form.input-text name="address" label="العنوان" :old="$student->address" />

                    <x-form.input-text name="home_phone" label="هاتف المنزل" :old="$student->home_phone" />
                </div>
                <div class="col-6">
                    <x-form.input-text name="phone" label="هاتف المحمول" :old="$student->phone" />


                    <x-form.input-text name="father_phone" label="هاتف ولى الأمر" :old="$student->father_phone" />

                    <x-form.input-text name="school" label="اسم المدرسة" :old="$student->school" />

                    <x-form.select-array name="status" label="الحالة الدراسية" :selectdata="[
                'reserve' => 'قيد الحجز',
                'in' => 'يدرس',
                'out' => 'لا يدرس',
                'fired' => 'مطرود'
                ]" :old="$student->status" />

                    <x-form.input-text name="reserve_paid" label="قيمة الحجز المدفوع" :old="$student->reserve_paid" />

                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
</div>

@endsection


@section('specificScript')
<script>
    $('#group_id').select2()
    $('#level_id').select2()
    getGroupFromLevel();
</script>
@endsection