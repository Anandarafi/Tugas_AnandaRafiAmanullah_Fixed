<?php $__env->startSection('title', 'Tambah Data Buku'); ?> 
<?php $__env->startSection('container'); ?>
<div class="container-fluid">
  <section class="main-section">
    <div class="card" style="width:1600px;text-align:center;">
    <div class="col-xl-12">
      <h1 class="text-center">MINJAM BUKU</h1>
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

        <form action="<?php echo e(url('/peminjaman/store')); ?> " method="post" enctype="multimedia/form-data" >
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="nisn">NAMA SISWA</label>
			<select name="nisn" id="nisn" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->nisn); ?>" ><?php echo e($data->nama); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tgl_pinjam">Tanggal Peminjaman</label><br>
			<input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" required="required">
          </div>
          <div class="form-group">
            <label for="tgl_kembali">Tanggal Kembali (1 Minggu)</label>
            <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" required="required">
          </div>
		  <div class="form-group">
            <label for="kode_buku">JUDUL BUKU</label>
			<select name="kode_buku" id="kode_buku" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->kode_buku); ?>" ><?php echo e($data->nama_buku); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
		  <div class="form-group">
            <label for="jumlah">Jumlah Pinjam </label>
            <input type="text" class="form-control" name="jumlah" id="jumlah1" required="required" placeholder="Jumlah Pinjaman">
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
<?php echo $__env->make('layoutadmin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/peminjamanbuku/create_peminjaman.blade.php ENDPATH**/ ?>