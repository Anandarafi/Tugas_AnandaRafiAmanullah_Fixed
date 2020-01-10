<?php $__env->startSection('title', 'Data Buku'); ?>
<?php $__env->startSection('container'); ?>

<br>
    <div class="container-fluid">
          <div class="card">
          <div class="header">
            <h2 style="color:black;padding:5px;font-family:Arial, Helvetica, sans-serif;" align='center' >DATA BUKU</h2>
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
                <td align="center">NAMA BUKU</td>
                <td align="center">KATEGORI BUKU</td>
                <td align="center">PENGARANG</td>
                <td align="center">PENERBIT</td>
                <td align="center">TAHUN PENERBITAN BUKU</td>
                <td align="center">JUMLAH BUKU</td>
                <td align="center">FOTO</td>
                <td align="center">AKSI</td>
              </tr>
              <?php $no=0; ?>
              <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $no++; ?>
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center"><?php echo e($no); ?></td> 
                <td align="center"><?php echo e($data->nama_buku); ?></td>
                <td align="center"><?php echo e($data->nama_kategori); ?></td>
                <td align="center"><?php echo e($data->nama_pengarang); ?></td>
                <td align="center"><?php echo e($data->nama_penerbit); ?></td>
                <td align="center"><?php echo e($data->tahun); ?></td>
                <td align="center"><?php echo e($data->eks); ?></td>
                <td><img width="40" src="<?php echo e(asset('images/'.$data->foto)); ?>"></td>
                <td>
                    <a href="<?php echo e(url('/buku/detail/'.$data->kode_buku)); ?>" class="btn btn-info btn-sm">DETAIL</a>
                    <a href="<?php echo e(url('/buku/edit/'.$data->kode_buku)); ?>" class="btn btn-primary btn-sm">EDIT</a>
                    <a href="/buku/hapus/<?php echo e($data->kode_buku); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">DELETE</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <a href="/create_buku"class="btn btn-success" style="margin-top:5px;margi-bottom:5px;">TAMBAH BUKU</a>
          </div>
          </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/katalog/buku.blade.php ENDPATH**/ ?>