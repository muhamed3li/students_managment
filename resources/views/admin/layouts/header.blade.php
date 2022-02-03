<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/adminLTE/dist/css/adminlte.min.css') }}">

    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">


    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">


    {{-- my styles --}}
    <link rel="stylesheet" href="{{asset('css/myStyles.css')}}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">