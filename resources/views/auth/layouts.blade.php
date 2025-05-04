<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>RMS - Login System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/login-register/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/login-register/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/login-register/fonts/flaticon/font/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/login-register/img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/login-register/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/login-register/css/custom.css') }}">

</head>
<body id="top" class="login-3-bodycolor">
<div class="page_loader"></div>

<!-- Login 20 start -->
<div class="login-20">
    <div class="login-20-inner">
        <div class="container">
            @yield('content')
        </div>
    </div>
</div>
<!-- Login 20 end -->

<!-- External JS libraries -->
<script src="{{ asset('assets/login-register/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/login-register/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/login-register/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/login-register/js/app.js') }}"></script>
<!-- Custom JS Script -->
</body>
</html>
