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
    </style>
    <title>Document</title>
</head>

<body>

    <div class="visible-print text-center">
        {!! QrCode::size(100)->generate("https://www.youtube.com/"); !!}
    </div>
</body>

</html>