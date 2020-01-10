<?php $__env->startSection('title', 'DAFTAR PENERBIT BUKU'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">TAMBAH PENERBIT BUKU</h1>
      <hr>
      <?php if($errors->any()): ?>
        <div class="alert alert-danger">
          <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><strong><?php echo e($error); ?></strong></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <?php endif; ?>

        <form action="<?php echo e(url('/penerbit/store')); ?> " method="post" enctype="multimedia/form-data">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="nama_penerbit">NAMA PENERBIT</label>
            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" required="required"  placeholder="NAMA PENERBIT">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            <td><a href="/penerbit" class="btn btn-primary" onclick="return confirm('Kembali??')">Ga Jadi</a></td>
          </div>
        </form>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/penerbit/create_penerbit.blade.php ENDPATH**/ ?>