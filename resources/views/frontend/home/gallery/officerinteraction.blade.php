

@extends('frontend.layout.app')

@section('frontend_head')

<script>
  $(document).ready(function() {
    $(".dropdown").hover(
      function() {
        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
        $(this).toggleClass('open');
      },
      function() {
        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
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
    z-index: 2000;
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
    font-family: 'Comic Sans MS';
    font-size: small;
    line-height: 1.3em;
    color: #FF3300;
    background-color: #FFFFFF;
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
  .pagination a:hover:not(.active) {
    background-color: #ddd;
  }
</style>

@endsection


<!--<center>  <h1>Gallery</h1></center>-->





@section('frontend_content')

<div class="container">


  <h4 class="w3_agile_header mt-3 px-4">PUBLICATION SENT BY ( NHRCCB )</h4>
  <hr>

  <div id="image-gallery">
    <div class="row align-items-center justify-content-center">

      @if(!empty($officerinteraction))
      @foreach($officerinteraction as $offInt )
      <div class="col-lg-3 m-4 card col-md-6 col-sm-6 col-xs-12 faculty_grid">
        <div class="img-wrapper border rounded">
          <a href="">

            <img src="{{ asset('uploads/officerinteraction/'.$offInt->image)}}" alt="{{$offInt->title}}" class=" text-center">

          </a>
          <div></div>
          <div class="img-overlay">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
          </div>
        </div>
        <h6 class="m-3 text-center">{{$offInt->title}}</h6>
      </div>

      @endforeach
      @endif
    </div>
  </div>

  <hr>
  <hr>
  <div class="bottom_content mb-5">
    <h4 class="w3_agile_header px-5 mt-3">Document Section</h4>
    <hr>
    <div class="section-top-border">
      <div class="row">
        <div class="col-md-3 portfolio-left">
          <div class="offic-time">
            <iframe src="notification/image/gallery2/जागृति शिविर लेटर nhrccb-1.pdf" style="height:350px;"></iframe>
            <h6 style="text-align:center">Latter For Jail Visit NHRCCB MP</h6>
          </div>
        </div>
        <div class="col-md-3 portfolio-left">
          <div class="offic-time">
            <iframe src="notification/image/gallery2/WhatsApp Image 2023-08-07 at 7.32.07 PM.pdf" style="height:350px;"></iframe>
            <h6 style="text-align:center">NHRCCB Rajasthan</h6>
          </div>
        </div>
        <div class="col-md-3 portfolio-left">
          <div class="offic-time">
            <iframe src="notification/image/gallery2/Action taken report in respect of the Complaint against the “New Bipad-Vanjan Medical Stores and Polyclinic”.pdf" style="height:350px;"></iframe>
            <h6 style="text-align:center">NHRCCB WB</h6>
          </div>
        </div>
        <div class="col-md-3 portfolio-left">
          <div class="offic-time">
            <iframe src="notification/image/gallery2/nheccb cg.pdf" style="height:350px;"></iframe>
            <h6 style="text-align:center">nhrccb cg</h6>
          </div>
        </div>
        <div class="col-md-3 portfolio-left">
          <div class="offic-time">
            <iframe src="notification/image/gallery2/IMG-20230314-WA0054.pdf" style="height:350px;"></iframe>
            <h6 style="text-align:center">nhrccb assam</h6>
          </div>
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