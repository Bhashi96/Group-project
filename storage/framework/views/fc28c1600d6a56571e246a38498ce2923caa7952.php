<?php $__env->startSection('content'); ?>
<br><br>
    <div class="container mt-3">
    <h1>Register as Driver</h1>
    <br><br>
    <form>
        <div class="form-row">
                <div class="form-group col-md-12">
                        <label for="inputname">Full Name</label>
                        <input type="text" class="form-control" id="inputname" placeholder="full name">
                    </div>
                 <div class="form-group col-md-6">
                            <label for="inputAge">Age</label>
                            <input type="int" class="form-control" id="inputAge" placeholder="age">
                </div>

             <div class="form-group col-md-6">
                    <label for="inputGender">Gender</label>
                    <select id="inputGender" class="form-control">
                            <option selected>Male</option>
                         <option>Female</option>
                         <option>Other</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputContactNo">Contact Number</label>
                <input type="text" class="form-control" id="inputContactNo" placeholder="Contact no">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputBrand">Vehicle Brand</label>
                <input type="text" class="form-control" id="inputBrand" placeholder="Brand">
            </div>
            
            <div class="form-group col-md-3">
                <label for="inputRegNo">Vehicle Register No</label>
                <input type="text" class="form-control" id="inputRegNo" placeholder="reg no">
            </div>
            <div class="form-group col-md-3">
                    <label for="inputOwner">Vehicle Owner</label>
                    <input type="text" class="form-control" id="inputOwner" placeholder="Owner">
                </div>
                
                <div class="form-group col-md-3">
                    <label for="inputNoSeats">Number of seats</label>
                    <input type="text" class="form-control" id="inputNoSeats" placeholder="Seats">
                </div>

            <div class="form-group col-md-12">
                    <label for="inputUserName">User Name</label>
                    <input type="text" class="form-control" id="inputUserName" placeholder="Bhashitha96">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter password with minimum 6 char">
                </div>
                <div class="form-group col-md-6">
                        <label for="inputConPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="inputConPassword" placeholder="Retype your password">
                    </div>
        </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Create an acoount</button>
    </form>
    </div>
    <br><br>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reglayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Group project\laravel project\group_project\resources\views/pages/registrations/driver_reg.blade.php ENDPATH**/ ?>