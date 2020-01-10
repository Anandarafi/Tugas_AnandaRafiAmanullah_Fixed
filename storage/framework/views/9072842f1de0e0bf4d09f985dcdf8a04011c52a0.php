<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="REGISTER">
    <meta name="author" content="ANANDARAFI">
    <link rel="icon" type="image/png" href="img/logo.png">

    <!-- Title Page-->
    <title>REGISTER</title>

    <!-- Icons font CSS-->
    <link href="<?php echo e(url('assetsss/vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(url('assetsss/vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo e(url('assetsss/vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(url('assetsss/vendor/datepicker/daterangepicker.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(url('assetsss/css/main.css')); ?>" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">REGISTER</h2>
                    <form method="POST" action="<?php echo e(url('/login/store')); ?> " enctype="multimedia/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NO INDUK" name="no_induk">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAMA LENGKAP" name="nama">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="PASSWORD" name="password">
                        </div>
                        <div>
                            <label for="status">STATUS</label><br><br>
                            <select name="status" id="status" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20">
                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->status); ?>" ><?php echo e($data->nama_status); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">DAFTAR</button>

                        </div>
                    </form>    
                    <div class="p-t-20">
                        <a href="/login"><button class="btn btn--radius btn--green">LOGIN</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo e(url('assetsss/vendor/jquery/jquery.min.js')); ?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo e(url('assetsss/vendor/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(url('assetsss/vendor/datepicker/moment.min.js')); ?>"></script>
    <script src="<?php echo e(url('assetsss/vendor/datepicker/daterangepicker.js')); ?>"></script>

    <!-- Main JS-->
    <script src="<?php echo e(url('assetsss/js/global.js')); ?>"></script>

</body>

</html>
<!-- end document-->
<?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/login/register.blade.php ENDPATH**/ ?>