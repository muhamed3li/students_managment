<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Print Barcodes</title>
    <style>
        /* .row {
            display: flex;
            justify-content: left;
            align-items: center;
            height: 100vh;
        } */

        /* .barcode {
            width: 100%;
            height: 100%;
        } */

        /* .barcode div {
            height: 50px !important;
        } */

        svg {
            margin-left: -40px;
            transform: scale(0.6, 1)
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            @foreach ($students as $student)
            <div style="font-size:0.8em;margin-bottom:2em" class="barcode">
                <p style="margin-bottom:1.1em">{{$student->name}}</p>
                {!! DNS1D::getBarcodeSVG("$student->id", 'UPCA') !!}
            </div>
            @endforeach

        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>