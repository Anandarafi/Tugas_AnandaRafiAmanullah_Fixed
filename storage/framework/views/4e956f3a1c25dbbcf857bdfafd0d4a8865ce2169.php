<?php $__env->startSection('title', 'PENGEMBALIAN BUKU'); ?> 

<?php $__env->startSection('container'); ?>
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">PENGEMBALIAN BUKU</h1>
      <hr>
      <?php if($errors->any()): ?>
        <div class="alert alert-danger">
          <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="/peminjaman/update1" method="post" enctype="multimedia/form-data">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="id" value="<?php echo e($datas->id_peminjaman); ?>"> <br/>
          <div class="form-group">
            <label for="nama">NAMA SISWA</label>
            <input type="text" class="form-control" name="nama" value="<?php echo e($datas->nama); ?>" required="required">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
          <tr>
                    <td><a href="/peminjaman" class="btn btn-danger" onclick="return confirm('Kembali?')">KEMBALI</a></td>
                    </tr>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/peminjamanbuku/edit_peminjaman.blade.php ENDPATH**/ ?>