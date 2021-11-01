@extends('layouts.main')

@section('content')
<section class="loginm">
        <div class="container d-flex justify-content-center flex-column py-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginerror'))
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                {{ session('loginerror') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
          <div class="row align-items-center">
            <div class="col-md-4 px-6 logo">
              <img src="/img/logosnow.png" class="login-logo d-block mx-auto" alt="">
              <img src="/svg/logosnow.svg" class="login-epw-2022 d-block mx-auto" alt="">
            </div>
            <div class="col-md-7 px-6 user_pass"> 
              <form action="/login" method="POST" class="login-form mx-auto me-2 px-4 mt-5 mt-md-0">
                @csrf
                <div class="mb-4 ">
                  <label for="username" class="form-label">Alamat email</label>
                  <input class="form-control @error('username') is-invalid @enderror" type="text" id="username" name="username" placeholder="Alamat email" autofocus tabindex="1" autocomplete="on" required>
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password" tabindex="2" required>
                </div>
                <button type="submit" class="btn login-button w-100" tabindex="3">Log In</button>
                <p class="login-register text-center mt-3" tabindex="4">Belum punya akun? <a href="/register">Daftar sekarang!</a></p>
              </form>
            </div>
          </div>
        </div>
      </section>
@endsection