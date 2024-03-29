{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>CAT | School of X @if(isset($titlepage)) {{ $titlepage }} @endif</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" media="all">

    {{-- data table --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body class="animsition">
    <div class="page-content--bge5" style="background-color: rgba(59, 59, 221, 0.829)">
        {{-- navbar --}}
        {{-- <nav class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo-cat-white1.png') }}" width="70%" height="70%" alt="">
                </a>
            </div>
        </nav> --}}
        {{-- akhir navbar --}}

        {{-- main content --}}
        {{-- <div class="container rounded">
            <div class="login-wrap">
                <h2 class="text-center text-white mb-3">Silahkan Login</h2>
                <div class="login-content">
                    {{-- display erorr --}}
                    {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-primary alert-missible">
                            {{ $message }}
                            <button class="close" type="button" data-dismiss="alert">x</button>
                        </div>
                    @elseif ($message = Session::get('failed'))
                        <div class="alert alert-danger alert-missible">
                            {{ $message }}
                            <button class="close" type="button" data-dismiss="alert">x</button>
                        </div>
                    @endif
                        <div class="login-logo text-justify">
                        <h3>Masuk Akun</h3>
                        <p>Buat kamu yang sudah terdaftar, Silahkan masuk ke akunmu.</p>
                    </div>
                    <div class="login-form">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input class="au-input au-input--full form-control" type="text" name="username" required autofocus autocomplete="username" placeholder="username" value="{{ old('username') }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full form-control" type="password" name="password" placeholder="password" required autocomplete="current-password" >
                            </div>
                            <button class="au-btn au-btn--block m-b-20" style="background-color: #2059ebfd;" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- akhir main content --}}

    {{-- </div> --}}

    {{-- <script src="{{ asset('assets/vendor/jquery-3.2.1.min.js')}}"></script> --}}
    <!-- Jquery JS-->
    <!-- Bootstrap JS-->
    {{-- <script src="{{ asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script> --}}
    <!-- Vendor JS       -->
    {{-- <script src="{{ asset('assets/vendor/slick/slick.min.js')}}"> --}}
    {{-- </script> --}}
    {{-- <script src="{{ asset('assets/vendor/wow/wow.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/animsition/animsition.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"> --}}
    {{-- </script> --}}
    {{-- <script src="{{ asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/counter-up/jquery.counterup.min.js')}}"> --}}
    {{-- </script> --}}
    {{-- <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/select2/select2.min.js')}}"> --}}
{{-- </script>     --}}
<!-- Main JS-->


    {{-- <script src="{{ asset('assets/js/main.js')}}"></script> --}}
    {{-- data tables --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>    <!-- Page level custom scripts -->


    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>

</body></html> --}}


<!-- end document-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-smp.png') }}">
    <title>CAT | School of X</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/iofrm-theme27.css') }}">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="/login">
                <div class="logo">
                    <img class="logo-size" src="{{ asset('assets/images/logo-light.svg') }}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('assets/images/graphic8.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-icon">
                            <div class="icon-holder"><img src="{{ asset('assets/images/icon1.svg') }}" alt=""></div>
                        </div>
                        <h3 class="form-title-center">Portal Login</h3>

                        {{-- <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input class="au-input au-input--full form-control" type="text" name="username" required autofocus autocomplete="username" placeholder="username" value="{{ old('username') }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full form-control" type="password" name="password" placeholder="password" required autocomplete="current-password" >
                            </div>
                            <button class="au-btn au-btn--block m-b-20" style="background-color: #2059ebfd;" type="submit">Login</button>
                        </form> --}}

                        <form action="" method="post">
                            @csrf
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn ibtn-full">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>