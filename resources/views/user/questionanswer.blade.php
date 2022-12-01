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
        <form action="{{url('questionanswer')}}" method="POST">
            @csrf
            <body class="bg-primary">
            <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
          <main>
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-20">
          <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Question&Answer</h3></div>
            <div class="card-body">
            
          
            <div class="row g-3">
            <label>Enter Your Question*</label>
            <input type=""  class="form-control" name="question" placeholder="Enter Question">        
          </div>
          <div class="row g-3">
            <label>Enter Your Answer*</label>
            <input type=""  class="form-control" name="answer" placeholder="Enter Answer">        
          </div>

            <div class="mb-3">
                <button class="btn btn-primary">Add</button>
               
</div>
<div class="mb-3">
<a  href="{{ url('editquestion') }}" >Edit</a>
               
               
</div>
<div class="mb-3">
<a  href="{{ url('serachquestion') }}">Serach</a>
</div>
<div class="mb-3">
<a  href="{{ url('removequestion') }}">Remove</a>
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