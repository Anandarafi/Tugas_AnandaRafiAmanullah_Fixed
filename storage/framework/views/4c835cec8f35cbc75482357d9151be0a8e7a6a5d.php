<?php $__env->startSection('title', 'DETAIL KATEGORI BUKU'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL KATEGORIi BUKU</h1>
      <hr>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>ID KATEGORI</th>
                <td><?php echo e($datas->kode_kategori); ?></td>
            </tr>
            <tr>
                <th>NAMA KATEGORI</th>
                <td><?php echo e($datas->nama_kategori); ?></td>
            </tr>
        </table>
        <tr>
                    <td><a href="/kategori" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">KEMBALI</a></td>
                    </tr>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/kategori/detail_kategori.blade.php ENDPATH**/ ?>