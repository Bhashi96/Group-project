@extends('layouts.defaulthome')

@section('content')
@csrf
@include('includes.user_home.user_home_banner')
<br>

@include('includes.user_home.profile_container')
    <h1> </h1>
   
@endsection