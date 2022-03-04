@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">طباعة باركود لمستوى</h3>
        </div>

        <div class="card-body">
            <form action="{{route('barcode.printLevelStudentsPage')}}" method="POST">
                @csrf

                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

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
</script>
@endsection