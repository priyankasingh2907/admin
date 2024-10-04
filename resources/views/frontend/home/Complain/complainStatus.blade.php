@extends('frontend.layout.app')

@section('frontend_content')

<div class="container">
    <div class="row">
        <div class="col-10 shadow border m-5 p-4">
        <div class="h4 text-enter my-3">  COMPLAINT / CASE STATUS</div>
        <hr>
            <div class="row">
            
 
<div class="col-6 my-3">
    <div class="h6">COMPLAINT / CASE STATUS</div>
    <hr>
    <form action="" method="post" class="border p-4 m-4">
            <div class="row">
                <!--<div class="col-md-12">-->
                <!--	<div class="form-group">-->
                <!--		<label>Where you have registered in ? </label>-->
                <!--		<select class="form-control" name="complaint_to" required>-->
 <!--                      <option value="NHRCCB"-->
 <!--                           >-->
 <!--                           NHRCCB</option>-->
 <!--                       <option value="SHRC"-->
 <!--                           >-->
 <!--                           SHRC</option>-->
                <!--			 </select>-->
                <!--	</div>-->
                <!--</div>-->
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Complant Number</label>
                        <input type="text"  class="form-control p-3" placeholder="Complant Number" value="" name="complaint_no" id="complaint_no" required/>
                    </div>
                </div>
                 <div class="col-sm-12 col-lg-12 col-md-12">
                  <div class="form-group" style="text-align: center;">
                    <button class="btn btn-info" name="csubmit" type="submit">Search</button>
                </div>
                </div>
            </div>
            </form> 

</div>
                                  
           
   
           
</div>
<div class="row">
    <div class="col-12">
  
        <div class="h4 bg-body-secondary">COMPLAINT DETAILS</div>
    
        <div class="alert alert-info">Search Complaint Status.</div>
           
    </div>
</div>
</div>

                
            </div>
        </div>
  
@endsection

@section('frontend_script')

@endsection