<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .con {
            margin: 0 auto;
            width: 85%;
            text-align: center;
            margin-top: 5px;
            page-break-after: always;
            border: 2px solid black;
            padding: 4px;
        }

        .text {
            margin: 0 auto;
            margin-top: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 180px;
            font-size: 13px;
            text-align: right;
            direction: rtl;
        }
    </style>
</head>

<body>
    @foreach ($students as $student)
    <div class="con">
        <h2>المنصف في الرياضيات</h2>
        <p class="text"><strong class="title">الطالب :</strong>{{$student->name}}</p>
        <p class="text"><strong class="title">المستوى :</strong>{{$student->level->name}}</p>
        <p class="text"><strong class="title">المجموعة :</strong>{{$student->group->name}}</p>
        <p class="text">
            {!! DNS1D::getBarcodeSVG("$student->id", 'UPCA',1) !!}
        </p>
    </div>
    @endforeach
</body>

</html>