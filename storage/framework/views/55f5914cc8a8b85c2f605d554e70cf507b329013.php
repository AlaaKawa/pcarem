<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.New Appointment')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col">
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
   </div>
</div>
<div class="row justify-content-center">
   <div class="col-md-10">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Appointment')); ?></h6>
         </div>
         <form class="card-body" method="POST" action="<?php echo e(route('appointment.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
               <div class="col-md-4 col-sm-12">
                  <div class="form-group">
                     <label for="exampleInputEmail1"><?php echo e(__('sentence.Patient')); ?> </label>
                     <select class="form-control patient_name" name="patient" id="patient_name">
                        <option><?php echo e(__('sentence.Select Patient')); ?></option>
                        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($patient->id); ?>"><?php echo e($patient->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                     <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1"><?php echo e(__('sentence.Date')); ?></label>
                     <input type="datetime-local" name="rdv_time_date" class="form-control target" id="rdvdate">
                  </div>
               </div>
             
            </div>
            <button class="btn btn-primary">Save Change</button>
          </form>
      </div>
   </div>
</div>
<!-- Appointment Modal-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pcare\pcarem\resources\views/appointment/create.blade.php ENDPATH**/ ?>