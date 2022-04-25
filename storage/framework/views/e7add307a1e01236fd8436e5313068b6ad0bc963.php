

<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.Edit diseas')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Edit diseas')); ?></h6>
         </div>
         <div class="card-body">
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
               <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
            </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
            <div class="alert alert-success">
               <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('illness.store_edit')); ?>">
               <div class="form-group">
                  <label for="exampleInputEmail1">Diseas Name *</label>
                  <input type="text" class="form-control" name="name_illness" id="IllnessName" aria-describedby="IllnessName" value="<?php echo e($illness->name_illness); ?>">
                  <?php echo e(csrf_field()); ?>

               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Diseas abriviation *</label>
                  <input type="text" class="form-control" name="illness_abriviation" id="IllnessAbriviation" value="<?php echo e($illness->illness_abriviation); ?>">
                  <input type="hidden" name="illness_id" value="<?php echo e($illness->id); ?>">
               </div>
               <button type="submit" class="btn btn-primary"><?php echo e(__('sentence.Save')); ?></button>
            </form>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pcare\pcarem\resources\views/illness/edit.blade.php ENDPATH**/ ?>