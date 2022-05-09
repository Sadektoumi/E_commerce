<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SB PHARMA Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <link href="/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<!-- <a href="index.html"><img src="images/logo-full.png" alt=""></a> -->
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    <form method="POST" action="{{ route('login.custom') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white">email</label>
                                            <input type="text" placeholder="email" id="email" class="form-control p_input" name="email" required autofocus>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white">Password</label>
            
                                            <input type="password" placeholder="Password" id="password" class="form-control p_input" name="password" required>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label class="mb-1 text-white">
                                                    <input type="checkbox" name="remember"> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <button type="submit" class="btn bg-white btn-block">Signin</button>
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/deznav-init.js"></script>

</body>

</html>