@extends('app')
@section('content')

        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        

        <form action="{{url('procurementsender')}}" method="POST">
            @csrf
            <body class="bg-primary">
          <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
          <main>
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-40">
          <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account For PrecurementSender</h3></div>
            <div class="card-body">
            <div class="row g-4" >
            <div class="col">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" placeholder="Enter ProcurementSender Name"value="{{ old('name') }}" />
            </div>
            <div class="col">
            <label>LastName *</label>
            <input type="lastname" value="" class="form-control" name="lastname" placeholder="Enter ProcurementSender LastName">
            </div>
            </div>
            <div class="row g-4" >
            <div class="col">
            <label>PhoneNumber *</label>
            <input type="phonenumber" value="" class="form-control" name="phonenumber" placeholder="Enter your Phonenumber">
            </div>
            <div class="col">
                <label>Address <span class="text-danger">*</span></label>
                <input class="form-control" type="address" placeholder="Enter your Address" name="address" />
            </div>
            </div>

            <div class="row g-4"> 
            
            <div class="col">
                <label>EmailId <span class="text-danger">*</span></label>
                <input class="form-control" type="email" placeholder="Enter your EmailId"name="emailid" />
            </div>
            <div class="col">
            <label>Upload Your Photo/File *</label>
                <input class="form-control " id="formFileLg" type="file"  name="photofile" />    
            </div>
            </div>

            <div class="row g-4">
            <div class="col">
                <label>PresidentName<span class="text-danger">*</span></label>
                <input class="form-control" type="presidentname" placeholder="Enter PresidentName" name="presidentname" />
            </div>
            <div class="col">
            <label>PresidentContact *</label>
            <input type="presidentphonenumber" value="" class="form-control" name="presidentphonenumber" placeholder="Enter PresidentContactNumber">
            </div>
             </div>

            <div class=" row g-4">
            <div class="col">
            <label>Presidentaddress*</label>
            <input type="text" value="" class="form-control" name="presidentaddress" placeholder="Enter PresidentAddress" >
            </div>
            <div class="col">
            <label>RegistrationNumber *</label>
            <input type="registration_number" value="" class="form-control" name="registration_number" placeholder="Enter RegistrationNumber">
            </div>
           </div>

            <div class="row rg-3">
                <div class="col">
            <label>EmailId *</label>
            <input type="pemailid" value="" class="form-control" name="pemailid" placeholder="Enter President EmailId">
            </div>
            <div class="col">
            <label>AdharNumber *</label>
            <input type="padharnumber" value="" class="form-control" name="padharnumber" placeholder="Enter President Adharnumber">
            </div>

           
            </div>
            <div class="row g-4">
            <div class="col">
                <label>secretaryName<span class="text-danger">*</span></label>
                <input class="form-control" type="secretaryname" placeholder="Enter SecretaryName" name="secretaryname" />
            </div>
            <div class="col">
            <label>SecretaryContact *</label>
            <input type="sphonenumber" value="" class="form-control" name="sphonenumber" placeholder="Enter secretaryContactNumber">
            </div>
             </div>

             <div class=" row g-4">
            <div class="col">
            <label>SecretaryAddress*</label>
            <input type="secretaryaddress" value="" class="form-control" name="secretaryaddress" placeholder="Enter SecretaryAddress" >
            </div>
            <div class="col">
            <label>EmailId *</label>
            <input type="semailid" value="" class="form-control" name="semailid" placeholder="Enter Secretary EmailId">
            </div>
           
           </div>
           <div class=" row g-4">
           <div class="col">
            <label>AdharNumber *</label>
            <input type="sadharnumber" value="" class="form-control" name="sadharnumber" placeholder="Enter Secretary Adharnumber">
            </div>
            

</div>

            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a href="{{ url('login') }}">Already have an Account </a>
               
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