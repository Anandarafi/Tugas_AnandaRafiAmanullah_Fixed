<?php $__env->startSection('title', 'DAFTAR ANGGOTA PERPUSTAKAAN'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">TAMBAH ANGGOTA PERPUSTAKAAN</h1>
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

        <form action="<?php echo e(url('/siswa/store')); ?> " method="post" enctype="multimedia/form-data">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="nama">NAMA SISWA</label>
            <input type="text" class="form-control" id="nama" name="nama" required="required"  placeholder="NAMA SISWA">
          </div>
          <div class="form-group">
            <label for="kelas">KELAS SISWA</label><br>
            <select name="kelas" id="kelas" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="10" >
                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->kelas); ?>" ><?php echo e($data->nama_kelas); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jenis">JENIS KELAMIN</label><br>
            <select name="genre" id="genre" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="10">
                <?php $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->genre); ?>" ><?php echo e($data->nama_genre); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>          
            </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            <td><a href="/siswa" class="btn btn-primary" onclick="return confirm('Kembali??')">Ga Jadi</a></td>
          </div>
        </form>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/siswa/create_siswa.blade.php ENDPATH**/ ?>