<?php $__env->startSection('content'); ?>
<br><br>
    <div class="container mt-3">
    <h1>Register as Guide</h1>
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
                            <div class="form-group col-md-4">
                                    <label for="inputProvince">Tourism Area by province</label>
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
                                        <label for="inputDistrict">Tourism Area by District</label>
                                        <select id="inputdistrict" class="form-control">
                                            <option selected>Matara</option>
                                            <option>Galle</option>
                                            <option>Hambanthota</option>
                                            <option>Jaffna</option>
                                            <option>Trinco</option>
                                            <option>Anuradhapura</option>
                                        </select>
                 </div>

                 <div class="form-group col-md-4">
                        <label for="inputPriceDay">Charge for day</label>
                        <input type="text" class="form-control" id="inputPriceDay" placeholder="00.00$">
                    </div>

                    <div class="form-group col-md-4">
                            <label>Languages</label>
                    </div>
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
                    
                    <div class="form-group">
                         <label for="exampleFormControlTextarea2">Experience</label>
                         <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                <br><br>
                <button type="submit" class="btn btn-primary">Create an acoount</button>
                </form>
    </div>
    <br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reglayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bhashitha\Documents\laravel project\group_project\resources\views/pages/registrations/guide_reg.blade.php ENDPATH**/ ?>