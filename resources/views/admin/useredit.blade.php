@extends('layouts.admin')

@section('content')
<div class="container-fluid py-6">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('User Edit') }}</div>
                 <div class="card-body">
                   
                    <form method="POST" action="{{ route('userupdate') }}">
                        @csrf
                         <input id="userid" type="hidden" class="form-control @error('userid') is-invalid @enderror" name="userid" value="{{ $user->id }}" required autocomplete="userid" autofocus>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label for="name" class="">{{ __('Name') }}</label>
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="email" class="">{{ __('Email Address') }}</label>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <label for="phone" class="">{{ __('Phone') }}</label>

                            <div class="form-group">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone" class="">{{ __('Role') }}</label>

                            <div class="form-group">
                                <select class="form-select" name="role">
                                    <option value="1" {{ $user->role==1?"selected":""}}>Super Admin</option>
                                    <option value="2" {{ $user->role==2?"selected":""}}>Admin</option>
                                    <option value="3" {{ $user->role==3?"selected":""}}>User</option>
                                </select>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
