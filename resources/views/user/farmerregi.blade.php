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
        <form action="{{url('farmerregi')}}" method="POST">
            @csrf
            <body class="bg-primary">
            <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
          <main>
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-20">
          <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account For FarmerGroupRegistration</h3></div>
            <div class="card-body">
            
            <div class="row g-3">
            <div class="col">
                <label>Name *<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name"value="{{ old('name') }}" />
            </div>

            <div class="col">
            <label>VillageName *</label>
            <input type="villagename" value="" class="form-control" name="villagename" placeholder="Enter VillageName">
            </div>
           </div>
           
            <div class="row g-3">
            <div class="col">
            <label>PersonIncharge Name *</label>
            <input type="piname" value="" class="form-control" name="piname" placeholder="Enter PersonIncharge Name">
            </div> 
            <div class="col">
                <label>InchargeEmailId <span class="text-danger">*</span></label>
                <input class="form-control" type="piemail" placeholder="Enter InchargeEmailId"name="piemail" />
            </div>
        </div>

             <div class="row g-3">
             <div class="col">  
            <label>InchargeContactNumber </label>
            <input type="icontactnumber" value="" class="form-control" name="icontactnumber" placeholder="Enter InchargeContactNumber">
            </div>
             <div class="col">
            <label>Upload Document/Photo </label>
                <input class="form-control " id="formFileLg" type="file"  name="photo" />
                <div class="small text-muted mt-2"></div>
            </div>
            
           </div>

    

            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a href="{{ url('register') }}">Already have an Account</a>


</div>
<div>

</div>
</div>
</div>
</diV>

</main>
</div>
</div>
</div>
</div>
</div>
</body>
        </form>
 
@endsection