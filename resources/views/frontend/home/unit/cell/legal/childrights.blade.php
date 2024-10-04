@extends('frontend.layout.app')

@section('frontend_content')
<div class="container">
    <div class="row">
       <div class="col-3 border shadow m-3 p-4 ">
       <div class="card" style="">
  <img src="{{asset('frontend_assets/images/team/IMG-20210823-WA0003.jpg')}}" class="card-img-top" alt="..." style="width: 190px ; height:143px; padding:1rem 1.3rem 0;">
  <div class="card-body">
    <h5 class="card-title">Mr.Girish Chandra</h5>
    <p class="card-text">National President -NCRPC.</p>
    <a href="#" class="btn btn-primary">View </a>
  </div>
</div>
       </div>
    </div>
</div>

@endsection

@section('frontend_script')

@endsection