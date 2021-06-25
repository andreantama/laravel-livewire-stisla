@extends('layouts.auth.template')
@section('title', 'Login')
@section('content')
<div class="row">
  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
    <div class="login-brand">
      <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
    </div>

    <div class="card card-primary">
      <div class="card-header">
        <h4>Login</h4>
      </div>

      <div class="card-body">
        @livewire('admin.auth')
      </div>
    </div>
    <div class="mt-5 text-muted text-center">
      Don't have an account? <a href="{{ Route('auth.admin.register') }}">Create One</a>
    </div>
    <div class="simple-footer">
      Copyright &copy; Stisla 2018
    </div>
  </div>
</div>
@endsection
