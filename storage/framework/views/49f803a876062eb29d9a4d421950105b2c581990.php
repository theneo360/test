<?php $__env->startSection('content'); ?>
<div class = "text-center mt-5" >
    <form class="verification" action="changepwd.<?php echo e(request()->route('token')); ?>" method="POST" style="max-width:300px;margin:auto;">
        <h1 class="h5 mb-3 font-weight-normal">please enter  your new password</h1>
        <?php echo csrf_field(); ?>
        
        <input type="password" name="pwd"  class="form-control mb-3" placeholder="new password" required  >
        <input type="password" name="repwd"  class="form-control mb-3" placeholder="repeat password" required  >
        <span class="text-danger">
            <?php echo e($titl ?? ''); ?>

            </span>
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">submit</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/neo/resources/views/changepwd.blade.php ENDPATH**/ ?>