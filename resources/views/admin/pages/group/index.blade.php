@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">المجاميع</h3>
            <a href="{{route($model.'.create')}}" class="btn btn-success float-right">انشاء</a>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>اسم المجموعة</th>
                        <th>المستوى الدراسي</th>
                        <th>الميعاد</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->name}}</td>
                        <td class="{{$item->level == null ? 'text-danger' : ''}}">{{$item->level == null ? "لا يوجد
                            مستوى" :
                            $item->level->name}}</td>
                        <td>
                            @if ($item->time)
                            <table class="table table-bordered" style="display: none">
                                <thead>
                                    <button class="btn btn-outline-primary show-time-table">show</button>
                                    <tr>
                                        <th>اليوم</th>
                                        <th>الوقت</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {!! render_time_in_table($item->time->sat,'سبت') !!}
                                    {!! render_time_in_table($item->time->sun,'حد') !!}
                                    {!! render_time_in_table($item->time->mon,'اثنين') !!}
                                    {!! render_time_in_table($item->time->tus,'ثلاثاء') !!}
                                    {!! render_time_in_table($item->time->wed,'اربعاء') !!}
                                    {!! render_time_in_table($item->time->thu,'خميس') !!}
                                    {!! render_time_in_table($item->time->fri,'جمعة') !!}
                                </tbody>
                            </table>
                            @else
                            <span class="text-danger">لا يوجد موعد</span>
                            @endif
                        </td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route($model.'.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route($model.'.destroy',$item->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button type="submit" class="btn btn-danger ml-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>التسلسل</th>
                        <th>اسم المجموعة</th>
                        <th>المستوى الدراسي</th>
                        <th>الميعاد</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <form method="POST" action="{{route($model.'.deleteAll')}}">
        @csrf
        <button type="submit" class="btn btn-danger mt-5 mb-1">
            حذف كل البيانات
            <i class="fas fa-trash"></i>
        </button>
    </form>
</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    $('.show-time-table').click(function (e) {
        $(this).parent().find('table').toggle()
    });
</script>
@endsection