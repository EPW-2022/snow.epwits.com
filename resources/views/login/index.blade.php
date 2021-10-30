@extends('layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
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

        <main class="form-signin mt-3">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required>
                <label for="username">Username</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                </div>
                <div class="checkbox mb-3">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small>Not registered? <a href="/register">Register here</a></small>
        </main>
    </div>
</div>

@endsection