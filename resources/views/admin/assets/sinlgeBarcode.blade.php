<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Print Student Barcode</title>
    <style>
        .body {
            /* display: flex;
            justify-content: center;
            align-items: center; */
            /* height: 100vh; */
        }

        .barcode div {
            height: 100vh !important;
        }

        svg {
            transform: scale(0.80, 2.5)
        }
    </style>
</head>

<body class="body">
    <div style="" class="barcode col-4">
        <p style="font-size: 0.8em;margin-bottom:2em;margin-left:2em;width:100vw">{{$student->name}}</p>
        {!! DNS1D::getBarcodeSVG("$student->id", 'UPCA') !!}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>