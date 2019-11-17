@extends('layouts.reglayout')


@section('content')

<br><br>

    <div class="container mt-3">
    <h1>Registr as Tourist</h1>
    <br><br>
    <form method="POST" action="{{ route('register') }}">
        <div class="form-row">
                <div class="form-group col-md-12">
                        <label for="inputname">Full Name</label>
                        <input type="text" class="form-control" id="inputname" placeholder="full name">
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
            <div class="form-group col-md-6">
                <label for="inputCountry">Country</label>
                <input type="text" class="form-control" id="inputCountry">
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
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


@endsection