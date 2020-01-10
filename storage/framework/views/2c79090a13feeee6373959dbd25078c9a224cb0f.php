<?php $__env->startSection('title', 'Tambah Data Buku'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container-fluid">
  <section class="main-section">
    <div class="card" style="width:1600px;text-align:center;">
    <div class="col-xl-12">
      <h1 class="text-center">Tambah Data Buku</h1>
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

        <form action="<?php echo e(url('/buku/store')); ?> " method="post" enctype="multimedia/form-data" >
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku" required="required"  placeholder="Nama Buku">
          </div>
          <div class="form-group">
            <label for="kategori_buku">Kategori Buku</label><br>
            <select name="kategori_buku" id="kategori_buku" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->kategori_buku); ?>" ><?php echo e($data->nama_kategori); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="pengarang">Pengarang Buku</label><br>
            <select name="kode_pengarang" id="kode_pengarang" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                <?php $__currentLoopData = $pengarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->kode_pengarang); ?>" ><?php echo e($data->nama_pengarang); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="penerbit">Penerbit Buku</label><br>
            <select name="kode_penerbit" id="kode_penerbit" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                <?php $__currentLoopData = $penerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->kode_penerbit); ?>" ><?php echo e($data->nama_penerbit); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tahun">Tahun Penerbit</label>
            <input type="text" class="form-control" name="tahun" id="tahun" required="required" placeholder="Tahun Penerbit">
          </div>
          <div class="form-group">
            <label for="eks">Jumlah Buku</label>
            <input type="text" class="form-control" name="eks" id="eks" required="required" placeholder="Jumlah Buku">
          </div>
          <div class="form-group">
            <label for="foto">Foto Buku</label>
            <input type="file" class="form-control" name="foto" id="foto" required="required" placeholder="Foto Buku">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">CREATE</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
            <td><a href="/buku" class="btn btn-primary" onclick="return confirm('Kembali')">KEMBALI</a></td>
          </div>
        </form>
    </div>
    </div>

  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/katalog/create_buku.blade.php ENDPATH**/ ?>