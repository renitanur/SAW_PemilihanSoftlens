

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3>Edit Kriteria</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('kriteria.update', $kriteria->id_kriteria)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                <label for="id_kriteria" class="form-label">ID Alternatif</label>
                <input type="text" name="id_kriteria" class="form-control" value="<?php echo e($kriteria->id_kriteria); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" name="nama_kriteria" class="form-control" value="<?php echo e($kriteria->nama_kriteria); ?>" required>
                </div>
                <div class="form-group">
                    <label for="atribut">Atribut</label>
                    <input type="text" name="atribut" class="form-control" value="<?php echo e($kriteria->atribut); ?>" required>
                </div>
                <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input type="text" name="bobot" class="form-control" value="<?php echo e($kriteria->bobot); ?>" required>
                </div>
                <!-- Tambahan form untuk atribut lainnya -->
               
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo e(route('kriteria.index')); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP COREi3\Documents\Semester 4\Pemrograman web 2\saw\resources\views/kriteria/edit.blade.php ENDPATH**/ ?>