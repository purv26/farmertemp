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
        <form action="{{url('categoryadd')}}" method="POST">
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
            <label>CategoryImage </label>
                <input class="form-control " id="formFileLg" type="file"  name="categoryimage" />
                <div class="small text-muted mt-2"></div>
            </div>

            <div class="col">
            <label>CityName *</label>
            <input type="cityname" value="" class="form-control" name="cityname" placeholder="Enter cityname">
            </div>
           </div>
           
            <div class="row g-3">
            <div class="col">
            <label>Harvest *</label>
            <input type="text" value="" class="form-control" name="harvest" placeholder="Enter Harvest">
            </div> 
            <div class="col">
                <label>Demand <span class="text-danger">*</span></label>
                <input class="form-control" type="" placeholder="Enter Demand"name="demand" />
            </div>
        </div>

             <div class="row g-3">
             <div class="col">  
            <label>Difference</label>
            <input type="" value="" class="form-control" name="difference" placeholder="Enter Diffrence">
            </div>
           
            
           </div>

    

            <div class="mb-3">
                <button class="btn btn-primary">Add</button>
               
              

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