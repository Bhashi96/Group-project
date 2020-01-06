<?php $__env->startSection('content'); ?>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register as Guide')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                       

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Age')); ?></label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control <?php if ($errors->has('age')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('age'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="age" value="<?php echo e(old('age')); ?>" required autocomplete="age" autofocus>

                                <?php if ($errors->has('age')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('age'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">

                                 <label for="inputGender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>
                                        <div class="col-md-6">
                                                <select id="inputGender" class="form-control">
                                                 <option selected>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                                 </select>
                                         </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact')); ?></label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control <?php if ($errors->has('contact')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contact'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="contact" value="<?php echo e(old('contact')); ?>" required autocomplete="contact" autofocus>

                                <?php if ($errors->has('contact')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contact'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="licence" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Licence ID')); ?></label>

                            <div class="col-md-6">
                                <input id="licence" type="text" class="form-control <?php if ($errors->has('licence')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('licence'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="licence" value="<?php echo e(old('licence')); ?>" required autocomplete="licence" autofocus>

                                <?php if ($errors->has('licence')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('licence'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tourism Area')); ?></label>

                            <div class="col-md-6">
                            <select id="inputProvince" class="form-control">
                                        <option selected>Southern Province</option>
                                        <option>Western Province</option>
                                        <option>North Province</option>
                                        <option>Eastern Province</option>
                                        <option>North Eastern Province Province</option>
                                        <option>Middle Province</option>
                                        <option>Western Province</option>
                                        <option>Western Province</option>
                                        <option>Western Province</option>
                                    </select>
                            </div>
                        </div>



                        
                        <div class="form-group row">
                            <label for="charge" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Charge per day')); ?></label>

                            <div class="col-md-6">
                                <input id="charge" type="text" placeholder="00.00$" class="form-control <?php if ($errors->has('charge')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('charge'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="charge" value="<?php echo e(old('charge')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('charge')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('charge'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="charge" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Languages')); ?></label>

                            <div class="col-md-6">
                            <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="englishlan">
                            <label class="custom-control-label" for="englishlan">English</label>
                            </div>
      
                    
                            <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="defaultInline2">
                            <label class="custom-control-label" for="defaultInline2">German</label>
                            </div>
      
                             <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="defaultInline3">
                            <label class="custom-control-label" for="defaultInline3">French</label>
                            </div>
                            
                            
                             <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline4">
                                <label class="custom-control-label" for="defaultInline4">Jappenise</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="defaultInline5">
                                <label class="custom-control-label" for="defaultInline5">Korean</label>
                            </div>
                             <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="defaultInline6">
                                 <label class="custom-control-label" for="defaultInline6">Tamil</label>
                             </div>

                            
                            <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="defaultInline7">
                                    <label class="custom-control-label" for="defaultInline7">Chinesse</label>
                             </div>
                             <div class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox" class="custom-control-input" id="defaultInline8">
                                     <label class="custom-control-label" for="defaultInline8">Latin</label>
                             </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exp" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Experience')); ?></label>

                            <div class="col-md-6">
                                
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"class="form-control <?php if ($errors->has('cexp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cexp'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="exp" value="<?php echo e(old('exp')); ?>" required autocomplete="exp" autofocus></textarea>
                                <?php if ($errors->has('exp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('exp'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                           

                           <div class="col-md-6">
                               <input id="user_type" type="hidden"  name="user_type" value="<?php echo e(__('gud')); ?>" required autocomplete="user_type">

                           </div>
                       </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reglayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Group project\laravel project\group_project - Copy (2)\resources\views/pages/registrations/guide_reg.blade.php ENDPATH**/ ?>