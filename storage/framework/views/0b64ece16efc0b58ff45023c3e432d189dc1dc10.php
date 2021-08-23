<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $result2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">

                
                    <div class="px-4 py-5">
                   
                            <h5 class="text-uppercase text-center alert alert-warning" role="alert"><?php echo e($item->statues); ?></h5>
                             <h4 class="mt-5 theme-color mb-5">Thanks for your order </h4> <span class="theme-color">Payment Summary for order NO:<?php echo e($item->no_order); ?></span>
                        <div class="mb-3">
                            <hr class="new1">
                        </div>

                            
                            
                        <?php $__currentLoopData = $result3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <?php if($item->no_order == $data->no_order): ?> 

                                <div class="d-flex justify-content-between">
                                <span class="font-weight-bold"><?php echo e($data->name_item); ?>(Qty:<?php echo e($data->quantite); ?>)</span> <span class="text-muted"><?php echo e($data->quantite *$data->price); ?> DH</span>
                                </div>
                                <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                       

                      
                        

                        <div class="d-flex justify-content-between">
                        
                            <small>Shipping</small> <small><?php echo e($item->delivery_tax); ?> DH</small>
                        </div>
                        
                        
                        
                        <div class="d-flex justify-content-between mt-3">
                            <span class="font-weight-bold">Total</span> <span class="font-weight-bold theme-color"><?php echo e($item->total_sales +$item->delivery_tax); ?> DH</span> 
                        </div>
                        
                    </div>


            </div>
        </div>
        
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/neo/resources/views/order.blade.php ENDPATH**/ ?>