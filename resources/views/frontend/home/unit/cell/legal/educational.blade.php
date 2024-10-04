@extends('frontend.layout.app')

@section('frontend_content')
<div class="container">
    <div class="row">
       <div class="col-3 border shadow m-3 p-4 ">
       <div class="card" style="">
  <img src="{{asset('frontend_assets/images/team/WhatsApp Image 2022-02-11 at 10.10.41 PM.jpeg')}}" class="card-img-top" alt="..." style="width: 190px ; height:143px; padding:1rem 1.3rem 0;">
  <div class="card-body">
    <h5 class="card-title">RISHI RANJAN KUMAR</h5>
    <p class="card-text">District Secretary Dhanbad.</p>
    <a href="#" class="btn btn-primary">View </a>
  </div>
</div>
       </div>
       <div class="col-3 border shadow m-3 p-4 ">
       <div class="card" style="">
  <img src="{{asset('frontend_assets/images/team/1644589731308.jpg')}}" class="card-img-top" alt="..." style="width: 190px ; height:143px; padding:1rem 1.3rem 0;">
  <div class="card-body">
    <h5 class="card-title">PRAMOD KUMAR JAISWAL</h5>
    <p class="card-text">State President Jharkhand.</p>
    <a href="#" class="btn btn-primary">View </a>
  </div>
</div>
       </div>
    </div>
</div>

@endsection

@section('frontend_script')

@endsection