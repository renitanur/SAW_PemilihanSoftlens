<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('alternatif.create')); ?>" class="btn btn-success btn-sm">Tambah Alternatif</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $alternatifs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternatif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($alternatif->id_alternatif); ?></td>
                            <td><?php echo e($alternatif->nama_alternatif); ?></td>
                            <td>
                                <a href="<?php echo e(route('alternatif.edit', $alternatif->id_alternatif)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('alternatif.destroy', $alternatif->id_alternatif)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus alternatif ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP COREi3\Documents\Semester 4\Pemrograman web 2\saw\resources\views/alternatif/index.blade.php ENDPATH**/ ?>