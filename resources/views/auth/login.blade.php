<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('assets2/images/logo/logo.png') }}" alt="CoolAdmin" width="60%">
                            </a>
                        </div>
                        <div class="login-form">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                            <br/>
                                        @endforeach
                                   
                                </div>
                            @endif

                             @if(Session::has('not_active'))
                                 <div class="alert alert-warning" role="alert">                     
                                       
                                      {{ session('not_active') }}
                                        
                                 </div>
                             @endif


                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Нэвтрэх нэр</label>
                                    <input class="au-input au-input--full" type="email" placeholder="нэвтрэх нэр.." placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus oninvalid="this.setCustomValidity('Хэрэглэгчийн имэйл оруулна уу')"
    oninput="this.setCustomValidity('')" >
                                   
                                </div>
                                <div class="form-group">
                                    <label>Нууц үг</label>
                                    <input class="au-input au-input--full" type="password" placeholder="нууц үг.." name="password" required autocomplete="current-password" oninvalid="this.setCustomValidity('Хэрэглэгчийн нууц үгийг заавал оруулна уу')"
    oninput="this.setCustomValidity('')">
                                    
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Нууц үг сануулах
                                    </label>
                                    
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Нэвтрэх</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Админтай холбогдох:
                                    <a href="#">99134731</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

      <script src="{{ asset('assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
   

</body>

</html>
<!-- end document-->
