@extends('frontend.layout.app')

@section('frontend_content')



<div class="container" style="margin: 50px 20px;">
    <div class="row pb-4">
        <div class="col-sm-12 text-center">
            <h3>ACTIVE MEMBERSHIP FORM</h3>
        </div>
    </div>
    <center>
                <h3><span class="text-danger"></span></h3>
    </center>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12 col-lg-4 col-md-4 col-md-4">
                    <div class="form-group">
                                                <label>SELECT YOUR STATE *</label>
                        <select class="form-control state" name="state" required>
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
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="division">SELECT DIVISION</label>
                        <select class="form-control division" name="division" required></select>
                        <!--<input type="text" name="division" value="" class="form-control" placeholder="ENTER DIVISIONE" maxlength="20" style="text-transform: uppercase;" required>-->
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">SELECT DISTRICT</label>
                        <select class="form-control district" name="district" required></select>
                        <!--<input type="text" name="district" value="" class="form-control" placeholder="ENTER DISTRICT" maxlength="20" style="text-transform: uppercase;" required>-->
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">SELECT BLOCK (ASSEMBLY)</label>
                        <select class="form-control block" name="block" required></select>
                        <!--<input type="text" name="block" value="" class="form-control" placeholder="ENTER BLOCK" maxlength="20" style="text-transform: uppercase;" required>-->
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">POLICE STATION</label>
                        <input type="text" name="police_station" value="" class="form-control p-3" placeholder="ENTER POLICE STATION" maxlength="20" style="text-transform: uppercase;" required>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>SELECT WING</label>
                        <select class="form-control" name="team_according_age" required>
                            <option value="ACTIVE MEMBERSHIP" >
                                ACTIVE MEMBERSHIP</option>
                            <option value="ACTIVE MEMBERSHIP" >
                                ACTIVE MEMBERSHIP</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>SELECT LEVEL</label>
                        <select class="form-control" name="applying_for_team" required>
                            <option value="ACTIVE MEMBERSHIP" >
                                ACTIVE MEMBERSHIP</option>
                            <option value="ACTIVE MEMBERSHIP" >
                                ACTIVE MEMBERSHIP</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>SELECT DESIGNATION</label>
                        <select class="form-control" name="applying_for_post" required>
                            <option value="ACTIVE MEMBERSHIP" >
                                ACTIVE MEMBERSHIP</option>
                            <option value="ACTIVE MEMBERSHIP" >
                                ACTIVE MEMBERSHIP</option>
                        </select>
                    </div>
                </div>


                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">NAME (AS PER AADHAAR)</label>
                        <input type="text" name="name_as_aadhaar" pattern="[a-zA-Z\s]+" value="" class="form-control p-3" placeholder="NAME (AS PER AADHAAR)" maxlength="20" style="text-transform: uppercase;" required>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">FATHERS / HUSBANDS NAME</label>
                        <input type="text" name="father_husband" value="" class="form-control p-3" placeholder="FATHERS / HUSBANDS NAME" maxlength="20" style="text-transform: uppercase;" required>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>GENDER</label>
                        <select class="form-control" name="gender" required>
                            <option value="">GENDER</option>
                            <option value="MALE" >
                                MALE</option>
                            <option value="FEMALE" >
                                FEMALE</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">DATE OF BIRTH (DD/MM/YYYY)</label>
                        <input type="text" name="date_of_birth" value="" class="form-control p-3" id="dateformate" placeholder="DD/MM/YYYY" minlength="10" maxlength="10" style="text-transform: uppercase;" required>
                    </div>
                </div>
                                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>BLOOD GROUP</label>
                        <select class="form-control" name="blood" required>
                            <option value="">BLOOD GROUP</option>
                                                            <option value="A+" >
                                    A+</option>
                                                            <option value="A-" >
                                    A-</option>
                                                            <option value="B+" >
                                    B+</option>
                                                            <option value="B-" >
                                    B-</option>
                                                            <option value="O+" >
                                    O+</option>
                                                            <option value="O-" >
                                    O-</option>
                                                            <option value="AB+" >
                                    AB+</option>
                                                            <option value="AB-" >
                                    AB-</option>
                                                            <option value="NONE" >
                                    NONE</option>
                                                        <!-- <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="NONE">NONE</option> -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">ADDRESS</label>
                        <input type="text" name="full_address" value="" class="form-control p-3" placeholder="HOUSE NO./COLONY/VILLAGE/POST OFFICE" maxlength="30" style="text-transform: uppercase;" required>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">MOBILE NUMBER</label>
                        <input type="text" name="mobile_number" value="" class="form-control p-3" placeholder="MOBILE NUMBER" pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">WHATSAPP NUMBER</label>
                        <input type="text" name="whatsapp_number" value="" class="form-control p-3" placeholder="WHATSAPP NUMBER" pattern="[0-9]+" maxlength="10" minlength="10" onkeypress="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">EMAIL</label><span class="text-danger"></span>
                        <!-- <a class="reset-email cursor-pointer btn btn-info btn-small" style="float:right; padding:0px 12px; cursor: pointer; font-weight: bold">VERIFY</a> -->
                        <div class="row" style="margin-right: 0px;">
                            <!-- <div class="col-md-9 pl-0 pr-0"> -->
                            <input type="text" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" name="email" value="" class=" p-3 reset-email form-control" placeholder="EMAIL" style="text-transform: lowercase;" required>
                            <!-- </div> -->
                            <!-- <div class="col-md-3 pl-0 pr-0">
            <input type="number" name="isOTP" value="" required class="form-control email-otp" placeholder="Code" />
          </div> -->
                        </div>
                    </div>
                </div>
                                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>SELECT QUALIFICATION</label>
                        <select class="form-control" name="qualification" required>
                            <option value="">SELECT QUALIFICATION</option>
                                                            <option value="LITERATE" >
                                    LITERATE</option>
                                                            <option value="HIGH SCHOOL" >
                                    HIGH SCHOOL</option>
                                                            <option value="HIGHER SECONDARY" >
                                    HIGHER SECONDARY</option>
                                                            <option value="GRADUATION" >
                                    GRADUATION</option>
                                                            <option value="POST GRADUATION" >
                                    POST GRADUATION</option>
                                                        <!-- <option value="LITERATE">LITERATE</option>
          <option value="HIGH SCHOOL">HIGH SCHOOL</option>
          <option value="HIGHER SECONDARY">HIGHER SECONDARY</option>
          <option value="GRADUATION">GRADUATION</option>
          <option value="POST GRADUATION">POST GRADUATION</option> -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">CURRENT WORK</label>
                        <input type="text" name="current_work" value="" class="form-control p-3" placeholder="CURRENT WORK" style="text-transform: uppercase;" required>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">AADHAR NUMBER</label>
                        <input type="text" name="name_no_any_family" pattern="[0-9]+" minlength="12" maxlength="12" value="" class=" p-3 form-control" placeholder="AADHAR NUMBER" style="text-transform: uppercase;" required>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">PAN CARD NUMBER (OPTIONAL)</label>
                        <input type="text" name="pancard_number" minlength="10" maxlength="10" value="" class=" p-3 form-control" placeholder=" PAN CARD NUMBER" style="text-transform: uppercase;">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>ARE YOU MARRIED</label>
                        <select class="form-control" name="marrid_status" required>
                            <option value="">ARE YOU MARRIED</option>
                            <option value="YES" >
                                YES</option>
                            <option value="NO" >
                                NO</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>MEMBER OF ANY POLITICAL PARTY</label>
                        <select class="form-control" name="member_any_political_party" required>
                            <option value="">MEMBER OF ANY POLITICAL PARTY</option>
                            <option value="YES" >
                                YES</option>
                            <option value="NO" >
                                NO</option>

                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>MEMBER OF OTHER HUMAN RIGHTS ORGANIZATION</label>
                        <select class="form-control" name="member_of_social_organization" id="sel2" required>
                            <option value="">MEMBER OF SOCIAL ORGANIZATION</option>
                            <option value="YES" >
                                YES</option>
                            <option value="NO" >
                                NO</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>ANY COURT CASE</label>
                        <select class="form-control" id="sel1" name="any_court_case" required>
                            <option value="">ANY COURT CASE</option>
                            <option value="YES" >
                                YES</option>
                            <option value="NO" >
                                NO</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">RECOMMENDED BY ID NO. (NHRCCB/0000)</label>
                        <input type="text" class="form-control p-3" name="posting_officer" value="" placeholder="NHRCCB/0000" maxlength="11" style="text-transform: uppercase;" required onkeyup="checkInputLenght()">
                        <p id="idLengthError" style="color: red; display: none;">ID must be 11 characters long starting from
                            "NHRCCB/"</p>
                        <script>
                            function checkInputLenght() {
                                var posting_officer = $('input[name="posting_officer"]').val().length;
                                if (posting_officer < 11) {
                                    console.log(posting_officer);
                                    document.getElementById("idLengthError").style.display = "block";
                                } else {
                                    document.getElementById("idLengthError").style.display = "none";
                                }
                            }
                        </script>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4 hidden posting_officer_name_row">
                    <div class="form-group">
                        <label for="district">RECOMMENDER NAME</label>
                        <input type="text" readonly class=" p-3 form-control posting_officer_name">
                    </div>
                </div>
            </div><br><br>
            <!-- --------1---------- -->
            <div class="row">
              
                <!-- --------------------- -->
                <!-- ---------2--------- -->
                <div class="col-md-3">
                <div class="form-group">
    <label for="exampleFormControlFile1">Upload Adhar Card Front Side Only (JPG)</label>
    <input type="file" name="aadhaar_card_front_side" value="" accept=".jpg, .jpeg"  class="p-5 form-control-file" id="exampleFormControlFile1">
  </div> 
                    
                </div>
                <!-- --------------------- -->

                <!-- ---------3--------- -->
                <div class="col-md-3">
                <div class="form-group">
    <label for="exampleFormControlFile1">Upload Adhar Card Back Side Image Only (JPG)</label>
    <input type="file" name="aadhaar_card_back_side" value="" accept=".jpg, .jpeg"  class="p-5 form-control-file" id="exampleFormControlFile1">
  </div>    
                     
                </div>
                <!-- --------------------- -->

                <!-- ---------4--------- -->
                <div class="col-md-3">
                <div class="form-group">
    <label for="exampleFormControlFile1">PAN CARD (OPTIONAL)</label>
    <input type="file" name="marksheet" value="" accept=".jpg, .jpeg"  class="p-5 form-control-file" id="exampleFormControlFile1">
  </div>
                   
                </div>
                <!-- --------------------- -->

                <!-- ---------5--------- -->
                <div class="col-md-3">
                <div class="form-group">
    <label for="exampleFormControlFile1">Upload Other Document Image Only (JPG)</label>
    <input type="file" name="donation_slip" value="" accept=".jpg, .jpeg"  class="p-5 form-control-file" id="exampleFormControlFile1">
  </div>
                 
                               </div>
               
            </div><br><br>
            <!-- --------------------- -->


            <!--<div class="col-sm-12 col-lg-4 col-md-4">-->
            <!--    <div class="form-group">-->
            <!--      <label>DONATION AMOUNT DETAILS *</label>-->
            <!--      <select class="form-control"  name="donation_amount">-->
            <!--        <option selected="" value="0">DONATION AMOUNT DETAILS *</option>-->
            <!--        <option value="1127">1127</option>-->
            <!--        <option value="2151">2151</option>-->
            <!--        <option value="3174">3174</option>-->
            <!--        <option value="5223">5223</option>-->
            <!--        <option value="7270">7270</option>-->
            <!--        <option value="11265">11265</option>-->
            <!--        <option value="21504">21504</option>-->
            <!--      </select>-->
            <!--    </div>-->
            <!--  </div>-->

            <!-- 1100 -->

            <div class="row">
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">DONATION AMOUNT DETAILS *</label>
                        <input type="hidden" name="promo_discount" value="0" />
                        <input type="text" class="form-control p-3" name="due_amount" placeholder="DONATION AMOUNT" value="1100" readonly>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="form-group">
                        <label for="district">
                            PROMO CODE ?</label>
                        <span style="margin-left: 20px;" class="promoYesNo">
                            <label class="radio-inline">
                                <input type="radio" class="promo_code" name="promo_code" value="YES"> YES
                            </label>
                            <label class="radio-inline" style="margin-left:10px;">
                                <input type="radio" class="promo_code" name="promo_code" value="NO" checked> NO
                            </label>
                        </span>
                        <div style="margin-right:0px;margin-left:0px">
                            <div class="col-md-8 pl-0 pr-0">
                                <input type="text"  name="promocode" placeholder="PROMO CODE" maxlength="6" style="text-transform: uppercase;" readonly class=" p-3 form-control">
                            </div>
                            <!-- <div class="col-md-4 pl-0 pr-0 apply_promo_code_row" style="display:none">
                <a style="line-height: 25px;" class="btn btn-success btn-block apply_promo_code cursor-pointer">APPLY</a>
              </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="form-group" style="text-align: center;">
                    <button class="btn btn-success checksubmit" name="csubmit" type="submit">SUBMIT</button>
                </div>
            </div>
</div>

<!-- --------------------- -->
</form>

</div>
@endsection

@section('frontend_script')

@endsection