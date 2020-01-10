<?php $__env->startSection('title', 'DETAIL  BUKU'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL BUKU</h1>
      <hr>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
    <div class="profile-main" align="center">
        <img src="<?php echo e(asset('images/'.$datas->foto)); ?>" class="img-circle" alt="Foto">
        <h3 class="name"><?php echo e($datas->nama_buku); ?></h3>
    </div>
        <table class="table table-striped">
        <tr>
                <th>ID PEMINJAMAN</th>
                <td><?php echo e($datas->id_peminjaman); ?></td>
            </tr>
            <tr>
                <th>NAMA PEMINJAM</th>
                <td><?php echo e($datas->nama); ?></td>
            </tr>
            <tr>
                <th>TANGGAL PEMINJAMAN</th>
                <td><?php echo e($datas->tgl_pinjam); ?></td>
            </tr>
            <tr>
                <th>TANGGAL BATAS KEMBALI</th>
                <td><?php echo e($datas->tgl_kembali); ?></td>
            </tr>
            <tr>
                <th>JUMLAH PINJAMAN</th>
                <td><?php echo e($datas->jumlah); ?></td>
            </tr>
        </table>
        <tr>
                    <td><a href="/peminjaman" class="btn btn-info">KEMBALI</a></td>
                    </tr>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/peminjamanbuku/detail_peminjaman.blade.php ENDPATH**/ ?>