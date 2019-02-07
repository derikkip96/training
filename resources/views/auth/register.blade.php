<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from neox-admin-templates.multipurposethemes.com/src/pages/samplepage/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 11:40:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://neox-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>NeoX Admin - Registration </title>

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
                    Register a new membership
                </div>
                <div class="card-body">
                    <form action="{{url('/manage/auth/register')}}" method="post" class="form-signin">
                        @csrf
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb-2" placeholder="Name" name="name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mb-2" name="email" placeholder="Email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <input type="password" class="form-control mb-2" placeholder="Password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <input type="password" class="form-control mb-2" placeholder="Retype Password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <button class="btn btn-lg btn-primary btn-block mb-20" type="submit">SIGN UP</button>
                        <div class="checkbox float-left">
                            <input type="checkbox" id="basic_checkbox_1" >
                            <label for="basic_checkbox_1">I agree to the <a href="#"><b>Terms</b></a></label>
                        </div>
                        <a href="#" class="float-right">Need help?</a>
                    </form>
                </div>
            </div>
            <p class="float-right text-white">Already have an account?<a href="login.html" class="text-info m-l-5"> Sign In</a></p>
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

<!-- Mirrored from neox-admin-templates.multipurposethemes.com/src/pages/samplepage/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 11:40:18 GMT -->
</html>

