<?php $__env->startSection('content'); ?>
<div id="carouselExampleControls" class=" carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo e(asset('images/test'.$rand1.'.jpg')); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    
      <img src="<?php echo e(asset('images/test'.$rand2.'.jpg')); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo e(asset('images/test'.$rand3.'.jpg')); ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<p class=" text-center mt-5 text-success h3" >NOS CATEGORIES </p>

<div class="row align-items-md-stretch">
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
           
      <div class="col-md-6 mt-5 ">
        <p class=" text-center text-success h4  " ><?php echo e($item->categorie_item); ?> </p>
        <div class="h-100 p-5 ">
       <a href="categorie.<?php echo e($item->categorie_item); ?>"><img src="<?php echo e(asset('images/categories/'.$item->categorie_item.'.jpg')); ?>" class="d-block w-100" alt="..."></a> 
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
</div>
<div class="d-flex justify-content-center  mt-5">
<?php echo e($result->links()); ?>

 </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/neo/resources/views/home.blade.php ENDPATH**/ ?>