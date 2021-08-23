<?php $__env->startSection('content'); ?>
<p class=" text-center mt-5 text-success h3" >NOS PRODUITS </p>
<div class="row row-cols-1 row-cols-md-3 g-4 text-center">
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col">
    <div class="card h-100">
    <a href="detail/<?php echo e($item->name_item); ?>">
      <img src="<?php echo e(asset('images/'.$item->name_item.'.jpg')); ?>" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <h5 class="card-title"><?php echo e($item->name_item); ?></h5>
        <p class="card-text"><?php echo e($item->price); ?> DH</p>
        <a href="detail.<?php echo e($item->name_item); ?>">
        <button class="btn btn-lg btn-success btn-block" >SEE PRODUCT</button>
        </a>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</div>
<div class="d-flex justify-content-center  mt-5">
<?php echo e($result->links()); ?>

 </div>
 
    
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/neo/resources/views/list.blade.php ENDPATH**/ ?>