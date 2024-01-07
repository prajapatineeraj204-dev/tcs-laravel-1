@extends('layouts.web')
@section('content')
<div class="container-login">
  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
  @endif
  <div class="wrapper">
    <div class="title"><span>Sign up</span></div>
    <form action="{{route('register')}}" method="POST">
      @csrf
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="name" placeholder="Full Name" value="{{old('full_name')}}" required>
        <span class="text-danger">@error('name') {{$message}} @enderror</span>
      </div>
      <div class="row">
        <i class="fas  fa-envelope"></i>
        <input type="text" name="email" placeholder="Email Address" value="{{old('email')}}" required>
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
      </div>
      <div class="row">
        <i class="fas fa-phone"></i>
        <input type="text" name="phone" placeholder="Phone Number" value="{{old('phone')}}" required>
        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
      </div>
      <div class="row button">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</div>
@endsection



