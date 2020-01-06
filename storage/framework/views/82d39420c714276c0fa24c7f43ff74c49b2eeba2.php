<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EQP Dashbord</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('includes.home.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>

<?php echo $__env->make('includes.user_home.profile_container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1> </h1>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.defaulthome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Group project\laravel project\group_project - Copy (2)\resources\views/pages/eqphome.blade.php ENDPATH**/ ?>