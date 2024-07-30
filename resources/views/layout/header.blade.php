<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap CDN -->

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Unicons -->

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Toastr -->

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Custom Style -->

    <!-- Individual Style -->
    @yield('script')
    <!-- Individual Style -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/Favicon/favicon.ico')}}" type="image/x-icon">
    <!-- Favicon -->
    <title>{{setting('site.title')}}</title>
</head>

<body>
    <div class="container">
        @include('partials.navbar')