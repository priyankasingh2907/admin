@extends('frontend.layout.app')

@section('frontend_content')

<div class="container">
    <div class="row border shadow m-4 p-4 ">
        
      <div class="col-3 m-5 p-2 ">
      <div class="card" style="width: 18rem;">
      
      <img src="{{asset('frontend_assets/images/notification/bharti sir .jpg')}}" class="img-responsive" alt="" style="width:100%;height: 200px;"> 
      <div class="card-body">
    <h5 class="card-title">Dr. Shiv Shankar Bharti </h5>
    <p class="card-text">MBBS ,M.D, Asst. Professor MGM medical college & LSK Hospital Kishanganj.</p>
    <a href="#" class="btn btn-primary">view</a>
  </div>
</div>
      </div>
      <div class="col-3 m-5 p-2">
      <div class="card" style="width: 18rem;">
      
      <img src="{{asset('frontend_assets/images/notification/awadesh verma.jpg')}}" class="img-responsive" alt="" style="width:100%;height: 200px;">  
      <div class="card-body">
    <h5 class="card-title">Dr. Avdesh Verma</h5>
    <p class="card-text">M.B.B.S (Foreign)M.D .</p>
    <a href="#" class="btn btn-primary">view</a>
  </div>
</div>
      </div>
      <div class="col-3 m-5 p-2">
      <div class="card" style="width: 18rem;">
      
      <img src="{{asset('frontend_assets/images/notification/mohit gupta.jpg')}}" class="img-responsive" alt="" style="width:100%;height: 200px;">  
      <div class="card-body">
    <h5 class="card-title">Mr. Mohit Gupta</h5>
    <p class="card-text">Advocate, Supreme Court of India .</p>
    <a href="#" class="btn btn-primary">view</a>
  </div>
</div>
      </div>
	   
        
	  </div>
	
</div>
@endsection

@section('frontend_script')

@endsection