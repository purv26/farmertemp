@extends('app')
@section('content')
<div class="row gx-5">
    <div class="col-md-6 col-xs-offset-2">
        <div class="container px-3">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        

        <form action="{{url('traderregi')}}" method="POST">
            @csrf
            {{method_field('PUT')}}
            <body class="bg-primary">
          <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
          <main>
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-20">
          <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account For Traders</h3></div>
            <div class="card-body">
            <div class="row rg-3" >
            <div class="col">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name"value="{{ old('name') }}" />
            </div>
            <div class="col">
            <label>LastName *</label>
            <input type="text" value="" class="form-control" name="lastname" placeholder="Enter your LastName">
            </div>
            </div>

            <div class="row rg-3"> 
            <div class="col">
            <label>PhoneNumber *</label>
            <input type="phonenumber" value="" class="form-control" name="phonenumber" placeholder="Enter your Phonenumber">
            </div>
            
            <div class="col">
                <label>EmailId <span class="text-danger">*</span></label>
                <input class="form-control" type="email" placeholder="Enter your EmailId"name="emailid" />
            </div>
            </div>

            <div class="row rg-3">
            <div class="col">
                <label>Address <span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder="Enter your Address" name="address" />
            </div>
           
            <div class="col">
            <label>District*</label>
            <input type="text" value="" class="form-control" name="district" placeholder="Enter your District" >
            </div>
           </div>

            <div class=" row reg-3">
            <div class="col">
            <label>State*</label>
            <input type="text" value="" class="form-control" name="state" placeholder="Enter your state" >
            </div>
            <div class="col">
            <label>GstNumber *</label>
            <input type="gst_number" value="number" class="form-control" name="gst_number" placeholder="Enter GstNumber">
            </div>
           </div>

            <div class="row rg-3">
                <div class="col">
            <label>AdharNumber *</label>
            <input type="adharnumber" value="" class="form-control" name="adhar_number" placeholder="Enter your Adharnumber">
            </div>
            
            <div class="col">
            <label>Your Photo *</label>
                <input class="form-control " id="formFileLg" type="file"  name="photo" />
                <div class="small text-muted mt-2"></div>
             </div>
            </div>

            <div class="row">
            <label>Upload Your Photo/File *</label>
                <input class="form-control " id="formFileLg" type="file"  name="photofile" />    
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a href="{{ url('login') }}">Already have an Account </a>
               
            </div>
            </div>
              <div class="mb-3">
              
                <a href="{{ url('procurementsender') }}">Procurementsender</a>
            </div>
           
</div>
</div>
</div>
</div>
</div>
</div>
            <main>
        </form>
</body>
</div>
</div>

    </div>


</div>
@endsection