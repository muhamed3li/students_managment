@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الحضور</h3>
            <a href="{{route($model.'.create')}}" class="btn btn-success float-right">انشاء</a>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right mr-5" data-toggle="modal"
                data-target="#modelattend">
                تحضير الطلاب في يوم ما
            </button>

            <!-- Modal -->
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
                        <form action="{{route('students.attendAll')}}" method="POST">
                            <div class="modal-body">
                                @csrf

                                <x-select-search :selectdata="$levels" name="level_id" label="المستوى" />

                                <x-select-search :selectdata="$levels" name="group_id" label="المجموعة" />
                                {!! form_date('day','اليوم') !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                <button type="submit" class="btn btn-primary">تأكيد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning float-right mr-5" data-toggle="modal"
                data-target="#modelunattend">
                تغييب الطلاب في يوم ما
            </button>

            <!-- Modal -->
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
                        <form action="{{route('students.unAttendAll')}}" method="POST">
                            <div class="modal-body">
                                @csrf
                                <x-select-search :selectdata="$levels" name="level_id2" label="المستوى" />

                                <x-select-search :selectdata="$levels" name="group_id2" label="المجموعة" />
                                {!! form_date('day','اليوم') !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                <button type="submit" class="btn btn-primary">تأكيد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>الرقم التسلسلي</th>
                        <th>اسم الطالب</th>
                        <th>حالة الحضور</th>
                        <th>التاريخ</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td class="{{$item->student->name ?? " text-danger"}}">{{$item->student->name ?? "لا يوجد
                            طالب"}}</td>

                        <td class="{{$item->attend ?'text-success' : 'text-danger'}}">
                            {{$item->attend ? 'حضر' : 'غائب'}}
                        </td>

                        <td>{{$item->day}}</td>
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
                        <th>الرقم التسلسلي</th>
                        <th>اسم الطالب</th>
                        <th>حالة الحضور</th>
                        <th>التاريخ</th>
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
    {{-- <a href="{{route($model.'.deleteAll')}}" class="btn btn-danger mb-5 mt-5">حذف كل البيانات</a> --}}

</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $('#group_id').select2()
    $('#level_id').select2()
    $('#group_id2').select2()
    $('#level_id2').select2()
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      
        $("#group_id").html("<option>اختر</option>")
        $('#level_id').change(function(){
            $.ajax("/level/getGroups/" + this.value ,
            {
                dataType: 'json',
                success:function(data,status){
                    $("#group_id").html("<option>اختر</option>")
                    data.forEach(element => {
                    $("#group_id").append(`
                    <option value="${element.id}">${element.name}</option>
                    `)
                    });
                },
                error: function (jqXhr, textStatus, errorMessage) { 
                    console.log(errorMessage)
                }
            })
        });

        $("#group_id2").html("<option>اختر</option>")
        $('#level_id2').change(function(){
            $.ajax("/level/getGroups/" + this.value ,
            {
                dataType: 'json',
                success:function(data,status){
                    $("#group_id2").html("<option>اختر</option>")
                    data.forEach(element => {
                    $("#group_id2").append(`
                    <option value="${element.id}">${element.name}</option>
                    `)
                    });
                },
                error: function (jqXhr, textStatus, errorMessage) { 
                    console.log(errorMessage)
                }
            })
        });
    });

</script>
@endsection