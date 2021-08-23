<?php $__env->startSection('content'); ?>
<table class="table mt-5">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">product name</th>
      <th scope="col">quantite</th>
      <th scope="col">price</th>
    </tr>
    
  </thead>
  <tbody>
        <?php
          $i = 1;
         
      ?>
  <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
    <tr>
      <th scope="col"><?php echo e($i++); ?></th>
      <td><?php echo e($item->name_item); ?></td>
      <td><?php echo e($item->quantite); ?></td>
      <td><?php echo e($total=$item->price * $item->quantite); ?> DH</td>
      
</div>

      <td>
         <a href="removecart.<?php echo e($item->id_cart); ?>" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
         </td>
    </tr>
    
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    
  </tbody>
</table>
<div class="form-outline mt-5 text-center ">
<form action="order" method="POST">
<?php echo csrf_field(); ?>
<label class="form-label" for="textAreaExample3">Your address</label>
<textarea type="text" name="address" class="form-control mb-3" placeholder="Message " required  ></textarea>
  <div class="mt-3  ">
            <button class="btn btn-lg btn-success btn-block" type="submit">Order now</button>
        </div>
  </form>
</div>
<div class="d-flex justify-content-center  mt-5">
<?php echo e($result->links()); ?>

 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/neo/resources/views/cartes.blade.php ENDPATH**/ ?>