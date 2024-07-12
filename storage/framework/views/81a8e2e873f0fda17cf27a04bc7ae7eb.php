

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3>Tambah Kriteria</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('kriteria.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" name="nama_kriteria" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="atribut">Atribut</label>
                    <input type="text" name="atribut" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input type="text" name="bobot" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo e(route('kriteria.index')); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP COREi3\Documents\Semester 4\Pemrograman web 2\saw\resources\views/kriteria/create.blade.php ENDPATH**/ ?>