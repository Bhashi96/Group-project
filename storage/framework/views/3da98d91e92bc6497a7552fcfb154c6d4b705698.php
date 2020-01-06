<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>
<div class="container">
            <h1>Edit Profile</h1>
              <hr>
            <div class="row">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <img src="../img/com.jpg" class="avatar img-circle" alt="avatar">
                  <h6>Upload a profile picture</h6>
                  <input type="file" class="form-control">
                </div>
              </div>
              
              <!-- edit form column -->
              <div class="col-md-9 personal-info">
                
                <h3>Personal info</h3>
                
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="danush">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="rajani">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Age:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Gender:</label>
                    <div class="col-lg-8">
                        <select >
                          <option selected>Male</option>
                          <option>Female</option>
                          <option>Other</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="danush@gmail.com">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="col-lg-3 control-label">Contact Number</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="inputContactNo" placeholder="Contact no">
                    </div>
                  </div>

                  <h3>Equipment Details</h3>
                  <div class="col-md-3">
                        <div class="text-center">
                          <label >Upload a photo</label> 
                          <img src="../img/tent.jpg" class="avatar img-circle" alt="avatar">
                          <input type="file" class="form-control">
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Equipment Name</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Condition</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Uses</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="">                               
                            </div>
                    </div>        
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Features</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="">
                            </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Price</label>
                          <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                          </div>
                  </div>
                  <h3>Change Username & Password</h3>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="user">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <input type="button" class="btn btn-primary" value="Save Changes">
                      <span></span>
                      <input type="reset" class="btn btn-primary" value="Reset">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
        <hr>

	<div id="colorlib-page">
        <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <div class="text-center">
         
           
        </nav>
      


       
            <br><br>
            <div class="row">
                <div class="col d-flex justify-content-end">
                  <button class="btn btn-primary" type="submit">Save Changes</button>
                  <input class="btn btn-primary" type="submit" value="Submit">
                  <input class="btn btn-primary" type="reset" value="Reset">
                </div>
              </div>
            
            </form>
            </div>
            <br><br>
               
        <!-- Modal Login content -->
        <div class="modal fade" tabindex="-1" id="loginModalMoreContent" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Travel Freak Login</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- Modal Body -->
                              <form>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group ">
                                  <a href="">Forgotten password</a>
                                </div>
                            </form>
          </form>
  <br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.eqphomelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bhashitha\Documents\GitHub\Group-project\resources\views/serviceprovider/eqpedit.blade.php ENDPATH**/ ?>