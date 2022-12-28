<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
    <h1 class="text-center">Daftar Mata Kuliah</h1>
    <div class="row py-5">
    <?php $__empty_1 = true; $__currentLoopData = $matakuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="py-2 col-md-6 ">
        <div class="list-group-item bg-light "> 
            <div class="d-flex">
                <div class="p-1 font-weight-bold"><?php echo e($matakuliah->nama_mk); ?></div>
                <div class="p-1 font-weight-bold" style="color: maroon"><?php echo e("( ". $matakuliah->kode_mk . " )"); ?></div>
                <div class="ml-auto p-1"><?php echo e($matakuliah->sks. " SKS"); ?></div>
            </div>
                <div class="p-1"><?php echo e($matakuliah->nama_dosen); ?></div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <td>Tidak ada data . . .</td>
    <?php endif; ?>
    </div>
    </div>
</body>
</html><?php /**PATH D:\laravel\src\MataKuliah\resources\views/main.blade.php ENDPATH**/ ?>