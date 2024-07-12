

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('alternatif.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="id_alternatif">ID Alternatif</label>
                    <input type="text" name="id_alternatif" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_alternatif">Nama Alternatif</label>
                    <input type="text" name="nama_alternatif" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo e(route('alternatif.index')); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP COREi3\Documents\Semester 4\Pemrograman web 2\saw\resources\views/alternatif/create.blade.php ENDPATH**/ ?>