<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
        <!-- Favicon -->
        <link rel="icon" href="{{config('app.baseURL')}}/assets/img/brand/favicon.ico" type="image/x-icon"/>

        <!-- Title -->
<title>Admin Login</title>
        <!---Fontawesome css-->
        <link href="{{config('app.baseURL')}}/assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

        <link href="{{config('app.baseURL')}}/assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!---Ionicons css-->
        <link href="{{config('app.baseURL')}}/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

        <!---Typicons css-->
        <link href="{{config('app.baseURL')}}/assets/plugins/typicons.font/typicons.css" rel="stylesheet">

        <!---Feather css-->
        <link href="{{config('app.baseURL')}}/assets/plugins/feather/feather.css" rel="stylesheet">

        <!---Falg-icons css-->
        <link href="{{config('app.baseURL')}}/assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

        <!---Style css-->
        <link href="{{config('app.baseURL')}}/assets/css/style.css" rel="stylesheet">
        <link href="{{config('app.baseURL')}}/assets/css/custom-style.css" rel="stylesheet">
        <link href="{{config('app.baseURL')}}/assets/css/skins.css" rel="stylesheet">
        <link href="{{config('app.baseURL')}}/assets/css/dark-style.css" rel="stylesheet">
        <link href="{{config('app.baseURL')}}/assets/css/custom-dark-style.css" rel="stylesheet">

        
    </head>

    <body>
        <!-- Loader -->
        
            <img src="{{config('app.baseURL')}}/assets/img/loader.svg" class="loader-img" alt="Loader">
      
        <!-- End Loader -->


                            <!-- Page -->
        <div class="page main-signin-wrapper">

            <!-- Row -->
            <div class="row text-center pl-0 pr-0 ml-0 mr-0">
                <div class="col-lg-3 d-block mx-auto">
                   
                    <div class="card custom-card">
                         <div class="card">
                    <h3 class="card-header text-center">Signin to Your Account</h3>
                    <div class="card-body">
                                <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
                            <div class="form-group text-left">
                                    <label>Email</label>
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group text-left">
                                    <label>Password</label>
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
            <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- End Page -->

        
        <!-- End Page -->
        <!-- Jquery js-->
<!--         <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script> -->
        <script src="{{config('app.baseURL')}}/assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap js-->
        <script src="{{config('app.baseURL')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Ionicons js-->
        <script src="{{config('app.baseURL')}}/assets/plugins/ionicons/ionicons.js"></script>
        
        <!-- Rating js-->
        <script src="{{config('app.baseURL')}}/assets/plugins/rating/jquery.rating-stars.js"></script>

        
        <!-- Custom js-->
        <script src="{{config('app.baseURL')}}/assets/js/custom.js"></script>



    
    </body>
</html>