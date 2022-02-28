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

        .card {
            border: 2px solid black;
            border-radius: 5px;
            width: 85%;
            page-break-after: always;
            margin: 0 auto;
            margin-top: 5px;
            padding: 5px;
            position: relative;
        }


        /* .right {
            float: right;
            font-size: 9px;
            text-align: right;
        } */

        .right {
            position: absolute;
            top: 4px;
            left: 4px;
        }

        .left {
            /* float: left; */
            text-align: right;
            direction: rtl;
        }

        img {
            border-radius: 50%;
            width: 40px;
            border: 3px solid #fff;
            box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
            object-fit: cover
        }

        .label {
            font-weight: bold;
        }

        .text {
            margin-top: 3px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 180px;
            font-size: 12px;
        }

        .clear {
            clear: both;
        }

        .logo {
            position: absolute;
            font-size: 8px;
            transform: rotate(45deg) translateX(-30%) translateY(-90%);
            left: 0px;
            bottom: 0px;
        }
    </style>
</head>

<body>
    @foreach ($students as $student)
    <div class="card">
        <div class="logo">
            <p>المنصف في الرياضيات</p>
        </div>
        <div class="right">
            @if ($student->gender == true)
            <img src="{{asset('images/avatar_male_default.png')}}" alt="">
            @elseif ($student->gender == false)
            <img src="{{asset('images/avatar_female_default2.png')}}" alt="">
            @endif
        </div>
        <div class="left">
            <p class="text">{{$student->name}}</p>
            <p class="text">
                <span class="label">
                    الهاتف
                </span> : {{$student->phone}}
            </p>
            <p class="text">
                <span class="label">هاتف ولى الأمر</span>
                : {{$student->father_phone}}
            </p>
            <p class="text"><span class="label">
                    المستوى</span> :
                {{$student->level->name ?? ""}}
            </p>
            <p class="text">
                <span class="label">المجموعة</span>
                : {{$student->group->name ?? ""}}
            </p>
            <p class="text">
                {!! DNS1D::getBarcodeSVG("$student->id", 'UPCA',1) !!}
            </p>
        </div>
        <div class="clear"></div>
    </div>
    @endforeach
</body>

</html>