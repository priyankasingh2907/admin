@extends('frontend.layout.app')

@section('frontend_head')

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast"); 
            $(this).toggleClass('open');       
        }
    );
});
</script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.0/html2pdf.bundle.min.js"></script>

<style>
.whatsapp {
    position: fixed;
    right: 0px;
    top: 50%;
    z-index:2000;
}
.whatsapp h6 {
    color: white;
    background: #20b20f;
    padding: 10px;
    border-radius: 10px;
}
 .absolute {
      position: fixed;
    top: 212px;
    right: 0;
    width: 35px;
    
    background: #a85ed6;
    height: 90px;
    border: 3px solid #000000;
    z-index: 100;
        }
</style>
<style>
.GeneratedMarquee {
font-family:'Comic Sans MS';
font-size:small;
line-height:1.3em;
color:#FF3300;
background-color:#FFFFFF;
}
</style>
<style>

.img-wrapper {
  position: relative;
  margin-top: 15px;
}
.img-wrapper img {
  width: 100%;
  height: 180px;
}

.img-overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
}
.img-overlay i {
  color: #fff;
  font-size: 3em;
}

#overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
#overlay img {
  margin: 0;
  width: 80%;
  height: auto;
  -o-object-fit: contain;
     object-fit: contain;
  padding: 5%;
}
@media screen and (min-width: 768px) {
  #overlay img {
    width: 60%;
  }
}
@media screen and (min-width: 1200px) {
  #overlay img {
    width: 50%;
  }
}

#nextButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
}
#nextButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #nextButton {
    font-size: 3em;
  }
}

#prevButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
}
#prevButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #prevButton {
    font-size: 3em;
  }
}

#exitButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
  position: absolute;
  top: 15px;
  right: 15px;
}
#exitButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #exitButton {
    font-size: 3em;
  }
}
/* Pagination links */
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

@endsection


@section('frontend_content')

<div class="container">
 
             <h4 class="w3_agile_header mt-3 px-4">LETTER SENT BY NHRCCB</h4>
             <hr>
               <!--<center>  <h1>Gallery</h1></center>-->
    <div id="image-gallery">
      <div class="row align-items-center justify-content-center">
          
			         
        <div class="   col-lg-3   m-4 card     col-md-6 col-sm-6 col-xs-12 image ">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-08-06 at 4.11.01 PM.jpeg">
                <img src="notification/image/gallery2/WhatsApp Image 2023-08-06 at 4.11.01 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6 class="m-3">NHRCCB HARYANA Team</h6>
          </div>
        </div>
			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-07-01 at 4.28.42 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-07-01 at 4.28.42 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-30 at 11.00.37 AM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-30 at 11.00.37 AM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB MP</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-21 at 6.02.22 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-21 at 6.02.22 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB Assam Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-22 at 5.42.23 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-22 at 5.42.23 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB Assam Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-18 at 8.11.28 PM (2).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-18 at 8.11.28 PM (2).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB Assam Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-15 at 7.01.53 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-15 at 7.01.53 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB Rajasthan Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-12 at 10.13.23 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-12 at 10.13.23 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-08 at 4.44.30 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-08 at 4.44.30 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-04 at 4.26.19 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-04 at 4.26.19 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-06-03 at 1.46.18 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-06-03 at 1.46.18 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB Assam Team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/Screenshot (123).png"><img src="notification/image/gallery2/Screenshot (123).png" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB WB</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-05-14 at 5.11.05 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-05-14 at 5.11.05 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb haryana team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-05-10 at 1.50.26 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-05-10 at 1.50.26 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-05-09 at 2.49.50 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-05-09 at 2.49.50 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3"></h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/nishant thard 1.jpeg"><img src="notification/image/gallery2/nishant thard 1.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NISHANT THARD SIR 1</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/nishant thard 2.jpeg"><img src="notification/image/gallery2/nishant thard 2.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NISHANT THARD SIR 2</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/document-72_page-0001 (1).jpg"><img src="notification/image/gallery2/document-72_page-0001 (1).jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB GOLAGHAT</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-04-18 at 4.47.42 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-04-18 at 4.47.42 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB ASSAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-04-18 at 4.47.42 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-04-18 at 4.47.42 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB ASSAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-04-17 at 1.44.28 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-04-17 at 1.44.28 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB ASSAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-04-17 at 1.46.10 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-04-17 at 1.46.10 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB ASSAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-04-17 at 1.47.21 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-04-17 at 1.47.21 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB ASSAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-04-17 at 5.01.43 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-04-17 at 5.01.43 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB ASSAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/a6806d2b-ac39-47ae-a510-88311dbf723b.jfif"><img src="notification/image/gallery2/a6806d2b-ac39-47ae-a510-88311dbf723b.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/7fc595cb-acab-42b4-a768-7be2edaf5d6a.jfif"><img src="notification/image/gallery2/7fc595cb-acab-42b4-a768-7be2edaf5d6a.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3"></h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/5e27b59a-abae-48da-8edf-63245356996a.jfif"><img src="notification/image/gallery2/5e27b59a-abae-48da-8edf-63245356996a.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/225f7e36-48d0-4a4d-8ac8-20caf410e3ad.jfif"><img src="notification/image/gallery2/225f7e36-48d0-4a4d-8ac8-20caf410e3ad.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/2a39557a-e8fa-4836-8bce-8a51edf1de19.jfif"><img src="notification/image/gallery2/2a39557a-e8fa-4836-8bce-8a51edf1de19.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3"></h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/f4ec7843-5ab6-4b70-a0db-fa2ca794baf0.jfif"><img src="notification/image/gallery2/f4ec7843-5ab6-4b70-a0db-fa2ca794baf0.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3"></h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/f15ac9b0-f12b-41a1-a1e7-0dd778627fd4.jfif"><img src="notification/image/gallery2/f15ac9b0-f12b-41a1-a1e7-0dd778627fd4.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/f6e49cdd-2a63-4dca-94c9-c99bed5221b5.jfif"><img src="notification/image/gallery2/f6e49cdd-2a63-4dca-94c9-c99bed5221b5.jfif" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/c89c4b0b-c80f-4206-81e1-ba1032d8f7ba.jpg"><img src="notification/image/gallery2/c89c4b0b-c80f-4206-81e1-ba1032d8f7ba.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">nhrccb assam team</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/govt.jpg"><img src="notification/image/gallery2/govt.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3"></h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/3c0dbf27-197b-4a9d-bba7-2e1bb223cded.jpg"><img src="notification/image/gallery2/3c0dbf27-197b-4a9d-bba7-2e1bb223cded.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3"></h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-02-08 at 7.44.02 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-02-08 at 7.44.02 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">JHARKHAND</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/4930cdbb-0284-44cb-991b-fab54fabd0ce.jpg"><img src="notification/image/gallery2/4930cdbb-0284-44cb-991b-fab54fabd0ce.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">ASSAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-01-19 at 4.21.55 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-01-19 at 4.21.55 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-01-17 at 7.05.29 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-01-17 at 7.05.29 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">ANUP KUMAR</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/case No-22772(70)2022-2023_page-0001.jpg"><img src="notification/image/gallery2/case No-22772(70)2022-2023_page-0001.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">HUMANS RIGHTS COMMISSION UP 2</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-01-16 at 10.22.30 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-01-16 at 10.22.30 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">HUMANS RIGHTS COMMISSION UP 2</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2023-01-10 at 3.21.31 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2023-01-10 at 3.21.31 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">SHERAZ HUSSAIN</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/14dechhhhh.jpg"><img src="notification/image/gallery2/14dechhhhh.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">BASTAR</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/6e99af84-1099-441b-8599-98429f996cfb.jpg"><img src="notification/image/gallery2/6e99af84-1099-441b-8599-98429f996cfb.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB mp / latter</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-12-03 at 3.38.50 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-12-03 at 3.38.50 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">SP ARARIA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/photo_2022-11-17_10-26-43.jpg"><img src="notification/image/gallery2/photo_2022-11-17_10-26-43.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB TELANGANA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-10-07 at 9.38.03 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-10-07 at 9.38.03 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/307571403_1428325637658162_433224536959615264_n.jpg"><img src="notification/image/gallery2/307571403_1428325637658162_433224536959615264_n.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB CG</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-09-24 at 5.41.49 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-09-24 at 5.41.49 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB JHARKHAND</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-09-15 at 1.36.45 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-09-15 at 1.36.45 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB MP</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-09-15 at 1.34.48 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-09-15 at 1.34.48 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB MP</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/om prakash rathore.jpeg"><img src="notification/image/gallery2/om prakash rathore.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB MP (RANJIT SINGH TOMAR)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-31 at 4.38.59 PM (2).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-31 at 4.38.59 PM (2).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-31 at 4.38.59 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-31 at 4.38.59 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-31 at 4.38.59 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-31 at 4.38.59 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-31 at 3.53.33 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-31 at 3.53.33 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB HARYANA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/Letter to Dr. Randheer Kumar Ji, NHRCCB-1.jpg"><img src="notification/image/gallery2/Letter to Dr. Randheer Kumar Ji, NHRCCB-1.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">Letter to Dr. Randheer Kumar Ji, NHRCCB</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-21 at 6.55.14 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-21 at 6.55.14 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB NARSINGPUR (MP)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-21 at 6.55.12 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-21 at 6.55.12 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB NARSINGPUR (MP)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/BIBI SONI ARARIA BIHAR.jpg"><img src="notification/image/gallery2/BIBI SONI ARARIA BIHAR.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">SHRC BIHAR BY SANDEEP SIR</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-18 at 8.34.27 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-18 at 8.34.27 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB NARSINGPUR (MP)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/1_page-0001.jpg"><img src="notification/image/gallery2/1_page-0001.jpg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">SHRC UP (PRAYAGRAJ CASE) BY SANDEEP KUMAR</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 9.16.12 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 9.16.12 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">HON SMRITI IRANI MADAM</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.22.07 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.22.07 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">HON MANGUBHAI PATEL (GOVR MP)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.21.09 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.21.09 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">HON ARVIND KEJRIWAL (CM DELHI)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.04 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.04 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">DR RANDHIR KUMAR</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.04 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.04 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">BHUWANESHWAR PD MEHTO</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.03 PM (2).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.03 PM (2).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">MANGUBHAI PATEL (GOVR OF MP)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.03 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.03 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">JUSTICE M M KUMAR</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.03 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.03 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">HON AJIT KUMAR SINHA (RANCHI UNI)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.02 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.02 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">DYANESHWAR MAHOHAR MULAY (NHRC)</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.02 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-08-05 at 5.15.02 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">HANI SINHA</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-07-17 at 5.51.36 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-07-17 at 5.51.36 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB MP</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-07-17 at 5.51.36 PM (1).jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-07-17 at 5.51.36 PM (1).jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NHRCCB MP</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-06-21 at 3.15.38 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-06-21 at 3.15.38 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NARSINGPUR (MP)	</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-06-24 at 4.07.57 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-06-24 at 4.07.57 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NARSINGPUR (MP)	</h6>
          </div>
        </div>

			       
        <div class="   col-lg-3   m-4  card     col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper border rounded ">
            <a href="notification/image/gallery2/WhatsApp Image 2022-06-22 at 1.36.36 PM.jpeg"><img src="notification/image/gallery2/WhatsApp Image 2022-06-22 at 1.36.36 PM.jpeg" class="img-responsive rounded "></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <div style="text-align:center;margin-top:8px;">
              <h6  class="m-3">NARSINGPUR (MP)</h6>
          </div>
        </div>

			        
        
     
    </div><!-- End image gallery -->
    </div>
<hr><hr>
	   <div class="bottom_content mb-5">
             <h4 class="w3_agile_header px-5 mt-3">ACTION TAKEN BY DEPARTMENT</h4>
             <hr>
            <div class="section-top-border">
                <div class="row">
                        <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/जागृति शिविर लेटर nhrccb-1.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">Latter For Jail Visit NHRCCB MP</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/WhatsApp Image 2023-08-07 at 7.32.07 PM.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NHRCCB Rajasthan</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/Action taken report in respect of the Complaint against the “New Bipad-Vanjan Medical Stores and Polyclinic”.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NHRCCB WB</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/nheccb cg.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">nhrccb  cg</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/IMG-20230314-WA0054.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">nhrccb assam</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/shrithi grievance letter.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">srishti d soni govt of mp</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/Reply iro the petition submitted before the NHRCCB dtd 18.11.22 West Midnapore DIst. President icw grievance petition of Sri swarup Faras under Balichak CCC against alleged delay in providing new electric.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">nhrccb wb</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/DOC-20221128-WA0014..pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">nhrccb wb</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/1.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">LETTER BY SHERAZ HUSSAIN</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/1.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">RTI BY SANDEEP SIR</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/new doc 2022-06-13 11.01.09.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NHRCCB WB</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/HON PRESIDENT OF INDIA.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">HON PRESIDENT OF INDIA</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/DOC-20221128-WA0014..pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NHRCCB WB</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/Director General of Income Tax (Systems) ,New Delhi DGITSRT2201025.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">INCOME TAX DEPARTMENT VS SANDEEP KUMAR RTI</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/ReplyDocument.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NCW - SANDEEP KUMAR</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/Soviner 2022_FINAL.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">SOUVENIR INTERNATIONAL CONVENTION ON HUMAN RIGHTS 2022 </h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/PROSPECTUS 2022 FINAL.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NHRCCB PROSPECTUS 2022 </h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/BIBI SONI ARARIA BIHAR.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">HRC BIHAR BY SANDEEP SIR</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/Case Details.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">SHRC UP (PRAYAGRAJ CASE) BY SANDEEP KUMAR </h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/CHIEF MEDICAL OFFICER WEST BURDHMAN (WB)-01.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NHRCCB WEST BENGAL</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/MINISTRY OF HOME AFFAIRS.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">MINISTRY OF HOME AFFAIRS</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/WhatsApp Image 2022-06-21 at 3.15.39 PM.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NARSINGPUR (MP)</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/NARSINGPUR (MP).pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NARSINGPUR (MP)</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/WhatsApp Image 2022-05-25 at 11.52.44 AM.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">Letter from Collector office Paschim Burdwan</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/8c58c9f5-cb55-4e8d-ac2b-f057de381c86.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">TELANGANA</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/IMG-20191001-WA0002.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">FOOD DEPARTMENT GOVT OF JHARKHAND</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/IMG-20191001-WA0001.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">SHRC JH</h6>
                          </div>
                      </div>	
                                            <div class="col-md-3 portfolio-left">
                          <div class="offic-time">
                              <iframe src="notification/image/gallery2/New Doc 2022-02-16 14.53.37.pdf"style="height:350px;"></iframe>
                                    <h6 style="text-align:center">NHRCCB MAHARASHTRA</h6>
                          </div>
                      </div>	
                                     </div>
            </div>
      </div>

</div>
@endsection

@section('frontend_script')


<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>




<!-- <script type="text/javascript" src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

    <script type="text/javascript">
      $(document).ready( function () {
          $('#myTable2').DataTable();
      } );
    </script> -->

<script>
// Gallery image hover
$(".img-wrapper").hover(
    function() {
        $(this).find(".img-overlay").animate({
            opacity: 1
        }, 600);
    },
    function() {
        $(this).find(".img-overlay").animate({
            opacity: 0
        }, 600);
    }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
    // Prevents default behavior
    event.preventDefault();
    // Adds href attribute to variable
    var imageLocation = $(this).prev().attr("href");
    // Add the image src to $image
    $image.attr("src", imageLocation);
    // Fade in the overlay
    $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
    // Fade out the overlay
    $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
    // Hide the current image
    $("#overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").next().find("img"));
    // All of the images in the gallery
    var $images = $("#image-gallery img");
    // If there is a next image
    if ($nextImg.length > 0) {
        // Fade in the next image
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    } else {
        // Otherwise fade in the first image
        $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
    }
    // Prevents overlay from being hidden
    event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
    // Hide the current image
    $("#overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").prev().find("img"));
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    // Prevents overlay from being hidden
    event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
    // Fade out the overlay
    $("#overlay").fadeOut("slow");
});
</script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/64d5f94a94cf5d49dc69c3ca/1h7htbjul';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
// 
</script>
@endsection