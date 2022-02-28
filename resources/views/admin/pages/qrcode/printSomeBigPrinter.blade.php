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
            margin: 10px 15px;
        }

        .con .visible-print {
            float: left;
        }

        .aaa {
            page-break-after: always;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="con">
        @for ($i = 1; $i <= $data['number']; $i++) <div class="visible-print text-center">
            {!! QrCode::size(100)->generate("{$data['link']}"); !!}
    </div>
    @if ($i % 50 == 0)
    <div class="aaa"></div>
    @endif
    @endfor
    </div>
</body>

</html>