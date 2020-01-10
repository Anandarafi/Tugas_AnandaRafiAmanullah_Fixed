<?php $__env->startSection('title', 'TAMBAH KATEGORI BUKU'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">TAMBAH KATEGORI BUKU</h1>
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

        <form action="<?php echo e(url('/kategori/store')); ?> " method="post" enctype="multimedia/form-data">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="nama_kategori">NAMA KATEGORI</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required="required"  placeholder="NAMA KATEGORI">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">CREATES</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
            <td><a href="/kategori" class="btn btn-primary" onclick="return confirm('Kembali??')">KEMBALI</a></td>
          </div>
        </form>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/kategori/create_kategori.blade.php ENDPATH**/ ?>