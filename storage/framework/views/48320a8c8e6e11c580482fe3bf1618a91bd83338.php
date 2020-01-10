<?php $__env->startSection('title', 'Data Peminjaman'); ?>
<?php $__env->startSection('container'); ?>

<br>
    <div class="container-fluid">
          <div class="card">
          <div class="header">
            <h2 style="color:black;padding:5px;font-family:Arial, Helvetica, sans-serif;" align='center' >DATA PEMINJAMAN</h2>
          </div>
          <div class="panel-body">
            <?php if(Session::get('alert_message')): ?>
                <div class="alert alert-success">
                  <strong><?php echo e(Session::get('alert_message')); ?></strong>
                </div>
            <?php endif; ?>
            <table class="table  table-hover table-striped w-full" style="background :#7F8C8D;width:1570px;">
              
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;font-size:10pt;" >
                <td align="center">NO</td>
                <td align="center">NAMA SISWA</td>
                <td align="center">TANGGAL PEMINJAMAN</td>
                <td align="center">TANGGAL BATAS PENGEMBALIAN</td>
                <td align="center">JUDUL BUKU</td>
                <td align="center">AKSI</td>
              </tr>
              <?php $no=0; ?>
              <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $no++; ?>
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center"><?php echo e($no); ?></td>
                <td align="center"><?php echo e($data->nama); ?></td>
                <td align="center"><?php echo e($data->tgl_pinjam); ?></td>
                <td align="center"><?php echo e($data->tgl_kembali); ?></td>
                <td align="center"><?php echo e($data->nama_buku); ?></td>
                <td>
                <a href="<?php echo e(url('/peminjaman/hapus1/'.$data->id_peminjaman)); ?>" class="btn btn-primary btn-sm">MENGEMBALIKAN</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </div>
          </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/peminjamanbuku/pengembalian.blade.php ENDPATH**/ ?>