<?php $__env->startSection('content'); ?>

<br><br>
    <div class="container mt-3">
    <h1>Register as EQ Provider</h1>
    <br><br>
    <form>
        <div class="form-row">
             <div class="form-group col-md-12">
                        <label for="inputname">Company Name</label>
                        <input type="text" class="form-control" id="inputname" placeholder="full name">
             </div>
             <div class="form-group col-md-12">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
             </div>
            <div class="form-group col-md-4">
                                <label for="inputProvince">Province</label>
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
            <div class="form-group col-md-4">
                                    <label for="inputDistrict">District</label>
                                    <select id="inputdistrict" class="form-control">
                                        <option selected>Matara</option>
                                        <option>Galle</option>
                                        <option>Hambanthota</option>
                                        <option>Jaffna</option>
                                        <option>Trinco</option>
                                        <option>Anuradhapura</option>
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
    <br><br>
    </form>
    </div>
    <br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reglayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bhashitha\Documents\laravel project\group_project\resources\views/pages/registrations/eqp_reg.blade.php ENDPATH**/ ?>