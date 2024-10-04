@extends('frontend.layout.app')

@section('frontend_content')


<div class="container">
    <!-- <div class="row">
        <div class="col-8 my-4">
            <h4>CERTIFICATE NO. </h4>
            <hr>
        </div>
    </div> -->

    <div class="row  p-3 m-3 ">

        <div class="col-6 p-5  m-auto border shadow ">
            <!-- <form method="post" name="search" action="" class="">
            MEMBERSHIP CERTIFICATE NUMBER: <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
            <input type="submit" name="search" class="btn btn-primary btn-sm mt-2" value="Verify"style=" background-color: #a85ed6; width: 100px;margin-top:8px;">
        </form><br> -->
            <form method="post" name="searchi" action="" class="mb-2">
                <label for="" class="form-label"> ACTIVE MEMBERSHIP:</label>
                <input id="searchdatai" placeholder="NHRCCB/0000 OR MOBILE NO (10 DIGIT)" maxlength="11" type="text" name="searchdatai" required="true" class="form-control p-3">
                <!-- <input type="submit" name="searchi" class="btn btn-sm-primary " value="Verify"> -->
                 <button type="submit" class="btn btn-primary m-1">Submit</button>
            </form><br>
            <form method="post" name="search2" action="" class="mb-2">
                <label for="" class="form-label"> DESIGNATION: </label>
                <input id="searchdata2" type="text" placeholder="NHRCCB/0000 OR MOBILE NO (10 DIGIT)" maxlength="11" name="searchdata2" required="true" class="form-control p-3">
                <!-- <input type="submit" name="search2" class="btn btn-sm-primary  " value="Verify" > -->
                <button type="submit" class="btn btn-primary m-1">Submit</button>

            </form><br>
            <form method="post" name="search" action="" class="mb-2">
                <label for="" class="form-label"> VOLUNTEER: </label>
                <input id="searchdata" type="text" placeholder="NHRCCB/VL/0000 OR MOBILE NO (10 DIGIT)" maxlength="14" name="searchdata" required="true" class="form-control p-3">
                <!-- <input type="submit" name="search" class="btn btn-sm-primary  " value="Verify"> -->
                <button type="submit" class="btn btn-primary m-1">Submit</button>

            </form>
        </div>



    </div>
</div>
@endsection

@section('frontend_script')

@endsection