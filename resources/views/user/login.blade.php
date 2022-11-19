@extends('app')
@section('content')

        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        
        <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
        <div class="row g-0">
        <div class="col-md-6 col-lg-5 d-none d-md-block">
        <img src="./SimplifyAgriLogogreen.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
</div>
<div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form action="{{url('login')}}" method="POST">
              <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Sign into your account</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"></h5>
            @csrf
            <div class="form-outline mb-4">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" >Login</button>
                <a class="small text-muted" href="{{ url('password') }}">Forgot password?</a>
                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ url('register') }}"
                      style="color: #393f81;">Register here</a></p>
                      <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
               
</div>
</div>
</div>
</div>
</div>
</div>        
</div>
</div>
            </div>
        </form>
</section>
@endsection