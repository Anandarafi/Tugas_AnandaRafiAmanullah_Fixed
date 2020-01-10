<?php $__env->startSection('title', 'ANGGOTA PERPUSTAKAAN'); ?>
<?php $__env->startSection('container'); ?>

<br>
    <div class="container-fluid">
          <div class="card">
          <div class="header">
            <h2 style="color:black;padding:5px;font-family:Arial, Helvetica, sans-serif;" align='center' >ANGGOTA PERPUSTAKAAN</h2>
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
                <td align="center">NOMOR INDUK SISWA</td>
                <td align="center">NAMA SISWA</td>
                <td align="center">KELAS SISWA</td>
                <td align="center">JENIS KELAMIN</td>
                <td align="center">AKSI</td>
              </tr>
              <?php $no=0; ?>
              <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $no++; ?>
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center"><?php echo e($no); ?></td>
                <td align="center"><?php echo e($data->nisn); ?></td>
                <td align="center"><?php echo e($data->nama); ?></td>
                <td align="center"><?php echo e($data->nama_kelas); ?></td>
                <td align="center"><?php echo e($data->nama_genre); ?></td>
                <td><a href="<?php echo e(url('/siswa/detail/'.$data->nisn)); ?>" class="btn btn-info btn-sm"><i class='fa fa-2x fa-file-text'></i></a>
                    <a href="<?php echo e(url('/siswa/edit/'.$data->nisn)); ?>" class="btn btn-primary btn-sm"><i class='fa fa-2x fa-pencil-square'></i></a>
                    <a href="/siswa/hapus/<?php echo e($data->nisn); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class='fa fa-2x fa-trash'></i></a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <a href="/create_siswa"class="btn btn-success" style="margin-top:5px;margi-bottom:5px;">TAMBAH DATA</a>
          </div>
          </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/siswa/siswa.blade.php ENDPATH**/ ?>