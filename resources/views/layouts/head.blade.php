<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('Assets/Logo/logo.png')}}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        <?php if ($title != " ") {
       echo $title;
    }else {
        echo "Welcome | AR Technology";
    } ?>
    </title>
    <!-- Bootstrap Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    {{-- Font icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="85">