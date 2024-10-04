@extends('frontend.layout.app')

@section('frontend_content')


<div class="container">
    <div class="row border shadow m-4 p-4 ">
        
      <div class="col-3 m-5 p-2 ">
      <div class="card" style="width: 18rem;">
      
      <img src="{{asset('frontend_assets/images/notification/IMG_20230125_190953 (1).jpg')}}" class="img-responsive" alt="" style="width:100%;height: 200px;"> 
      <div class="card-body">
    <h5 class="card-title">Mr.Birbal Kumar </h5>
    <p class="card-text">OSD TO National President.</p>
    <a href="#" class="btn btn-primary">view</a>
  </div>
</div>
      </div>
      <div class="col-3 m-5 p-2">
      <div class="card" style="width: 18rem;">
      
      <img src="{{asset('frontend_assets/images/notification/WhatsApp_Image_2021-12-25_at_12.31.47_PM-removebg-preview.jpg')}}" class="img-responsive" alt="" style="width:100%;height: 200px;">  
      <div class="card-body">
    <h5 class="card-title">MR D VISHWAKARMA</h5>
    <p class="card-text">SECRETARY (I/A) NATIONAL OFFICE .</p>
    <a href="#" class="btn btn-primary">view</a>
  </div>
</div>
      </div>
      <div class="col-3 m-5 p-2">
      <div class="card" style="width: 18rem;">
      
      <img src="{{asset('frontend_assets/images/notification/PRABHAT MISHRA.jpg')}}" class="img-responsive" alt="" style="width:100%;height: 200px;">  
      <div class="card-body">
    <h5 class="card-title">PRABHAT KUMAR MISHRA</h5>
    <p class="card-text">NATIONAL COORDINATOR .</p>
    <a href="#" class="btn btn-primary">view</a>
  </div>
</div>
      </div>
	   
    
	  </div>
	
</div>
@endsection

@section('frontend_script')

@endsection