
<?php $__env->startSection('content'); ?>
<h1>Create NFT</h1>
<form action="/nft" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
    </div>

    <div class="form-group">
        <label for="image_link">Image Link</label>
        <input type="text" class="form-control" name="image_link" placeholder="Enter Image Link" required>
        <?php $__errorArgs = ['image_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label>Owner</label>
        <select name="owner_id" class="form-control">
            <?php $__currentLoopData = $penggunas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($pengguna->id); ?>"><?php echo e($pengguna->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="d-flex justify-content-between">
        <a href="/nft" class="btn btn-light"><< Back</a>
        <button type="submit" class="btn btn-primary" style="border-radius: 3px">
            <i class="nav-icon fas fa-plus-circle"></i>
            Add NFT
        </button>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwwwwwwwwwwwwwwwwww\nft-catalogue\resources\views/nft/create.blade.php ENDPATH**/ ?>