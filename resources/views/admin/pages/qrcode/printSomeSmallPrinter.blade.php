<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .visible-print {
            page-break-after: always;
            text-align: center;
            border: 2px solid black;
            border-radius: 5px;
            max-width: 85%;
            margin: 0 auto;
            margin-top: 5px;
        }

        .border {
            border: 2px solid black;
            width: 70px;
            height: 70px;
            margin: 8px auto;
            padding: 4px;
            border-radius: 5px;
            position: relative;
        }

        .scan-me {
            position: absolute;
            left: -50%;
            top: 50%;
            transform: rotate(270deg) translateX(10%);
        }

        .level-name {
            position: absolute;
            right: -50%;
            top: 50%;
            transform: rotate(90deg) translateY(-100%) translateX(-10%);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100px;
            height: 20px;
            font-size: 12px;
        }

        .clear {
            clear: both;
        }
    </style>
    <title>Document</title>
</head>

<body>
    @for ($i = 1; $i <= $data['number']; $i++) <div class="visible-print text-center">
        <p>المنصف في الرياضيات</p>
        <div class="border">
            <div class="scan-me">Scan me</div>
            {!! QrCode::size(70)->generate("{$data['link']}"); !!}
            <div class="level-name">{{$data['level_id']}}</div>
        </div>
        <div class="clear"></div>
        <p>{{$data['label']}}</p>
        </div>
        @endfor
</body>

</html>