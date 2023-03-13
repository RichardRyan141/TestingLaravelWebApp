
<?php $__env->startSection('content'); ?>
    <h1>Users List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>UID</th>
                <th>Name</th>
                <th>Number of NFTs Owned</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $penggunas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pengguna->uid); ?></td>
                    <td><?php echo e($pengguna->name); ?></td>
                    <td><?php echo e($pengguna->nft->count()); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="/user/create" class="btn btn-primary mb-2">Create User</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwwwwwwwwwwwwwwwwww\nft-catalogue\resources\views/pengguna/index.blade.php ENDPATH**/ ?>