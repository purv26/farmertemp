@extends('app')
@section('content')

        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{url('register')}}" method="POST">
            @csrf
            <body class="bg-primary">
            <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
          <main>
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-20">
          <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account For Farmers</h3></div>
            <div class="card-body">
            
            <div class="row g-3">
            <div class="col">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name"value="{{ old('name') }}" />
            </div>

            <div class="col">
            <label>LastName *</label>
            <input type="lastname" value="" class="form-control" name="lastname" placeholder="Enter your LastName">
            </div>
           </div>
           
            <div class="row g-3">
            <div class="col">
            <label>PhoneNumber *</label>
            <input type="phonenumber" value="" class="form-control" name="phonenumber" placeholder="Enter your Phonenumber">
            </div> 
            <div class="col">
                <label>EmailId <span class="text-danger">*</span></label>
                <input class="form-control" type="email" placeholder="Enter your EmailId" name="email" id="email"/>
            </div>
        </div>

            <div class="row g-3">
                <div class="col">
                <label>Address <span class="text-danger">*</span></label>
                <input class="form-control" type="address" placeholder="Enter your Address" name="address" />
            </div>
            <div class="col">
            <label>Village *</label>
            <input type="village" value="" class="form-control" name="village" placeholder="Enter name of village">
            </div>
           </div>

            <div class="row g-3">
            <div class="col">
            <label>District*</label>
            <input type="text" value="" class="form-control" name="district" placeholder="Enter your District" >
            </div>
            <div class="col">
            <label>PinCode *</label>
            <input type="pincode" value="" class="form-control" name="pincode" placeholder="Enter name of Pincode">
            </div>
           </div>
            
            <div class="row g-3">
                <div class="col">
            <label>State*</label>
            <input type="text" value="" class="form-control" name="state" placeholder="Enter your state" >
            </div>
            <div class="col">
            <label>SHG Name *</label>
            <input type="shgname" value="" class="form-control" name="shgname" placeholder="Enter shg name">
            </div>
             </div>


             <div class="row g-3">
             <div class="col">
            <label>Your Photo *</label>
                <input class="form-control " id="formFileLg" type="file"  name="photo" />
                <div class="small text-muted mt-2"></div>
            </div>
            <div class="col">  
            <label>AdharNumber *</label>
            <input type="adharnumber" value="" class="form-control" name="adharnumber" placeholder="Enter your Adharnumber">
            </div>
           </div>

           <div class="row g-3">
            <div class="col">
                <label> Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" placeholder="Enter your UserNmae" value="{{ old('username') }}" />
            </div>
                <div class="col">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" placeholder="Enter your Password" name="password" />
            </div>
           </div>

            <div class="row g-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" placeholder="Confirm your Password"name="password_confirm" />
            </div>


            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a href="{{ url('login') }}">Already have an Account</a>


          </div>
              <div class="mb-3">
              
                <a href="{{ url('traderregi') }}">TraderRegistration</a>
                <a href="{{ url('farmerquestion') }}">farmerquestion</a>
                <a href="{{ url('questionanswer') }}">question&answer</a>
                
                <a href="{{ url('Dashboard1') }}">question&answer</a>


            </div>
            <div class="mb-3">
              
                <a href="{{ url('farmerregi') }}">FarmerGroupRegistration</a>
                <a href="{{ url('farmeraddquantity') }}">  farmeraddquantity</a>
            </div>
</div>
<div>
</div>
</div>
</div>
</diV>

</main>
</div>
</div>
</body>
        </form>
 
@endsection