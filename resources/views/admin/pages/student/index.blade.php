@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الطلاب</h3>
            <a href="{{route($model.'.create')}}" class="btn btn-success float-right">انشاء</a>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>اسم الطالب</th>
                        <th>النوع</th>
                        <th>العنوان</th>
                        <th>هاتف المنزل</th>
                        <th>الهاتف المحمول</th>
                        <th>اسم الأب</th>
                        <th>هاتف الأب</th>
                        <th>اسم المدرسة</th>
                        <th>الحالة</th>
                        <th>حجز مدفوع</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->gender == 1 ? 'مذكر' : 'مؤنث'}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->home_phone}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->father_name}}</td>
                        <td>{{$item->father_phone}}</td>
                        <td>{{$item->school}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->reserve_paid}}</td>
                        <td>{{$item->level->name}}</td>
                        <td>{{$item->group->name ?? ""}}</td>
                        <td class="text-right">
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
                        <th>اسم الطالب</th>
                        <th>النوع</th>
                        <th>العنوان</th>
                        <th>هاتف المنزل</th>
                        <th>الهاتف المحمول</th>
                        <th>اسم الأب</th>
                        <th>هاتف الأب</th>
                        <th>اسم المدرسة</th>
                        <th>الحالة</th>
                        <th>حجز مدفوع</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection