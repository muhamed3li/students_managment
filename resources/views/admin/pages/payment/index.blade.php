@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">المدفوعات</h3>
            <a href="{{route('payment.create')}}" class="btn btn-success float-right">انشاء</a>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>الشهر</th>
                        <th>الشرية</th>
                        <th>الملازم</th>
                        <th>الخصم</th>
                        <th>الإجمالي</th>
                        <th>اسم الطالب</th>
                        <th>اسم المجموعة</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->month->name ?? ""}}</td>
                        <td>{{$item->month_paid}}</td>
                        <td>{{$item->malazem_paid}}</td>
                        <td>{{$item->discount}}</td>
                        <td>{{$item->total}}</td>

                        <td class="{{$item->student->name ?? " text-danger"}}">{{$item->student->name ?? "لا يوجد
                            طالب"}}</td>

                        <td class="{{$item->student->group->name ?? " text-danger"}}">{{$item->student->group->name ??
                            "لا يوجد
                            مجموعة"}}
                        </td>

                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route('payment.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route('payment.destroy',$item->id)}}">
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
                            <input type="text" style="min-width:200px" />
                        </th>
                        <th>

                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>



    <x-helper.delete-all model="payment" />
</div>


@endsection