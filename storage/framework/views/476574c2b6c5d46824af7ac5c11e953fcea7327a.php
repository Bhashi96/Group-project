 

<?php $__env->startSection('content'); ?>
   
   


      <div class="container mt-3">
      <h1 class="text-center">Travel Freak LogIn</h1>
    <br><br>
                     <form>
                    <div class="form-row">
                             <div class="form-group col-md-1">
                             <i class="fa fa-user fa-5x"></i>
                             
                             </div>
                            <div class="form-group col-md-11">
                                    <label for="inputname">Email</label>
                                    <input type="email" class="form-control" id="logmail" placeholder="Email">
                                </div>

                             <div class="form-group col-md-1">
                             <i class="fa fa-unlock fa-5x"></i>
                             </div>
                             <div class="form-group col-md-11">
                                        <label for="inputAge">Password</label>
                                        <input type="password" class="form-control" id="logpass" placeholder="password">
                            </div>
                            
                            </div>
                            <br><br><br>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Login as tourist</button>
                            <button type="button" class="btn btn-primary">Login as guide</button>
                            <button type="button" class="btn btn-primary">Login as driver</button>
                            <button type="button" class="btn btn-primary">Login as EQP</button>
                          </div>
        </div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.defaulthome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bhashitha\Documents\laravel project\group_project\resources\views/pages/login.blade.php ENDPATH**/ ?>