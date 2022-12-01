@extends('app')
@section('content')


        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{url('farmerquestion')}}" method="POST">
            @csrf
            <body class="bg-primary">
            <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
          <main>
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-20">
          <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-header"><h3 class="text-center font-weight-light my-4"> Questions For Farmer</h3></div>
            <div class="card-body">
            
            <div class="row g-3">
            <div class="col">  
            <label class="my-1 me-2">Which implement is used for land preparation?</label>
             <select class="form-select"  name="landpreparationimplement" aria-label="Default select example">
                <option selected> select implement</option>
                <option selected> Mb Plough</option>
                <option selected> Disc Plough</option>
            </select>
            </div>
            <div class="col">
            <label >How Many Labours used for land preparation?</label>
            <input type="labours"  class="form-control" name="labours" placeholder="Enter quantity">
            </div>
            </div>

            <div class="row g-3">
            <div class="col">
            <label>wages for tillage implements? *</label>
            <input type="wages"  class="form-control" name="wages" placeholder="Enter wages">        
          </div>
            <div class="col">
            <label class="my-1 me-2">Which Variety is grow for this Season?</label>
             <select class="form-select"  name="variety" aria-label="Default select example">
                <option selected> select Variety</option>
                <option selected> IR-5</option>
                <option selected>IR-20</option>
                <option selected>IR-22</option>
            </select>
           </div>
           </div>
           
           <div class="row g-3">
           <div class="col">
            <label>Availability of seeds ?</label>
            <input type="seedsavailability"  class="form-control" name="seedsavailability" placeholder="Enter ">        
          </div>
          <div class="col">
            <label class="my-1 me-2">Irrigation Methods?</label>
             <select class="form-select"  name="irrigation_methods" aria-label="Default select example">
                <option selected> select Irrigation Method</option>
                <option selected> Ponded water Using Motors</option>
                <option selected>River</option>
            </select>
           </div>
          </div>

           <div class="row g-3">
           <div class="col">
            <label class="my-1 me-2">Sowing Methods?</label>
             <select class="form-select"  name="sowing_methods" aria-label="Default select example">
                <option selected> select sowing Method</option>
                <option selected> seed drum</option>
                <option selected>labours</option>
            </select>
           </div>
           <div class="col">
            <label>Sowing Method used total wage?</label>
            <input type="sowing_method_wage"  class="form-control" name="sowing_method_wage" placeholder="Enter ">        
          </div>
          </div>

          <div class="row g-3">
          <div class="col">
            <label class="my-1 me-2">Nutrient management?</label>
             <select class="form-select"  name="nutrient_management" aria-label="Default select example">
                <option selected> select Nutrient Management</option>
                <option selected>fym-25kg/ha</option>
                <option selected>NPK 120:40:40 kg/ha</option>
            </select>
           </div>
           <div class="col">
            <label>Weed Management total wage?</label>
            <input type="weed_total_wage"  class="form-control" name="weed_total_wage" placeholder="Enter ">        
          </div>
         </div>

          <div class="row g-3">
          <div class="col">
            <label>Paste Control?</label>
            <input type="paste_control"  class="form-control" name="paste_control" placeholder="Enter ">        
          </div>

          <div class="col">
            <label class="my-1 me-2">Harvesting Methods?</label>
             <select class="form-select"  name="harvesting_methods" aria-label="Default select example">
                <option selected> select Harvesting Method</option>
                <option selected>Rice harvester</option>
                <option selected>labours</option>
            </select>
           </div>
           </div>
         






</div>
        
            <div class="mb-3">
                <button class="btn btn-primary">Add</button>
              
              

</div>
<div>
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