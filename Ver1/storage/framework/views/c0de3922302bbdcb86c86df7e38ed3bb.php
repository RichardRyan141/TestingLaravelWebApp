
<?php $__env->startSection('content'); ?>
    <h1>NFT List</h1>
    <div class="row">
        <?php $__currentLoopData = $nfts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo e($nft->image_link); ?>" alt="<?php echo e($nft->name); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($nft->name); ?></h5>
                        <p class="card-text"><?php echo e($nft->description); ?></p>
                    </div>
                    <div class="card-footer">
                        Owner: <?php echo e($nft->pengguna->name); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-md-12 mt-4">
        <a href="/nft/create" class="btn btn-primary btn-create">
            Create NFT
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwwwwwwwwwwwwwwwwww\nft-catalogue\resources\views/nft/index.blade.php ENDPATH**/ ?>