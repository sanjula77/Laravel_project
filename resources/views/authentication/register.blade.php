@extends("layouts.default")
@section("title", "Register")
@section("content")
<div class="container d-flex align-items-center justify-content-center min-vh-100"> 
    <div class="card p-4" style="max-width: 400px; width: 100%;">
    @if(session()->has("success"))
      <div class="alert alert-success">
        {{session()->get('success')}}
      </div>
    @endif  
    @if(session()->has("error"))
      <div class="alert alert-success">
        {{session()->get('error')}}
      </div>
    @endif 
      <h3 class="text-center">Register</h3>
      <form method="post" action="{{route('register.post')}}">
      @csrf 
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="Fullname" placeholder="Enter your fullname">
          <div class="invalid-feedback">Please enter your name.</div>
          @if ($errors->has('Fullname'))
            <span class="text-danger">
              {{ $errors->first('Fullname') }}
            </span>
          @endif
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
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
        <button type="submit" class="btn btn-primary w-100">Register</button>
        <div class="mt-3 text-center">
          <a href="login.html">Already have an account? Login</a>
        </div>
      </form>
    </div>
  </div>
@endsection
