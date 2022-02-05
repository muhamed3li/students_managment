<!doctype html>
<html lang="en" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{--
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        a {
            color: #f96332;
        }

        .m-t-5 {
            margin-top: 5px;
        }

        .card {
            background: #fff;
            margin-bottom: 35px;
            transition: .5s;
            border: 0;
            border-radius: .1875rem;
            display: inline-block;
            position: relative;
            width: 100%;
            box-shadow: none;
        }

        .card .body {
            font-size: 14px;
            color: #424242;
            padding: 20px;
            font-weight: 400;
        }

        .profile-page .profile-header {
            position: relative
        }

        .profile-page .profile-header .profile-image img {
            border-radius: 50%;
            width: 140px;
            border: 3px solid #fff;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23)
        }

        .profile-page .profile-header .social-icon a {
            margin: 0 5px
        }

        .profile-page .profile-sub-header {
            min-height: 60px;
            width: 100%
        }

        .profile-page .profile-sub-header ul.box-list {
            display: inline-table;
            table-layout: fixed;
            width: 100%;
            background: #eee
        }

        .profile-page .profile-sub-header ul.box-list li {
            border-right: 1px solid #e0e0e0;
            display: table-cell;
            list-style: none
        }

        .profile-page .profile-sub-header ul.box-list li:last-child {
            border-right: none
        }

        .profile-page .profile-sub-header ul.box-list li a {
            display: block;
            padding: 15px 0;
            color: #424242
        }

        p {
            margin: 5px;
        }

        svg {
            transform: scale(1, 2.5)
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <div class="container profile-page">
        <div class="row" style="text-align: right">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right">
                                    @if ($student->gender == true)
                                    <img src="{{asset('images/avatar_male_default.png')}}" alt="">
                                    @elseif ($student->gender == false)
                                    <img src="{{asset('images/avatar_female_default.jpg')}}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0">
                                    {{$student->name}}
                                </h4>
                                <span class="job_post">
                                    <strong>الهاتف :</strong> {{$student->phone}}
                                </span>

                                <p>
                                    <strong>هاتف ولى الأمر :</strong>
                                    {{$student->father_phone}}
                                </p>
                                <p>
                                    <strong>المستوى :</strong>
                                    {{$student->level->name ?? ""}}
                                </p>
                                <p>
                                    <strong>المجموعة :</strong>
                                    {{$student->group->name ?? ""}}
                                </p>
                                <p>
                                    <strong>الباركود :</strong>
                                </p>
                                <p style="margin-top: 2em">
                                    {!! DNS1D::getBarcodeSVG("$student->id", 'UPCA') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


</body>

</html>