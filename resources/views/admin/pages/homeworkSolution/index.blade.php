@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">حلول الواجبات</h3>
            <a href="{{route('homeworkSolution.create')}}" class="btn btn-success float-right">انشاء</a>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>اسم الطالب</th>
                        <th>الواجب</th>
                        <th>الدرجة</th>
                        <th>تاريخ الحل</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->student->level->name ?? ""}}</td>

                        <td>{{$item->student->group->name ?? ""}}</td>

                        <td>{{$item->student->name ?? ""}}</td>

                        <td>{{$item->homework->name ?? ""}}</td>

                        <td class="{{$item->degree == null ? 'text-danger' : 'text-success'}}">
                            {{$item->degree ?? "غياب"}}</td>

                        <td>{{$item->solved_at}}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route('homeworkSolution.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route('homeworkSolution.destroy',$item->id)}}">
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


    <x-helper.delete-all model="homeworkSolution" />
</div>


@endsection