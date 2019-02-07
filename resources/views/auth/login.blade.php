<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from neox-admin-templates.multipurposethemes.com/src/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 11:40:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://neox-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>NeoX Admin - Log in </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/master_style.css')}}">

    <!-- NeoX Admin skins -->
    <link rel="stylesheet" href="{{asset('assets/css/skins/_all-skins.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition bg-img" style="background-image:url(../../../images/bg-2.jpg)" data-overlay=5>

<div class="container pt-3 h-p100">
    <div class="row h-p100 justify-content-sm-center align-items-center">
        <div class="col-sm-6 col-md-4">

            <div class="card border-info text-center">
                <div class="card-header">
                    Sign in to continue
                </div>
                <div class="card-body">
                    <img src="../../../images/avatar/2.jpg" class="img-fluid rounded-circle w-150 mb-10">
                    <h4 class="text-center mb-20">Hunger & Debt Ltd</h4>
                    <form action="{{route('login')}}" method="post" class="form-signin">
                        @csrf
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mb-2" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mb-2" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <button class="btn btn-lg btn-primary btn-block mb-20" type="submit">Sign in</button>
                        <div class="checkbox float-left">
                            <input type="checkbox" id="basic_checkbox_1" >
                            <label for="basic_checkbox_1">Remember me</label>
                        </div>
                        <a href="#" class="float-right">Need help?</a>
                    </form>
                </div>
            </div>
            <a href="register.html" class="float-right text-white">Create an account </a>
        </div>
    </div>
</div>


<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>

<!-- Mirrored from neox-admin-templates.multipurposethemes.com/src/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 11:40:18 GMT -->
</html>

