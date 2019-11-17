@extends('layouts.gudhomelayout')

@section('content')
@csrf

<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
    <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="../img/boy1.jpg" class="avatar img-circle" alt="avatar">
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
              <input class="form-control" type="text" value="Atharva">
            </div>
          </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" value="Murali">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Age:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Area:</label>
          <div class="col-lg-8">
            <select>
              <option selected>Matara</option>
              <option>Galle</option>
              <option>Colombo</option>
              <option>Kandy</option>
              <option>Gampaha</option>
              <option>Kalutara</option>
              <option>Hambantota</option>
              <option>Jaffna</option>
            </select>
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
          <input class="form-control" type="text" value="atharva@gmail.com">
        </div>
      </div>
      <div class="form-group ">
        <label class="col-lg-3 control-label">Contact Number</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="inputContactNo" >
        </div>  
      </div>
      <div class="form-group ">
        <label class="col-lg-3 control-label">Price for day</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="inputContactNo" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Availability</label>
        <div class="col-md-8">
         from
          <input type="date" name="from" max="2019-11-05">
          to
          <input type="date" name="to" >
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
            <input type="reset" class="btn btn-primary" value="Reset">
          </div>
        </div>
      </form>       
    </div>
</div>
</div>
  

  <br><br>
@endsection