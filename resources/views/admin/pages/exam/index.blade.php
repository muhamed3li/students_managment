@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الامتحانات</h3>
            <a href="{{route('exam.create')}}" class="btn btn-success float-right">انشاء</a>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>اسم الامتحان</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>تاريخ الامتحان</th>
                        <th>الدرجة العظمى</th>
                        <th>الدرجة الصغرى</th>
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

                        <td>{{$item->exam_date}}</td>
                        <td>{{$item->exam_max}}</td>
                        <td>{{$item->exam_min}}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route('exam.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route('exam.destroy',$item->id)}}">
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
                        <th>
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>

                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <form method="POST" action="{{route('exam.deleteAll')}}">
        @csrf
        <button type="submit" class="btn btn-danger mt-5 mb-1">
            حذف كل البيانات
            <i class="fas fa-trash"></i>
        </button>
    </form>
</div>


@endsection

@section('specificScript')
<script>

</script>
@endsection