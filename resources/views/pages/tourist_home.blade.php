@extends('layouts.defaulthome')

@section('content')
@csrf
@include('includes.home.banner')
<br>

@include('includes.user_home.profile_container')
    <h1> </h1>
   
@endsection