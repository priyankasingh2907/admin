@extends('frontend.layout.app')

@section('frontend_content')

<div class="container">
    <div class="row">
        <div class="col-10 shadow border offset-3 m-5 p-4">
            <div class="row">
            <div class="container-fluid bgbx">

<div class="row">
    <div class="col-sm-6 text-start">
        <h4>ONLINE COMPLAINT FILING</h4>
        <hr>
    </div>
    <div class="col-sm-6 text-start">

        <a href="#">
            <h4>GUIDELINES FOR FILING COMPLAINTS</h4>
            <hr>
        </a>
    </div>
</div>
</div>
<div class="container-fluid" style="margin: 50px 0px;">

<div class="titlecom">
    Complainant Verification
</div>

<div class="comboxfull">
    <form role="form" method="POST" action="" id="otpForm">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                            <label class="form-label">Select State of Incident <span class="redtext"> *</span></label>
                    <select class="form-control state" name="state" id="state" required>
                        <option value="">SELECT YOUR STATE</option>
                                                    <option value="ANDAMAN AND NICOBAR (UT)">ANDAMAN AND NICOBAR (UT)</option>
                                                    <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                    <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                                                    <option value="ASSAM">ASSAM</option>
                                                    <option value="BIHAR">BIHAR</option>
                                                    <option value="CHANDIGARH (UT)">CHANDIGARH (UT)</option>
                                                    <option value="CHHATTISGARH">CHHATTISGARH</option>
                                                    <option value="DADRA AND NAGAR HAVELI (UT)">DADRA AND NAGAR HAVELI (UT)</option>
                                                    <option value="DAMAN AND DIU (UT)">DAMAN AND DIU (UT)</option>
                                                    <option value="DELHI">DELHI</option>
                                                    <option value="GOA">GOA</option>
                                                    <option value="GUJARAT">GUJARAT</option>
                                                    <option value="HARYANA">HARYANA</option>
                                                    <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                                    <option value="JAMMU KASHMIR">JAMMU KASHMIR</option>
                                                    <option value="JHARKHAND">JHARKHAND</option>
                                                    <option value="KARNATAKA">KARNATAKA</option>
                                                    <option value="KERALA">KERALA</option>
                                                    <option value="LAKSHADWEEP (UT)">LAKSHADWEEP (UT)</option>
                                                    <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                    <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                    <option value="MANIPUR">MANIPUR</option>
                                                    <option value="MEGHALAYA">MEGHALAYA</option>
                                                    <option value="MIZORAM">MIZORAM</option>
                                                    <option value="NAGALAND">NAGALAND</option>
                                                    <option value="ODISHA">ODISHA</option>
                                                    <option value="PUDUCHERRY (UT)">PUDUCHERRY (UT)</option>
                                                    <option value="PUNJAB">PUNJAB</option>
                                                    <option value="RAJASTHAN">RAJASTHAN</option>
                                                    <option value="SIKKIM">SIKKIM</option>
                                                    <option value="TAMILNADU">TAMILNADU</option>
                                                    <option value="TELANGANA">TELANGANA</option>
                                                    <option value="TRIPURA">TRIPURA</option>
                                                    <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                    <option value="UTTARAKHAND ">UTTARAKHAND </option>
                                                    <option value="WEST BENGAL">WEST BENGAL</option>
                                                </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Where do you want to submit your complaint<span class="redtext">
                            *</span></label>
                    <select class="form-control" name="complaint_to" id="complaint_to" required>
                        <option value="">SELECT WHERE TO SUBMIT</option>
                        <option value="NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU"
                            >
                            NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU</option>
                        <!--<option value="SHRC"-->
                        <!--    >-->
                        <!--    SHRC</option>-->
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">E-Mail <span class="redtext"> *</span></label>
                    <input type="text" class="form-control p-3" name="email" id="email" required  placeholder="Email"/>
                </div>
            </div>

        </div>
        <div class="row justify-content-center" id="OTPEnter" style="display:none;">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                    <label class="form-label">Enter Your OTP <span class="redtext"> *</span></label>
                    <input type="text" class="form-control" name="otpvalue" id="otpvalue" required />
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-12 col-md-12 m-3">
            <div class="form-group" style="text-align: center;">
                <div id="error-message" class="error-message"></div>
                <button onclick="validateAndShowOTP()" class="btn btn-success hibtn" name="sendotp"
                    type="button">Get OTP</button>
                <button style="display:none;" onclick="checkOtp()" class="btn btn-success shobtn" name="verifyotp"
                    type="submit">Validate
                    OTP</button>
            </div>
        </div>

    </form>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if a success message exists in the page
        var successMessage = document.querySelector(".success-message");

        // If the success message element exists, set a timer to hide it after 5 seconds (5000 milliseconds)
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = "none"; // Hide the success message
            }, 5000); // Adjust the time as needed (5 seconds in this example)
        }
    });
    </script>



    <script>
    // Check if all required fields are filled
    function validateAndShowOTP() {
        const form = document.getElementById('otpForm');

        const stateSelect = form.querySelector('#state');
        const complaintSelect = form.querySelector('#complaint_to');
        const emailInput = form.querySelector('#email');
        const errorMessage = document.getElementById('error-message');
        var email = document.getElementById("email");


        if (!stateSelect.value || !complaintSelect.value || !emailInput.value) {
            errorMessage.textContent = 'Please Fill Details In All Required Fields.';
            errorMessage.style.color = 'red';
        } else {
            // if all filled correct show otp input and enter otp 
            showOTP();
            var mail = email.value;

            $.ajax({
                url: 'Ajax/email_otp.php',
                type: 'POST',
                data: {
                    email: mail
                },
                dataType: 'json', // Set dataType to 'json'
                success: function(response) {
                    // Handle the JSON response here
                    if (response.success) {
                        // Process successful response
                    } else {
                        // Handle error response
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX error
                }
            });


        }
    }

    function checkOtp() {

        const form = document.getElementById('otpForm');

        const otpSelect = form.querySelector('#otpvalue');
        const errorMessage = document.getElementById('error-message');
        var otpvalue = document.getElementById("otpvalue");
        var state = document.getElementById("state");
        var complaint_to = document.getElementById("complaint_to");
        // var email = document.getElementById("requested_by");
        var email = document.getElementById("email");

        if (!otpSelect.value) {
            errorMessage.textContent = 'Please Enter Otp.';
            errorMessage.style.color = 'red';
        } else {
            // if all filled correct show otp input and enter otp 
            //showOTP();
            var otp = otpvalue.value;
            var state = state.value;
            var complaint_to = complaint_to.value;
            var email = email.value;

            $.ajax({
                url: 'Ajax/email_otpverify.php',
                type: 'POST',
                data: {
                    OTP: otp,
                    STATE: state,
                    COMPLAINT: complaint_to,
                    EMAIL: email,
                },
                dataType: 'json', // Set dataType to 'json'
                success: function(response) {
                    // Handle the JSON response here
                    if (response.success) {
                        window.location.href =
                            'complaint_Details.php?success_message=Submit Compaint Details Here';
                    } else {

                        // In the error block of your AJAX request
                        window.location.href = 'complaint.php?success_message=Otp is Not Correct Please Fill Again Details To verify.';

                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX error
                }
            });


        }
    }
    </script>


    <div class="row combxlist mt-5">
        <div class="col-md-6 gy-2">
            <h3> Please read the following notes before lodging a complaint.</h3>
            <ul class="list-group list-group-flush mt-2">
                <li class="list-group-item">☞ Select Incident State.</li>
                <li class="list-group-item">☞ Where do you want to submit your complaint (Select NHRCCB).</li>
                <li class="list-group-item">☞ Verify your Email, through One Time Password(OTP).</li>
                <li class="list-group-item">☞ After successfully verification, fill all the mandatory fields on next screen.</li>
                <li class="list-group-item">☞ Click preview to finalize your complaint.</li>
                <li class="list-group-item">☞ Upload document, if required(PDF Only).</li>
                <li class="list-group-item">☞ Select whether do you want to show victim and complainant name on website or not.</li>
                <li class="list-group-item">☞ After successful submission, you will get a Complaint Number.</li>
                <li class="list-group-item">☞ Using this Domplaint Number, you can track your complaint status.</li>
                <li class="list-group-item">☞ Mandatory fields marked with (*) are mandatory to be field</li>
                <li class="list-group-item"></li>
            </ul>
        </div>
        <div class="col-md-6 mx-auto mt-3">
        <div class="card">
  <div class="card-header">
  NHRCCB
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <h6> Please read the following notes before lodging a complaint..</h6>
      <footer class="blockquote-footer">📞 9893151900 <cite title="Source Title">( NHRCCB HELPLINE )</cite></footer>
    </blockquote>
  </div>
</div>
           

        </div>
    </div>



</div>
</div>

<!-- --------------------- -->
</form>


<script>
function showOTP() {
var div = document.getElementById('OTPEnter');
div.style.display = 'block';

$(".hibtn").hide();
$(".shobtn").show();
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            </div>
        </div>
    </div>
</div>

@endsection

@section('frontend_script')

@endsection