@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">صفحة دفع مجموعة</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('payment.groupPayment')}}" method="POST">
                @csrf


                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />

                <x-select-search :selectdata="$months" name="month_id" label="*اسم الشهر" />

                <x-form.input-text name="month_paid" label="*الشهرية" />

                <x-form.input-text name="malazem_paid" label="*الملازم" />

                <x-form.input-text name="discount" label="الخصم" />

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('specificScript')
<script>
    $('.select2').select2()

    getGroupFromLevel();
   
    getLevelByIdForMoney('month_paid','malazem_paid','discount','total');
</script>
@endsection