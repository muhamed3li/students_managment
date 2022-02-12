@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الواجب</h3>
            <a href="{{route('homework.create')}}" class="btn btn-success float-right">انشاء</a>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>اسم الواجب</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>اخر موعد للتسليم</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->name}}</td>

                        <td class="{{$item->level->name ?? 'text-danger'}}">{{$item->level->name ?? "لا يوجد مستوى"}}
                        </td>

                        <td class="{{$item->group->name ?? 'text-danger'}}">{{$item->group->name ?? "لا يوجد مجموعة"}}
                        </td>

                        <td>{{$item->deadline}}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route('homework.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route('homework.destroy',$item->id)}}">
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
                        <th>اسم الواجب</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>اخر موعد للتسليم</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <form method="POST" action="{{route('homework.deleteAll')}}">
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
    });
</script>
@endsection