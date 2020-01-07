<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="LOGIN">
    <meta name="author" content="ANANDARAFI">
    <link rel="icon" type="image/png" href="img/logo.png">
	<title>LOGIN</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('assetss/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetss/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetss/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetss/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('assetss/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetss/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetss/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assetss/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
            @if(Session::get('alert_message'))
                <div class="alert alert-danger">
                <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{url('img/logo1.png')}}" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{url('login/cek')}}" method="POST">
				{{ csrf_field() }}
					<span class="login100-form-title">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "NOMOR INDUK DIBUTUHKAN">
							<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
								</span>
                                <input id="email" type="text" class="input100" name="no_induk" value="{{ old('no_induk') }}" required autocomplete="no_induk" placeholder="NO INDUK" autofocus>
                                @error('no_induk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "PASSWOD DIBUTUHKAN">
					<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
								</span>
                                <input id="password" type="password" class="input100" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="PASSWORD" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							LOGIN
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							NOMOR INDUK?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/register">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{url('assetss/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assetss/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('assetss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assetss/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assetss/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{url('assetss/js/main.js')}}"></script>

</body>
</html>