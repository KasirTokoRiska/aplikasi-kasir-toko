

<?php $__env->startSection('title-content'); ?>
    <i class="fas fa-list mr-2"></i> Kategori
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <form method="POST" action="<?php echo e(route('kategori.store')); ?>" class="card card-outline">
                <div class="card-header">
                    <h3 class="card-title">Buat Kategori Baru</h3>
                </div>

                <div class="card-body">
                    <?php echo csrf_field(); ?>

                    <!-- Validasi error -->
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input id="nama_kategori" name="nama_kategori" type="text" class="form-control">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                    <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-secondary ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', ['title' => 'Kategori'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\kasir-toko-riska\resources\views/kategori/create.blade.php ENDPATH**/ ?>