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
                <th>KODE BUKU</th>
                <td><?php echo e($datas->kode_buku); ?></td>
            </tr>
            <tr>
                <th>KATEGORI BUKU</th>
                <td><?php echo e($datas->nama_kategori); ?></td>
            </tr>
            <tr>
                <th>PENGARANG BUKU</th>
                <td><?php echo e($datas->nama_pengarang); ?></td>
            </tr>
            <tr>
                <th>PENERBIT BUKU</th>
                <td><?php echo e($datas->nama_penerbit); ?></td>
            </tr>
            <tr>
                <th>TAHUN PEMBUATAN BUKU</th>
                <td><?php echo e($datas->tahun); ?></td>
            </tr>
            <tr>
                <th>JUMLAH BUKU</th>
                <td><?php echo e($datas->jumlah); ?></td>
            </tr>
        </table>
        <tr>
                    <td><a href="/indexbuku" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali ?')">KEMBALI </a></td>
                    </tr>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/peminjamanbuku/detail_buku.blade.php ENDPATH**/ ?>