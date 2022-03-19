<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PHP PDO!</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" class="min-vh-100">
    <!-- Start Navbar -->
    @include('components.header')
    <!-- End Navbar -->
    <!-- Hero section -->
    <div class="container-lg mt-5 text-center d-flex justify-content-center">
        @yield('content')
    </div>
    <!-- End Hero section -->
    <!-- Footer section -->
    @include('components.footer')
    <!-- End Footer section -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
