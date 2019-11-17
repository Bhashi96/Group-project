@extends('layouts.eqphomelayout')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EQP Dashbord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

    <style>
        body{margin-top:20px;}

body {
    color: #6c7293;
}

.profile-navbar .nav-item .nav-link {
  color: #6c7293;
}

.profile-navbar .nav-item .nav-link.active {
  color: #464dee;
}

.profile-navbar .nav-item .nav-link i {
  font-size: 1.25rem;
}

.profile-feed-item {
  padding: 1.5rem 0;
  border-bottom: 1px solid #e9e9e9;
}
.img-sm {
    width: 43px;
    height: 43px;
}

.star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}
    </style>

	
<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="border-bottom text-center pb-4">
                    <img src="../img/com.jpg" alt="profile" class="img-lg rounded-circle mb-3">
                    <div class="mb-3">
                      <h3>Travel Ella</h3>
                      <div class="d-flex align-items-center justify-content-center">
                        <h5 class="mb-0 mr-2 text-muted">Quality is garrented</h5>
                        </div>
                      </div>
                      <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="star-rating">
                                      <span class="fa fa-star-o" data-rating="1"></span>
                                      <span class="fa fa-star-o" data-rating="2"></span>
                                      <span class="fa fa-star-o" data-rating="3"></span>
                                      <span class="fa fa-star-o" data-rating="4"></span>
                                      <span class="fa fa-star-o" data-rating="5"></span>
                                      <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="w-75 mx-auto mb-3">
                        
                    </p>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-success mr-1">Message</button>
                      <button class="btn btn-success">Notifications</button>
                    </div>
                  </div>
                  
                  <div class="border-bottom py-4">
                    <div class="d-flex mb-3">
                      <div class="progress progress-md flex-grow">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="progress progress-md flex-grow">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="progress progress-md flex-grow">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="py-4">
                    
                    <p class="clearfix">
                      <span class="float-left">
                        Age
                      </span>
                      <span class="float-right text-muted">
                        27 years
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        languages 
                      </span>
                      <span class="float-right text-muted">
                        English
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Charge per day
                      </span>
                      <span class="float-right text-muted">
                        <a href="#">  Rs.500 </a>
                      </span>
                    </p>
                    
                  
                    
                        <p class="clearfix">
                            <span class="float-left">
                              Equipment condition
                            </span>
                            <span class="float-right text-muted">
                              <a href="#">  Already used</a>
                            </span>
                        </p>
                        
                        <img src="../img/tent.jpg" alt="profile" class="img-lg  mb-3">
                      </div>
                      
                    </div>
                </div>
            </div>
                
               <div class="col-lg-8">
                  
                  <div class="mt-4 py-2 border-top border-bottom">
                    <ul class="nav profile-navbar">
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <i class="mdi mdi-account-outline"></i>
                          Feedback
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="profile-feed">
                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/boy1.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          john michel
                          <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                        </h6>
                        <p>
                          I ordered a camping gas stove, portable Axe and camping chair
                          Products arrived right on time
                          Quite reasonable price. The chair looks pretty solid
                          Thanks for the good service!
                        </p>
                        <p class="small text-muted mt-2 mb-0">
                          <span>
                            <i class="mdi mdi-star mr-1"></i>4
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-comment mr-1"></i>11
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-reply"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/boy2.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          jeewani hetterachi
                          <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                        </h6>
                        <p>
                          What a great service.. i got my knive within a day.. i recomend this place to every 
                          one who want good stuff for your adventure life. And also if you in a hurry this is the
                           place to full fill your requirements
                        </p>                            
                        <p class="small text-muted mt-2 mb-0">
                          <span>
                            <i class="mdi mdi-star mr-1"></i>4
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-comment mr-1"></i>11
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-reply"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="d-flex align-items-start profile-feed-item">
                      <img src="../img/girl1.jpg" alt="profile" class="img-sm rounded-circle">
                      <div class="ml-4">
                        <h6>
                          anisha amaraveera
                          <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                        </h6>
                        <p>
                          Superb service. Keep it up!
                        </p>
                                                                                
                        <p class="small text-muted mt-2 mb-0">
                          <span>
                            <i class="mdi mdi-star mr-1"></i>4
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-comment mr-1"></i>11
                          </span>
                          <span class="ml-2">
                            <i class="mdi mdi-reply"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
@endsection