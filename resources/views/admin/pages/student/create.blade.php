@extends('admin.welcome')

@section('content')

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة طالب</h3>
        </div>

        <form action="{{route('student.store')}}" method="POST">
            @csrf

            <div class="card-body row">
                <div class="col-6">
                    <x-form.input-text name="name" label="*اسم الطالب" />

                    <x-select-search :selectdata="$levels" name="level_id" label="المستوى" :old="old('level_id')" />
                    <x-select-search :selectdata="$groups" name="group_id" label="المجموعة" :old="old('group_id')" />
                    <x-form.input-radio name="gender" label="النوع" :arr="[
                            '0' => 'مؤنث',
                            '1' => 'مذكر',
                        ]" />


                    <x-form.input-text name="address" label="العنوان" />

                    <x-form.input-text name="home_phone" label="هاتف المنزل" />
                </div>

                <div class="col-6">


                    <x-form.input-text name="phone" label="هاتف المحمول" />


                    <x-form.input-text name="father_phone" label="هاتف ولى الأمر" />

                    <x-form.input-text name="school" label="اسم المدرسة" />

                    <x-form.select-array name="status" label="الحالة الدراسية" :selectdata="[
                'reserve' => 'قيد الحجز',
                'in' => 'يدرس',
                'out' => 'لا يدرس',
                'fired' => 'مطرود'
                ]" />

                    <x-form.input-text name="reserve_paid" label="قيمة الحجز المدفوع" />

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