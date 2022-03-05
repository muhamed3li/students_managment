@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الحضور</h3>
            <a href="{{route('attendance.create')}}" class="btn btn-success float-right">انشاء</a>


            <button type="button" class="btn btn-primary float-right mr-5" data-toggle="modal"
                data-target="#modelattend">
                تحضير الطلاب في يوم ما
            </button>

            <div class="modal fade" id="modelattend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">تحضير الطلاب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('attendance.attendAll')}}" method="POST">
                            <div class="modal-body">
                                @csrf

                                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                                <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />
                                <x-form.input-date name="day" label="التاريخ" :old="date('Y-m-d')" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                <button type="submit" class="btn btn-primary">تأكيد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <button type="button" class="btn btn-warning float-right mr-5" data-toggle="modal"
                data-target="#modelunattend">
                تغييب الطلاب في يوم ما
            </button>

            <div class="modal fade" id="modelunattend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">تغييب الطلاب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('attendance.unAttendAll')}}" method="POST">
                            <div class="modal-body">
                                @csrf
                                <x-select-search :selectdata="$levels" name="level_id2" label="المستوى" />

                                <x-select-search :selectdata="$levels" name="group_id2" label="المجموعة" />

                                <x-form.input-date name="day" label="التاريخ" :old="date('Y-m-d')" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                <button type="submit" class="btn btn-primary">تأكيد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{--
            <a href="{{route('attendance.attendStudentsWhoUnattended')}}" class="btn btn-info float-right mr-5"
                id="unattend_students_who_unattended">تغييب من لم يحضر</a> --}}


        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped td">
                <thead>
                    <tr>
                        <th class="dt-select">الرقم التسلسلي</th>
                        <th>هوية الطالب</th>
                        <th>اسم الطالب</th>
                        <th>المجموعة</th>
                        <th>المستوى</th>
                        <th>حالة الحضور</th>
                        <th>التاريخ</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->student->id ?? ""}}</td>
                        <td class="{{$item->student->name ?? " text-danger"}}">{{$item->student->name ?? "لا يوجد
                            طالب"}}</td>

                        <td>{{$item->student->group->name ?? ""}}</td>
                        <td>{{$item->student->level->name ?? ""}}</td>

                        <td class="{{$item->attend ?'text-success' : 'text-danger'}}">
                            {{$item->attend ? 'حضر' : 'غائب'}}
                        </td>

                        <td>{{$item->day}}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route('attendance.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route('attendance.destroy',$item->id)}}">
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
                            <input type="text" style="min-width:200px" id="exact" />
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

    <x-helper.delete-all model="attendance" />

</div>


@endsection

@section('specificScript')
<script>
    $('#group_id').select2()
    $('#level_id').select2()
    $('#group_id2').select2()
    $('#level_id2').select2()
    $(function () {

        $("#group_id").html("<option>اختر</option>")
        getGroupFromLevel();

        $("#group_id2").html("<option>اختر</option>")
        getGroupFromLevel('level_id2','group_id2');
    });

</script>
@endsection