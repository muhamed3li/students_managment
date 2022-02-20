<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Print parcodes</title>
    <style>
        .barcode div {
            height: 50px !important;
        }

        .barcode {
            margin-bottom: 2em;
        }

        svg {
            transform: scale(1, 2.5)
        }

        .br {
            page-break-before: always;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            @foreach (App\Models\Student::get() as $student)
            <div style="" class="barcode col-4">
                <p style="font-size: 1.5em;margin-bottom:1em;margin-left:2em">{{$student->name}}</p>
                {!! DNS1D::getBarcodeSVG("$student->id", 'UPCA') !!}
                @if ($student->id % 40 == 0)
                <div class="br"></div>
                @endif
            </div>
            @endforeach
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>