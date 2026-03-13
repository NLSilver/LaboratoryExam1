
<?php $__env->startSection('content'); ?>

<h3>Create Character</h3>

<form action="<?php echo e(route('characters.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>

    <div class="mb-3">
        <label>Power</label>
        <input type="text" name="power" class="form-control" placeholder="Power">
    </div>

    <div class="mb-3">
        <label>Universe</label>
        <input type="text" name="universe" class="form-control" placeholder="Universe">
    </div>

<button class="btn btn-outline-dark">⊕ Add Character</button>
<a href="<?php echo e(route('characters.index')); ?>" class="btn btn-outline-danger">Cancel</a>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel Projects\LabExam\Laravel Download\resources\views/characters/create.blade.php ENDPATH**/ ?>