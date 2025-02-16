@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
      @if (session()->has('success'))     
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))     
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" autofocus required value="{{ old('username') }}">
              <label for="username">Username</label>
              @error('username')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-top mt-2" id="floatingPassword" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Doesnt have an account? <a href="/register">Register</a></small>
        </main>
    </div>
</div>


@endsection