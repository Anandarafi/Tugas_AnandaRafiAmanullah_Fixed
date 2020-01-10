<?php $__env->startSection('title','HOME'); ?>

<?php $__env->startSection('container'); ?>

<!-- Buku -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">BUKU</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($buku1); ?></div> 
        </div>
        <div class="col-auto">
          <i class="fas fa-book fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pengunjung -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ANGGOTA</div>
       <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($siswa1); ?></div>
        </div>
        <div class="col-auto">
          <i class="fas fa-users fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Peminjaman -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PEMINJAMAN</div>
        <!--  <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> -->
        </div>
        <div class="col-auto">
          <i class="fas fa-folder fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- INFO -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">INFO</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">OPEN : 08.00 - 17.00 WIB</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-door-open fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <?php if(Session::get('status')=='1'): ?>
  <div class="panel-body">
  <h2 align="center">SELAMAT DATANG DI PERPUSTAKAAN SMK SUPRIYADI</h2>
  <h5 align="center">ANDA SEKARANG SEBAGAI PENGURUS </h5>
  </div>
  <?php else: ?>
  <div class="panel-body">
  <h2 align="center">SELAMAT DATANG DI PERPUSTAKAAN SMK SUPRIYADI</h2>
  <h5 align="center">ANDA SEKARANG SEBAGAI ANGGOTA</h5>
  </div>
  <?php endif; ?>

</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/welcome.blade.php ENDPATH**/ ?>