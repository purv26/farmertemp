@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{url('register')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name"value="{{ old('name') }}" />
            </div>

            <div class="mb-3">
            <label>LastName *</label>
            <input type="lastname" value="" class="form-control" name="lastname" placeholder="Enter your LastName">
            </div>
            <div class="mb-3">
            <label>PhoneNumber *</label>
            <input type="phonenumber" value="" class="form-control" name="phonenumber" placeholder="Enter your Phonenumber">
            </div>
            
            <div class="mb-3">
                <label>EmailId <span class="text-danger">*</span></label>
                <input class="form-control" type="email" placeholder="Enter your EmailId"name="email" />
            </div>
            <div class="mb-3">
                <label>Address <span class="text-danger">*</span></label>
                <input class="form-control" type="address" placeholder="Enter your Address" name="address" />
            </div>
            <div class="mb-3">
            <label>Village *</label>
            <input type="village" value="" class="form-control" name="village" placeholder="Enter name of village">
            </div>
            <div class="mb-3">
            <label>District*</label>
            <input type="text" value="" class="form-control" name="district" placeholder="Enter your District" >
            </div>
            <div class="mb-3">
            <label>PinCode *</label>
            <input type="pincode" value="" class="form-control" name="pincode" placeholder="Enter name of Pincode">
            </div>
            
            <div class="mb-3">
            <label>State*</label>
            <input type="text" value="" class="form-control" name="state" placeholder="Enter your state" >
            </div>

            <div class="mb-3">
            <label>SFG Name *</label>
            <input type="sfgname" value="" class="form-control" name="sfgname" placeholder="Enter sfg name">
            </div>
            <div class="mb-3">
            <label>AdharNumber *</label>
            <input type="adharnumber" value="" class="form-control" name="adharnumber" placeholder="Enter your Adharnumber">
            </div>

            <div class="mb-3">
                <label> Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" placeholder="Enter your UserNmae" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" placeholder="Enter your Password" name="password" />
            </div>
            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" placeholder="Confirm your Password"name="password_confirm" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a href="{{ url('traderregi') }}">next</a>
            </div>
        </form>
    </div>
</div>
@endsection