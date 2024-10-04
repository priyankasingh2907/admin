

@extends('frontend.layout.app')

@section('frontend_content')


<div class="container">
    <div class="row  p-4 m-3">
        <div class="col-6 offset-8 border shadow p-4 m-3">
        <form>
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="p-3 form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class=" p-3 form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group mb-2">
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
 
</form>
        </div>
    </div>
</div>


    
@endsection

@section('frontend_script')

@endsection