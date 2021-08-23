<?php $__env->startSection('content'); ?>
<div class="row mt-5 ">
    <div class="col-md-15  ">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo e(asset('images/userprofile.png')); ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo e($result[0]->firstname ?? ''); ?> <?php echo e($result[0]->lastname ?? ''); ?></h4>
                     
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "text-center mt-5" >
         <div class="col-md-15  ">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">First Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo e($result[0]->firstname ?? ''); ?>

                         </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Last name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo e($result[0]->lastname ?? ''); ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo e($result[0]->phone ?? ''); ?>

                        </div>
                    </div>
                     <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo e($result[0]->email ?? ''); ?>

                        </div>
                    </div>
                    <hr>
                    
                   
                </div>
            </div>        
         </div>
    </div>    
    
</div>

       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/neo/resources/views/profile.blade.php ENDPATH**/ ?>