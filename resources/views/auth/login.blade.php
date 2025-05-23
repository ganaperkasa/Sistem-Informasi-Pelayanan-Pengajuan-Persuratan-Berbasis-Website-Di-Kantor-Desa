<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login & Register - Kaiadmin Bootstrap 5 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon"/>


	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
<script>
	WebFont.load({
		google: {"families":["Public Sans:300,400,500,600,700"]},
		custom: {"families":["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('assets/css/fonts.min.css') }}']},
		active: function() {
			sessionStorage.fonts = true;
		}
	});
</script>
<style>
    body.login {

        background-image: url('{{ asset('assets/img/kantor.jpg') }}');
        background-size: cover;
        background-position: center;
    }
    body.login::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Warna overlay hitam dengan opacity 50% */
    z-index: -1; /* Pastikan overlay berada di belakang konten */
}
    .login-form {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
    }
    .login-form h3 {
        color: #333;
    }
    .login-form label {
        color: #333;
    }
    .login-form .form-control {
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .login-form .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
    }
    .login-form .btn-primary:hover {
        background-color: #0056b3;
    }
    .login-form .link {
        color: #007bff;
    }
    .login-form .link:hover {
        text-decoration: underline;
    }
    .login-form .form-check-label {
        color: #333;
    }
    .login-form .form-check-input {
        margin-top: 0.3rem;
    }
    </style>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}">
</head>
<body class="login ">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign In</h3>
			<div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

				<div class="form-group">
					<label for="email"><b>{{ __('Email Address') }}</b></label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="form-group">
					<label for="password"><b>{{ __('Password') }}</b></label>
					<a href="#" class="link float-end">Forget Password ?</a>
					<div class="position-relative">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
				</div>
				<div class="form-group form-action-d-flex mb-3">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="rememberme">
						<label class="custom-control-label m-0" for="rememberme">Remember Me</label>
					</div>
					<button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
				</div>
				<div class="login-account">
                    <span class="msg">Don't have an account yet ?</span>
                    <a href="/register" id="show-signup" class="link">Sign Up</a>
					{{-- <a href="//ke login-form"  class="link">Sign Up</a> --}}
                </form>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

</body>
</html>