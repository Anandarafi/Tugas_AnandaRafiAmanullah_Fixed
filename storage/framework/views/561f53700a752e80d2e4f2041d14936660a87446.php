<?php $__env->startSection('title', 'DETAIL ANGGOTA PERPUSTAKAAN'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL ANGGOTA PERPUSTAKAAN</h1>
      <hr>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>NOMOR INDUK SISWA</th>
                <td><?php echo e($datas->nisn); ?></td>
            </tr>
            <tr>
                <th>NAMA SISWA</th>
                <td><?php echo e($datas->nama); ?></td>
            </tr>
            <tr>
                <th>UMUR SISWA</th>
                <td><?php echo e($datas->nama_kelas); ?></td>
            </tr>
            <tr>
                <th>JENIS KELAMIN SISWA</th>
                <td><?php echo e($datas->nama_genre); ?></td>
            </tr>
        </table>
        <tr>
                    <td><a href="/siswa" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali Ke Masa Lalu?')">Kembali Ke Masa Lalu ? </a></td>
                    </tr>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/siswa/detail_siswa.blade.php ENDPATH**/ ?>