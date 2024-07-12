

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Edit Alternatif</h5>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('alternatif.update', $alternatif->id_alternatif)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label for="id_alternatif" class="form-label">ID Alternatif</label>
                    <input type="text" class="form-control" id="id_alternatif" name="id_alternatif" value="<?php echo e($alternatif->id_alternatif); ?>" readonly>
                    <!-- Jika ingin memungkinkan pengeditan ID, ubah "readonly" menjadi "text" -->
                </div>
                <div class="mb-3">
                    <label for="nama_alternatif" class="form-label">Nama Alternatif</label>
                    <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value="<?php echo e($alternatif->nama_alternatif); ?>" required>
                </div>
                <!-- Tambahkan input untuk field lainnya sesuai kebutuhan -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP COREi3\Documents\Semester 4\Pemrograman web 2\saw\resources\views/alternatif/edit.blade.php ENDPATH**/ ?>