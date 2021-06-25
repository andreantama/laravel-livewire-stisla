@extends('layouts.auth.template')
@section('title', 'Login')
@section('content')
<div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../assets/img/stisla-fill.svg" alt="logo" class="shadow-light rounded-circle" width="100">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                @livewire('admin.register')
              </div>
            </div>
            <div class="simple-footer">
              Copyright © Stisla 2018
            </div>
          </div>
        </div>
@endsection
