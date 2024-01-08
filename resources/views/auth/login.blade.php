@extends('layouts.web')
@section('content')
<div class="container-login">
  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
  @endif
  @if(session()->has('error'))
  <div class="alert alert-success" role="alert">{{session()->get('error')}}</div>
  @endif
  <div class="wrapper">
    <div class="title"><span>Login</span></div>
    <form action="{{route('login')}}" method="POST">
      @csrf
        <div class="text-center"><span class="text-danger">@error('email') {{$message}} @enderror</span></div>
      <div class="row">
          
        <i class="fas  fa-envelope"></i>
        <input type="text" name="email" placeholder="Email Address" value="{{old('email')}}" required>
        
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
      </div>
      <div class="row button">
        <input type="submit" value="Submit">
      </div>
      <div class="d-flex">
          <div><p>Not a member? <a href="{{route('register')}}">Register</a></p></div>
          <div class="margin__auto"><p>Forget <a href="https://thecharteredspace.com/forgot">Password</a></p></div>
      </div>
    </form>
  </div>
</div>
@endsection