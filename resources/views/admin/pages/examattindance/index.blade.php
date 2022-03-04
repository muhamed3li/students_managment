@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">حضور الامتحان</h3>
            <a href="{{route('examattindance.create')}}" class="btn btn-success float-right">انشاء</a>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>اسم الطالب</th>
                        <th>اسم الامتحان</th>
                        <th>الدرجة</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>

                        <td class="{{$item->student->name ?? " text-danger"}}">{{$item->student->name ?? "لا يوجد
                            طالب"}}</td>

                        <td class="{{$item->exam->name ?? " text-danger"}}">{{$item->exam->name ?? "لا يوجد امتحان"}}
                        </td>

                        <td class="{{($item->degree < ($item->exam->exam_min ?? 0) )? 'text-danger' : 'text-success'}}">
                            {{$item->degree ?? "غياب"}}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route('examattindance.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route('examattindance.destroy',$item->id)}}">
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
                        <th>اسم الامتحان</th>
                        <th>الدرجة</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


    <x-helper.delete-all model="examattindance" />
</div>


@endsection

@section('specificScript')
<script>

</script>
@endsection