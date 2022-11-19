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
        <form action="{{url('farmeraddquantity')}}" method="POST">
            @csrf
            <body class="bg-primary">
            <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
          <main>
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-20">
          <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-header"><h3 class="text-center font-weight-light my-4"> Account For FarmerquantityAdd</h3></div>
            <div class="card-body">
            
            <div class="row g-3">
            <div class="col">
            <label>CategoryName *</label>
            <input type="categoryname"  class="form-control" name="categoryname" placeholder="Enter CategoryId">
                <div class="small text-muted mt-2"></div>
            </div>

            <div class="col">
            <label>Quantity *</label>
            <input type="quantity" value="number" class="form-control" name="quantity" placeholder="Enter quantity">
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