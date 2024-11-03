@extends("layouts.default")
@section("title", "Login")
@section("content")
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card p-4" style="max-width: 400px; width: 100%;">
      <h3 class="text-center">Login</h3>
      <form method="post" action="{{route('login.post')}}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
          <div class="invalid-feedback">Please enter a valid email.</div>
          @if ($errors->has('email'))
            <span class="text-danger">
              {{ $errors->first('email') }}
            </span>
          @endif
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
          <div class="invalid-feedback">Please enter your password.</div>
          @if ($errors->has('password'))
            <span class="text-danger">
              {{ $errors->first('password') }}
            </span>
          @endif
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <div class="mt-3 text-center">
          <a href="register.html">Don't have an account? Register</a>
        </div>
      </form>
    </div>
  </div>
@endsection
