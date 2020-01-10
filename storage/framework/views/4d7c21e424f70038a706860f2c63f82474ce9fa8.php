<!DOCTYPE html>
<html>
<head>
    <title>LAPORAN PDF PEMINJAMAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
    table tr td,
    table tr th{
        font-size :9pt;
    }
    </style>
            <center>
            <h3 class="text-center">LAPORAN PEMINJAMAN BUKU </h2>
            <h4 class="text-center">PERPUSTAKAAN SMK SUPRIYADI</h6>
            </center>

            <table class="table table-bordered">
            <thead>
            <tr>
                <td align="center">NO</td>
                <td align="center">NAMA SISWA</td>
                <td align="center">TANGGAL PEMINJAMAN</td>
                <td align="center">TANGGAL BATAS PENGEMBALIAN</td>
                <td align="center">JUDUL BUKU</td>
                <td align="center">JUMLAH PINJAM</td>

              <?php $no=0; ?>
              <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $no++; ?>
              <tbody>
              <tr style="color:black;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center"><?php echo e($no); ?></td>
                <td align="center"><?php echo e($data->nama); ?></td>
                <td align="center"><?php echo e($data->tgl_pinjam); ?></td>
                <td align="center"><?php echo e($data->tgl_kembali); ?></td>
                <td align="center"><?php echo e($data->nama_buku); ?></td>
                <td align="center"><?php echo e($data->jumlah); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
            </table>
    </div>
        
</body>
    </html><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/laporan.blade.php ENDPATH**/ ?>