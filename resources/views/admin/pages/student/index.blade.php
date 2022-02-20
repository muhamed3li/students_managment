@extends('admin.welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">الطلاب</h3>
            <a href="{{route($model.'.create')}}" class="btn btn-success float-right">انشاء</a>


        </div>
        <div class="container">
            <a href="{{route('allBarcodesSmall')}}" class="btn btn-info float-right mr-5" id="print_parcode">طباعة كل
                الباركود مقاس صغير</a>

            <a href="{{route('allBarcodesBig')}}" class="btn btn-info float-right mr-5" id="print_parcode">طباعة كل
                الباركود مقاس كبير</a>

            <a class="btn btn-warning float-right mr-5" id="print_cards" href="{{route('printAllStudentCards')}}">طباعة
                كل البطاقات</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>التسلسل</th>
                        <th>رقم الهوية</th>
                        <th>اسم الطالب</th>
                        <th>النوع</th>
                        <th>العنوان</th>
                        <th>هاتف المنزل</th>
                        <th>الهاتف المحمول</th>
                        {{-- <th>اسم الأب</th> --}}
                        <th>هاتف ولى الأمر</th>
                        <th>اسم المدرسة</th>
                        <th>الحالة</th>
                        <th>حجز مدفوع</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>طباعة الباركود</th>
                        <th>طباعة البطاقة</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->gender == 1 ? 'مذكر' : 'مؤنث'}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->home_phone}}</td>
                        <td>{{$item->phone}}</td>
                        {{-- <td>{{$item->father_name}}</td> --}}
                        <td>{{$item->father_phone}}</td>
                        <td>{{$item->school}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->reserve_paid}}</td>

                        <td class="{{$item->level->name ?? " text-danger"}}">{{$item->level->name ?? "لا يوجد مستوى"}}
                        </td>

                        <td class="{{$item->group->name ?? " text-danger"}}">{{$item->group->name ?? "لا يوجد مجموعة"}}
                        </td>

                        <td>
                            <input type="hidden" name="id" value="{{$item->id}}" class="parcode_id_for_print">
                            <button type="submit" class="btn btn-info button_for_print_barcode">
                                طباعة الباركود
                            </button>
                        </td>
                        <td>
                            <form action="{{route('printSingleCard',$item->id)}}">
                                @csrf

                                <button type="submit" class="btn btn-warning button_for_print_card">
                                    طباعة البطاقة
                                </button>
                            </form>
                        </td>

                        <td class="text-right d-flex justify-content-around">
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
                        <th>رقم الهوية</th>
                        <th>اسم الطالب</th>
                        <th>النوع</th>
                        <th>العنوان</th>
                        <th>هاتف المنزل</th>
                        <th>الهاتف المحمول</th>
                        {{-- <th>اسم الأب</th> --}}
                        <th>هاتف ولى الأمر</th>
                        <th>اسم المدرسة</th>
                        <th>الحالة</th>
                        <th>حجز مدفوع</th>
                        <th>المستوى</th>
                        <th>المجموعة</th>
                        <th>طباعة الباركود</th>
                        <th>طباعة البطاقة</th>
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
        "responsive": false, "lengthChange": true, "autoWidth": true,
        "scrollX": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    //   $('#print_parcode').on('click', function() {
    //         $.ajax({
    //             type: "POST",
    //             url: '/printBarcode',
    //             data: {_token: '{{csrf_token()}}' },
    //             success: function (data) {
    //                 $.print(data);
    //             },
    //             error: function (data, textStatus, errorThrown) {
    //                 console.log(data);
    //             },
    //         });
    //     });

      $('.button_for_print_barcode').on('click', function() {
          let input = $(this).siblings('.parcode_id_for_print')[0];
          var id = $(input).val()
          
            $.ajax({
                type: "POST",
                url: '/printSinlgeBarcode/' + id,
                data: { _token: '{{csrf_token()}}' },
                success: function (data) {
                    $.print(data);
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);
                },
            });
        });
    });
</script>
@endsection