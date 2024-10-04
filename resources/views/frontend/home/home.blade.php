@extends('frontend.layout.app')

@section('frontend_content')



         <!--Start of Slider Area-->
        
         <div class="slider-area bg-overlay  ">
                <div class="preview-2">
                    <div id="nivoslider" class="slides">
                 
                    @if(!empty($sliders))
         @foreach($sliders as $slider)
         <img src="{{ asset('uploads/slider/'.$slider->image)}}" alt="{{$slider->title}}" title="#{{$slider->id}}" />
                    @endforeach
                    @endif
                    
                    </div>
                    @if(!empty($sliders))
                    @foreach($sliders as $slider)
                    <div id="{{$slider->id}}" class="nivo-html-caption nivo-caption">
                        <div class="banner-content slider-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-content-wrapper">
                                            <div class="text-content text-center ">
                                                <!-- <h4 class="title2 capitalize text-white "
                                                    data-wow-duration="1000ms" data-wow-delay=".2s">Lorem ipsum dolor sit.</h4> -->
                                                <!-- <h2 class="yearText" data-wow-duration="1000ms" data-wow-delay=".2s">
                                                </h2> -->
                                                <div class="mb-2 bg-navy-op " data-wow-duration="2000ms"
                                                    data-wow-delay=".2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                 
                    
                </div>
            </div>
            <!--End of Slider Area-->

            <div class="service-area ministryArea py-5  memberbg  bg-1 bg-overlay-1 " style="padding: 20px 0px ;">
                <div class="container">
                    <div class="row " style="gap: 17px;">
                        <div class="col-md-3 col-sm-3 col-xs-12  welcome-text">
                            <h6>Welcome to NHRCCB</h6>
                            <h3>National Team Member</h3>
                        </div>
                       

                        @if(!empty($members))
                        @foreach($members as $member)

                        <div class="col-lg-2 col-sm-2 col-xs-12   minBox">
                            <a href="" target="_blank">
                                <center>
                                    <img src="{{ asset('uploads/members/'.$member->image)}}" class="img-responsive">
                                    <h5>{{$member->name}}</h5>
                                    <p>Hon'ble President of India, Visitor</p>
                                </center>
                            </a>
                        </div>
                    
                     @endforeach
                    @endif   

                    </div>
                </div>
            </div>


            <!---- Modal start here-->


            <!-- Button trigger modal class="btn btn-primary btn-lg"           -->


            <button type="button" id="mymodal" data-toggle="modal" data-target="#myModal">
                
                
            </button>

            <!-- Modal -->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                style="padding-right: 295px;">
                <div class="modal-dialog" role="document">
                    <center>
                        <div class="modal-content" style="width: 900px;align:center;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>

                                <!-- h4 class="modal-title" id="myModalLabel"><center><u>Swachhata Pakhwara</u></center></h4 -->

                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 modal-lg">
                                            <!-- h4 align="center"><font color="#093f8" font-size="12px" font-weight="800">Mass-Pledge against drug abuse under Nasha Mukt Bharat Abhiyaan</font></h4>
				<img src="images/events/MassPledge.jpeg" style="max-width:800px;height=600px;"></img><br -->
                                            <h3 align="center">
                                                <font color="#093f8" font-size="16px">Partition Horrors Remembrance Day
                                                    2024 Exhibition.</font>
                                            </h3>
                                            <img src="{{asset('frontend_assets/images/events/horrorpartition2024.jpg')}}" style="width:800px;"></img>
                                            <a href="" target="_blank">Click Here
                                                for More Details</a>

                                            <!-- h3 align="center"><font color="#093f8" font-size="16px">Har Ghar Tiranga.</font></h3>
				<img src="{{asset('frontend_assets/images/events/hargharTiranga09to15.jpeg')}}" style="width:800px;"></img -->


                                            <!-- p align="justify"><font color="#093f8" font-size="12px" font-weight="800">Dr. Ambedkar Centre of excellence 2023 Examination Result has been published.<is going to conduct the entrance exam on 27.11.2023 and Hall ticket download will commencement on 23.11.2023 from 3.00 PM onwards.></font></p -->
                                            <!-- img src="{{asset('frontend_assets/images/events/22May2024Programme.jpeg')}}" style="width:100%;max-width:1200px"></img -->

                                            <!-- a href="https://www.cug.ac.in/pdf/20231206073810d8ebe105f4.pdf" target="_blank">Click Here to View DACE 2023 2nd Merit List.</a><br -->

                                            <!-- a href="https://www.cug.ac.in/admission_redirect.php" target="_blank"><center><font color="red" size="5px"><b> CUET PG ADMISSION 2024-25</b><img src="images/new2.gif" width="45px" height="65px"></font></center></a><br -->
                                            <!--- a href="https://www.cug.ac.in/pdf/202311291233350b7d0475f4.pdf" target="_blank">Click Here to Download Affidavit format</a><br>
				<a href="https://www.cug.ac.in/pdf/2023112717135900e38ec586.pdf" target="_blank">Click Here to View DACE 2023 Examination Result</a>

			</div>
   		</div>

		<div class="row">
			<div class="col-md-12 modal-lg">
				<!-- p align="justify"><font color="#093f8" font-size="14px">Har Ghar Tiranga Yatra.</font></p>
				<img src="{{asset('frontend_assets/images/events/hargharTiranga2024.jpeg')}}" style="width:800px;"></img -->

                                            <!-- p align="justify"><font color="#093f8" font-size="12px">"Mera Maati Mera Desh" Amrit Kalas Yatra.</font></p -->
                                            <!-- img src="{{asset('frontend_assets/images/ElecCommisssion.jpg')}}" style="width:100%;"></img -->
                                        </div><br>
                                        <!-- div class="col-md-12 modal-lg">
				<img src="{{asset('frontend_assets/images/18042024poster.jpg')}}" style="width:100%;"></img>
			</div -->

                                    </div>

                                </div>

                            </div>
                        </div>
                </div>
                <!-- div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div -->
            </div>
            </center>
        </div>
    </div>

    <!-- script>
jQuery(document).ready(function(e) {
    jQuery('#mymodal').trigger('click');
});
</script -->

    <!---- Modal End here-->

    <div class="icon_section mainheader ">
        <div class="container">
           <div class="row">
            <div class="col-md-12 col-xs-12 text-center">
                <div class="convocationBox">
                    <a href="convocation.php" class="">WHAT IS NEW
                    <i class="fa fa-hand-o-right"></i>
                    </a>
                </div>
            </div>
        </div>

            <div class="row">
              


                <marquee  >
                    
                <font color="red" size="3px" style="padding-left: 10px;"><img src="{{asset('frontend_assets/images/new2.gif')}}" 
                width="45px" height="65px"/><strong>Lorem ipsum dolor sit, amet consectetur adipisicing
                     elit. Temporibus labore eligendi veritatis repellat nihil ab corporis numquam tem
                     pora totam nesciunt.</strong></font>
                     <font color="#093F89" size="3px"><b><a href="https://www.cug.ac.in/pdf/20220211131518806b9b7991.pdf" target="_blank"><img src="{{asset('frontend_assets/images/new2.gif')}}" width="45px" height="65px"/>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil at dolores molesti
                     as laudantium totam! Doloremque ad dolore modi voluptas.</a></b></font>
                    </marquee>

            </div>
        
        </div>
    </div>




    <div class="service-area mt-2 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="news_sectoin">
                        <marquee direction="left" scrollamount="10" scrolldelay="200" behavior="scroll"
                            onmouseover="this.stop();" onmouseout="this.start();">
                            <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                            <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          
                            <a href="0608062012" target="_blank">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, laboriosam consectetur obcaecati veniam velit dolorem.
                            </a>
                              <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                            <a href="pdf/2024053007144278d298a146.pdf" target="_blank">
                            अक्षर योजन उद्योग का एक साधारण डमी पाठ है </a>
                            <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                            <a href="pdf/20240120073654a0ae83fd02.pdf" target="_blank">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. </a>
                            <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                            <a href="pdf/20230417150602bb28d281bb.pdf" target="_blank">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. </a>
                            <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                            <a href="pdf/202212061139313bade785df.pdf" target="_blank">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus excepturi itaque mollitia blanditiis id iste dolorem voluptatem ut voluptas tenetur.. </a> - <a href="https://forms.gle/EwnxuB6ZwoViJhdE6"
                                target="_blank">
                                <span class="blue-text">Lorem, ipsum..</span>
                            </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                            <a href="https://youtu.be/-cyEaARx-ww" target="_blank">
                                Foundation Day Video. </a>
                            <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </marquee>
                    </div>
                </div>
            </div>
            <div class="row py-3 px-5 gap-4">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title mb-38">
                        <div class=" pull_left">
                            <img src="{{asset('frontend_assets/images/favicon/ico.png')}}" width="200px" height="200px" alt="">
                        </div>
                        <h2 class="uppercase mb-20">
                            <strong> National Human Rights and Crime Control Bureau (NHRCCB)</strong>
                        </h2>
                        <p class="pb-19 text-justify">National Human Rights and Crime Contr
                            ol Bureau (NHRCCB) is a Non Profit Organization or Voluntary Org
                            anization Incorporated under the Legislation Government of India. 
                            Registered in 2017 under Indian Trust Act- 1882 Government Of India
                             with Regn. No 483/2017. Registered with NITI AAYOG ,Government of I
                             ndia , United Nation Department Of Economics and Social Affairs ,Unit
                             ed Nation , 12A & 80G Under Department of Income Tax , Ministry of Fina
                             nce Government of India and CSR1 Under Ministry Of Corporate Affairs ,Gov
                             ernment of India.
                             No 483/2017. Registered with NITI AAYOG ,Government of I
                             ndia , United Nation Department Of Economics and Social Affairs ,Unit
                             ed Nation , 12A & 80G Under Department of Income Tax , Ministry of Fina
                             nce Government of India and CSR1 Under Ministry Of Corporate Affairs ,Gov
                             ernment of India.

                        </p>
                        <a href="about.php" class="theme-btn more">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="latest_section">
                        <h4 class="uppercase">Latest @NHRCCB
                            <a href="">View All</a>
                        </h4>
                        <div>
                            <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                onmouseover="this.stop();" height="160" onmouseout="this.start();">
                                <ul>
                                    <li>
                                        <a href="" target="_blank">
                                            <i class="fa fa-angle-right"></i>
                                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore necessitatibus quasi autem sunt molestiae optio consequuntur nobis architecto id culpa. </a>
                                        <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" />
                                    </li>
                                    <li>
                                        <a href="" target="_blank"><i
                                                class="fa fa-angle-right"></i>
                                                नीज्य मुखय हमारि रहारुप ढांचामात्रुभाषा उशकी मजबुत आवश्यकत व्रुद्धि </a>
                                        <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" />
                                    </li>
                                    <li>
                                        <a href="" target="_blank"><i
                                                class="fa fa-angle-right"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing. </a>
                                        <img src="{{asset('frontend_assets/images/new.gif')}}" alt="new image" />
                                    </li>
                                    <li>
                                        <a href="" target="_blank"><i
                                                class="fa fa-angle-right"></i>
                                         Lorem ipsum dolor sit amet consectetur. </a> - <a
                                            href="" target="_blank">
                                            <span>Lorem ipsum dolor sit amet.</span>
                                        </a>
                                    </li>
                                </ul>
                            </marquee>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>






    

    <div class="service-area pb-10 pt-30 advertise-area bg-1 bg-overlay-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-xs-12 mb-20">
                    <div class="cugCampus">
                        <h4>
                            <i class="fa fa-graduation-cap"></i> Gallery
                            <a href="">View All</a>
                        </h4>
                        <div class="row">
                        @if(!empty($Galleries))
                        @foreach($Galleries as $Gallery)

                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="icon-box hvr-grow">
                                    <center>
                                        <a class="" href="" target="_blank">
                                            <!-- <i class="fa fa-suitcase icn-box bg-light-blue"></i> -->
<img src="{{ asset('uploads/galleries/'.$Gallery->image)}}" alt="{{$Gallery->title}}" class="icn-box bg-light-blue text-center" >
                                            <h5 class="icon-box-text">{{$Gallery->title}}</h5>
                                        </a>
                                    </center>
                                </div>
                            </div>

                     @endforeach
                    @endif   
        

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-xs-12 mb-20">
                    <div class="cugCampus">
                        <h4>
                            <i class="fa fa-building"></i> Video
                            <a href=".php">View All</a>
                        </h4>
                        <div class="row">
                        @if(!empty($videos))
                        @foreach($videos as $video)

                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="icon-box hvr-grow">
                                    <center>
                                        <a class="" href=".php" target="_blank">
                                            <!-- <i class="fa fa-suitcase icn-box bg-light-blue"></i> -->
<img src="{{ asset('uploads/Videos/'.$video->image)}}" alt="{{$video->title}}" class="icn-box bg-light-blue text-center" >
                                            <h5 class="icon-box-text">{{$video->title}}</h5>
                                        </a>
                                    </center>
                                </div>
                            </div>

                     @endforeach
                    @endif   

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-xs-12 mb-20">
                    <div class="cugCampus">
                        <h4>
                            <i class="fa fa-user"></i> NEWS
                            <a href=".php">View All</a>
                        </h4>
                        <div class="row">
                        @if(!empty($news))
                        @foreach($news as $new)

                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="icon-box hvr-grow">
                                    <center>
                                        <a class="" href="
                                        .php" target="_blank">
                                            <!-- <i class="fa fa-suitcase icn-box bg-light-blue"></i> -->
<img src="{{ asset('uploads/news/'.$new->image)}}" alt="{{$new->title}}" class="icn-box bg-light-blue text-center" >
                                            <h5 class="icon-box-text">{{$new->title}}</h5>
                                        </a>
                                    </center>
                                </div>
                            </div>

                     @endforeach
                    @endif   




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <div class="property-area pt-30 bg-light pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-20">
                    <h3>What’s New</h3>
                </div>
                <div class="col-xl-3 col-md-3 mb-40">
                    <div class="single-property hover-effect-two">
                        <div class="property-image">
                            <a href=".php" class="block dark-hover"><img src="{{asset('frontend_assets/images/events.jpg')}}" alt="">
                                <span class="img-button text-uppercase">More Events</span>
                                <span class="p-tag bg-lemon">
                                    <i class="fa fa-calendar"></i> Events CUG</span>
                            </a>
                            <div class="events_link">
                                <ul>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-calendar"></i>
                                    Lorem ipsum dolor sit amet. </a>
                                    </li>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-calendar"></i>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique.. </a>
                                    </li>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-calendar"></i>
                                         Lorem ipsum dolor sit amet consectetur. </a> - <a
                                            href="https://drive.google.com/drive/u/0/folders/1Eakk7hIRSOkIAmkHuytDKuAj4lg-lbHA"
                                            target="_blank">
                                            <strong>More Details</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-calendar"></i>
                                           Lorem ipsum dolor sit amet consectetur adipisicing elit. </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-40">
                    <div class="single-property hover-effect-two">
                        <div class="property-image">
                            <a href=".php" class="block dark-hover"><img src="{{asset('frontend_assets/images/notification.jpg')}}"
                                    alt="">
                                <span class="img-button text-uppercase">View All</span>
                                <span class="p-tag bg-skyblue">
                                    <i class="fa fa-bullhorn"></i> Notification</span>
                            </a>
                            <div class="notification_link">
                                <ul>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-bullhorn"></i>
                                            Notice: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi.</a>

                                    </li>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-bullhorn"></i>
                                           Lorem ipsum dolor, sit amet consectetur adipisicing. </a>

                                    </li>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-bullhorn"></i>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure! </a>

                                    </li>
                                    <li>
                                        <a href="pdf/.pdf" target="_blank"><i
                                                class="fa fa-bullhorn"></i>
                                           Lorem ipsum dolor sit amet consectetur adipisicing elit. </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-40">
                    <div class="single-property hover-effect-two">
                        <div class="property-image">
                            <a href="" class="block dark-hover">
                                <img src="{{asset('frontend_assets/images/student.jpg')}}" alt="">

                                <span class="p-tag bg-green">
                                    <i class="fa fa-graduation-cap"></i> STUDENTS</span>
                            </a>
                            <div class="stdCorner_link">
                                <ul>
                                    <li><a href=".php"><i class="fa fa-graduation-cap"></i> Student
                                            Council Members</a></li>
                                    <li><a href=".php"><i class="fa fa-graduation-cap"></i> Non-NET
                                            Fellowship Guidelines</a></li>
                                    <li><a href="SHIP_OF_SCHEDULE_TRIBE_STUDENT.pdf"
                                            target="_blank"><i class="fa fa-graduation-cap"></i> Post Metric
                                            Scholarship</a></li>
                                    <li><a href=""><i class="fa fa-graduation-cap"></i> Registration</a>
                                        <ol class="sub_ol">
                                            <li>
                                                <a href=".php" target="_blank">
                                                    <i class="fa fa-angle-right"></i> SC/ ST/ OBC Complaint
                                                    Registration</a>
                                            </li>
                                            <!-- li>
                                            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLSfOtBLOb1tSNtunr3V3BimuzSz2-ziVzbp_bOH0R6KJiAhRlA/viewform?c=0&w=1&usp=send_form"
                                               target="_blank">
                                                <i class="fa fa-angle-right"></i> Registration for Knowledge E-Resource Center</a>
                                        </li -->
                                            <li>
                                                <a href="http://\.gov.in/" target="_blank">
                                                    <i class="fa fa-angle-right"></i> National Apprenticeship Training
                                                    Scheme (NATS)</a>
                                            </li>

                                        </ol>
                                    </li>
                                    <li><a href=".php" target="_blank"><i class="fa fa-graduation-cap"></i> CUG
                                            Hostel</a></li>
                                    <li><a href="intern_student_adv.php" target="_blank"><i
                                                class="fa fa-graduation-cap"></i> International Student's Advisor</a>
                                    </li>
                                    <li><a href=".php" target="_blank"><i class="fa fa-graduation-cap"></i> Central
                                          Lorem ipsum dolor sit amet consectetur.</a></li>
                                    <li><a href="https://sitw/cug-smc/home" target="_blank"><i
                                                class="fa fa-graduation-cap"></i> Stress Management Cell</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-40">
                    <div class="single-property hover-effect-two">
                        <div class="property-image">
                            <a href="" class="block dark-hover">
                                <img src="{{asset('frontend_assets/images/faculty.jpg')}}" alt="">

                                <span class="p-tag bg-black">
                                    <i class="fa fa-user"></i> FACULTY CORNER</span>
                            </a>
                            <div class="faculty_link">
                                <ul>
                                    <li>
                                        <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&redirect_uri=https%3A%2F%2Fwww.office.com%2Flanding&response_type=code%20id_token&scope=openid%20profile&response_mode=form_post&nonce=637480161689635858.NzZkNDQ4YTgtMGE2Yy00MTgyLWJhYmQtMzZlMjViMzJhMjA5YmQ0ODVlZDEtMzhhZC00NWI0LWIzMjQtOTJiNDYxZDQwYjBk&ui_locales=en-US&mkt=en-US&client-request-id=d09151a3-3282-4f42-bbbe-e7e1ec1e300d&state=IYGSQDtBXnLjOYWM4KI8pNMYwIMeGKc_2H3fGTSMIrqylPskHJYwJRFSwcxOEi4scYf4wbzbMwAoipDHP79jgK8DbfVjXmY0-aMSWFSRVeM8ReAsbSAFymAURwJEM7P6c554vDRjSl7Z69kR0FBUTlCUq9PDeP2nwb_PZ4Oc_rlQzgV8IWkbL8WY0-KuOo9hybVcH4JNSGLr7i0fcdzRrsBnkiYf7X2sWMOq9nwst0mKtw1feoQCHCGnHp72aJMsGFp2ogsbYaTToinVOFu-sg&x-client-SKU=ID_NETSTANDARD2_0&x-client-ver=6.8.0.0&sso_reload=true#"
                                            target="_blank">
                                            <i class="fa fa-user"></i> Faculty Login</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-user"></i> Achievements</a>
                                    </li>
                                    <li>
                                        <a href="apar.php">
                                            <i class="fa fa-user"></i> Faculty APAR Form</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start of Client area-->
    <div class="client-area ptb-10">
        <div class="container">
            <div class="row">
                <div class="client-carousel carousel-none">
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://.gov.in/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/1.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://www..gov.in/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/2.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://www..gov.in/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/3.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://www..in/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/4.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="http://.nic.in/aishe/home" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/5.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://ndl..ac.in/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/6.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://.ac.in/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/7.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://in/hi/rusa" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/8.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https:.in/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/9.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="https://wgov.in/hi" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/10.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-client block pt-7 pb-7">
                            <a href="httpsn/" target="_blank" class="block">
                                <span>
                                    <img src="{{asset('frontend_assets/images/client/11.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Client area-->

    <div class="socialMedia pt-20 pb-30 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-xs-12">
                    <div class="mb-30">
                        <h3 class="text-center"> Social media engagements</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-xs-12">
                    <div class="sc_twitterBox">
                        <h4 class="">
                            <i class="fa fa-twitter"></i> Twitter
                            <!-- span>1.5k</span -->
                        </h4>
                        <div>

                            <div class="tab-pane fade show active" id="nav-twitter" role="tabpanel"
                                aria-labelledby="nav-twitter-tab">
                                <a class="twitter-timeline" href=""
                                    data-lang="en" data-width="100%" data-height="400" data-dnt="true">Tweets by
                                    PROCUG1</a>
                                <script async src="https://" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-xs-12">
                    <div class="sc_facebookBox">
                        <h4 class="">
                            <i class="fa fa-facebook"></i> Facebook
                            <!-- span>1.5k</span -->
                        </h4>
                        <div>
                            <iframe name="f2201affd38375c" width="100%" height="2000px"
                                data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src=""
                                380px " class=" ">
                        </iframe>


                    </div>
                </div>
            </div>
            <div class=" col-xl-4 col-md-4 col-xs-12 ">
                <div class=" youtubehomeBox ">
                    <h4 class=" ">
                        <i class=" fa fa-youtube "></i> Youtube
                        <!-- span>1.5k</span -->
                    </h4>                  
                    <div>
                        <iframe width=" 100% " height=" 242 " src="
                                https://www.youtube.com/embed/watch?v=_FKa9H0SKow&list=UUaY7s0XStjanYIutf3MepTQ&index=1 " frameborder="
                                0 " allow=" autoplay; encrypted-media " allowfullscreen></iframe -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- For Twitter Account Starts Here   -->

<!-- div class=" socialMedia pt-20 pb-30 bg-light ">
    <div class=" container ">
        <div class=" row ">
            <div class=" col-xl-12 col-md-12 col-xs-12 ">
                <div class=" mb-30 ">
                    <h3 class=" text-center "> Social media engagements</h3>
                </div>
            </div>
            <div class=" col-xl-6 col-md-6 col-xs-12 ">
                <div class=" sc_twitterBox ">
                    <h4 class=" ">
                        <i class=" fa fa-twitter "></i> Vice-Chancellor Tweet
                    </h4>
                    <div>

                        <div class=" tab-pane fade show active " id=" nav-twitter " role=" tabpanel " aria-labelledby="
                                nav-twitter-tab ">
                                                        
                        <blockquote class=" twitter-tweet "><p lang=" en " dir=" ltr "><a href="
                                https://twitter.com/PROCUG1?ref_src=twsrc%5Etfw ">@PROCUG1</a> Dr. Ambedkar Centre for Excellence of Central University of Gujarat shall conduct an entrance test for nearly 1200 SC category students on 31st July 2022 for admission to free coaching for Civil Services Examinations. <a href="
                                https://t.co/IFjH2Qyow3 ">pic.twitter.com/IFjH2Qyow3</a></p>&mdash; Rama Shanker Dubey (@RamaShankerDub5) <a href="
                                https://twitter.com/RamaShankerDub5/status/1551769453599240192?ref_src=twsrc%5Etfw ">July 26, 2022</a></blockquote> <script async src="
                                https://platform.twitter.com/widgets.js " charset=" utf-8 "></script>
                                <script async src=" https://platform.twitter.com/widgets.js " charset=" utf-8 "></script>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-md-6 col-xs-12 ">
                <div class=" sc_facebookBox ">
                    <h4 class=" ">
                        <i class=" fa fa-facebook "></i> Facebook
                    </h4>
                    <div>
                        <iframe name=" f2201affd38375c " width=" 100% " height=" 2000px " data-testid=" fb:page
                                Facebook Social Plugin " title=" fb:page Facebook Social Plugin " frameborder="
                                0 " allowtransparency=" true " allowfullscreen=" true " scrolling=" no " allow="
                                encrypted-media " src="
                                https://www.facebook.com/v2.6/plugins/page.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df292267e9a7965%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff284e7fcaa250cc%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fcugadmin&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;tabs=timeline%2Cevents%2Cmessages&amp;width=380 " class=" ">
                        </iframe>


                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-md-6 col-xs-12 ">
                <div class=" youtubehomeBox ">
                    <h4 class=" ">
                        <i class=" fa fa-youtube "></i> Youtube
                </h4>                  
                     <div>
                         <iframe width=" 100% " height=" 242 " src="
                                https://www.youtube.com/embed/watch?v=_FKa9H0SKow&list=UUaY7s0XStjanYIutf3MepTQ&index=1 " frameborder="
                                0 " allow=" autoplay; encrypted-media " allowfullscreen></iframe>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div -->

 


@endsection

@section('frontend_script')

@endsection