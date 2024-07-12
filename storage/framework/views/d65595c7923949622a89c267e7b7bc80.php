<?php $__env->startSection('content'); ?>
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="<?php echo e(route('kriteria.create')); ?>" class="btn btn-sm btn-success">Tambah Kriteria</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Atribut</th>
                        <th>Bobot</th>
                        <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($kriteria->id_kriteria); ?></td>
                            <td><?php echo e($kriteria->nama_kriteria); ?></td>
                            <td><?php echo e($kriteria->atribut); ?></td>
                            <td><?php echo e($kriteria->bobot); ?></td>
                            <td>
                                <a href="<?php echo e(route('kriteria.edit', $kriteria->id_kriteria)); ?>" class="btn btn-sm btn-primary">Edit</a>
                                <form action="<?php echo e(route('kriteria.destroy', $kriteria->id_kriteria)); ?>" method="POST" style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kriteria ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP COREi3\Documents\Semester 4\Pemrograman web 2\saw\resources\views/kriteria/index.blade.php ENDPATH**/ ?>