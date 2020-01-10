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
	<link rel="icon" type="image/png" href="<?php echo e(url('assetss/images/icons/favicon.ico')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assetss/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assetss/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assetss/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assetss/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assetss/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assetss/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assetss/css/main.css')); ?>">
<!--===============================================================================================-->
</head>
<body>
            <?php if(Session::get('alert_message')): ?>
                <div class="alert alert-danger">
                <strong><?php echo e(Session::get('alert_message')); ?></strong>
                </div>
            <?php endif; ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo e(url('img/logo1.png')); ?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo e(url('login/cek')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

					<span class="login100-form-title">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "NOMOR INDUK DIBUTUHKAN">
							<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
								</span>
                                <input id="email" type="text" class="input100" name="no_induk" value="<?php echo e(old('no_induk')); ?>" required autocomplete="no_induk" placeholder="NO INDUK" autofocus>
                                <?php $__errorArgs = ['no_induk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "PASSWOD DIBUTUHKAN">
					<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
								</span>
                                <input id="password" type="password" class="input100" name="password" value="<?php echo e(old('password')); ?>" required autocomplete="password" placeholder="PASSWORD" autofocus>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
	<script src="<?php echo e(url('assetss/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(url('assetss/vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(url('assetss/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(url('assetss/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(url('assetss/vendor/tilt/tilt.jquery.min.js')); ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo e(url('assetss/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/login/login.blade.php ENDPATH**/ ?>