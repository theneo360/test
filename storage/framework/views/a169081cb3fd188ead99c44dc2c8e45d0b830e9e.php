<?php $__env->startSection('content'); ?>
<div class = "text-center mt-5" >
    <form class="verification" action="forgot" method="POST" style="max-width:300px;margin:auto;">
        <h1 class="h5 mb-3 font-weight-normal">please enter  your email</h1>
        <?php echo csrf_field(); ?>
        <input type="email" name="email"  class="form-control mb-3" placeholder="email" required  >
        
       
        <span class="text-success">
            <?php echo e($titl ?? ''); ?>

            </span>
            <span class="text-danger">
            <?php echo e($titles ?? ''); ?>

            </span>
            

        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">submit</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/neo/resources/views/forgotpwd.blade.php ENDPATH**/ ?>