@extends('frontend.layout.app')

@section('frontend_content')

<div class="container">
    <div class="row">
        
			<div id="page-wrapper" class="row calender widget-shadow shadow border-1 p-4"  style="margin-top: 50px; margin-bottom: 50px !important;">
               <div id="" class="container-fluid">         
                          <!-- Your yearly dropdown code goes here -->
   

        <form method="POST" action="">
        <div class="input-group date">
            <div class="date-container" style="display: flex;">
                <!--<input type="text" class="form-control" id="yearlyCalendar" name="year" onmouseover="showDatepicker()" required>-->
             
                <select id="yearlyCalendar" name="yearlyCalendar"  class="form-control " style="    max-width: 200px; margin-right: 7px;">
                    <option style="width: 100px;" value="2023">All</option>
                    <option value="2023">2023</option>
                </select>
               
                 
                <div class="input-group-append"> <!-- Add a wrapper div to apply spacing -->
            <button class="btn btn-sm btn-info" type="submit" name="yearlydata">Search Yearly</button>
        </div> 

            </div>
         </form>
    </div>
    <hr>
                            <!-- Your yearly dropdown code goes here -->
					<div class="main-page">
                        
						<div class="row" style="margin-bottom: 20px;">
							<div class="col-md-2">
								<div class="bx_dashbx ">

									<h1 id="pendingCount"></h1>
									<h5>PENDING COMPLAINT</h5>
								</div>
							</div>
								<div class="col-md-2">
								<div class="bx_dashbx bod4">
									<h1 id="totalCount"></h1>
									<h5>TOTAL COMPLAINT</h5>
								</div>
							</div>
							<div class="col-md-3">
								<div class="bx_dashbx bod2">
									<h1 id="childAgeCount"></h1>
									<h5>Child Complaint</h5>
								</div>
							</div>
							<div class="col-md-3">
								<div class="bx_dashbx bod3">
									<h1 id="femaleCount"></h1>
									<h5>Women Complaint</h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="child_rightid"></h1>
									<h5>CHILD RIGHT</h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="cybercrime_id"></h1>
									<h5>CYBER CRIME</h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="free_legailaid"></h1>
									<h5>FREE LEGAL AID</h5>
								</div>
							</div>
							
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="FUNDAMENTAL_RIGHTS"></h1>
									<h5>FUNDAMENTAL RIGHTS</h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="LABOR_RIGHTS"></h1>
									<h5>LABOR RIGHTS </h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="PENSIONERS_RIGHTS"></h1>
									<h5>PENSIONERS RIGHTS</h5>
								</div>
							</div>
							
		                     
		                     <div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="RIGHTTO_INFORMATION"></h1>
									<h5>RIGHT TO INFORMATION</h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="RIGHT_TO_PRIVACY"></h1>
									<h5>RIGHT TO PRIVACY </h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="SCHEDULECAST_RIGHTS"></h1>
									<h5>SCHEDULECAST RIGHTS</h5>
								</div>
							</div>
							
							    <div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="SCHEDULEDTRIBES_RIGHTS"></h1>
									<h5>SCHEDULED TRIBES RIGHTS</h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="TRANSGENDER_RIGHTS"></h1>
									<h5>TRANSGENDER RIGHTS </h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="WOMEN_RIGHTS"></h1>
									<h5>WOMEN RIGHTS</h5>
								</div>
							</div>
							
								    <div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="HUMAN_RIGHTS"></h1>
									<h5>HUMAN RIGHTS</h5>
								</div>
							</div>
							<div class="col-md-2">
								<div class="bx_dashbx bod3">
									<h1 id="OTHER"></h1>
									<h5>OTHER </h5>
								</div>
							</div>
						</div>
                        
					</div>
                    
 					
                    <div class="row">
       <div class="col-md-8 d-flex justify-content-center">
        
        <div id="live-poll-area">
            <div class="graph-container">
                <div class="graph"></div>
            </div>
            <div class="answer-list"></div>
             
        </div>
        
    </div>
                
</div>
 

					<div class="clearfix mb-10"> </div>
	</div>

				</div>
				<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
   
    var yearlyCalendar = $('#yearlyCalendar').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true, 
    });

   
    yearlyCalendar.datepicker('hide');
});

function showDatepicker() {
    var yearlyCalendar = $('#yearlyCalendar');
    yearlyCalendar.datepicker('show');
}

</script>
<script>

let isSecondClick = false;

     $('form').submit(function (e) {
        e.preventDefault();
        const selectedYear = $('#yearlyCalendar').val();
                    // Clear the previous values in the elements
            $('#pendingCount').text('');
            $('#totalCount').text('');
            
              $('#live-poll-area .answer-list').empty(); // Clear the chart
    $('#live-poll-area .graph-container .graph').hide();
             
             
        
        $.ajax({
            type: 'POST',
            url: 'Ajax/complaintData.php',
            data: { yearlyData: true, selectedYear: selectedYear },
            success: function (data) {
                var response = JSON.parse(data);
                
                   $('#pendingCount').text(response.pendingCount);
              //  $('#totalCount').text(response.totalCount);
               // console.log(response.pendingCount);
                  $('#child_rightid').text(response.child_right);
                $('#cybercrime_id').text(response.cyber_crime);
                $('#free_legailaid').text(response.freelegalaid_count);
                
                   $('#FUNDAMENTAL_RIGHTS').text(response.FUNDAMENTAL_RIGHTS);
                $('#LABOR_RIGHTS').text(response.LABOR_RIGHTS);
                $('#PENSIONERS_RIGHTS').text(response.PENSIONERS_RIGHTS);
                $('#RIGHTTO_INFORMATION').text(response.RIGHTTO_INFORMATION);
                   $('#RIGHT_TO_PRIVACY').text(response.RIGHT_TO_PRIVACY);
                $('#SCHEDULECAST_RIGHTS').text(response.SCHEDULECAST_RIGHTS);
                $('#SCHEDULEDTRIBES_RIGHTS').text(response.SCHEDULEDTRIBES_RIGHTS);
                $('#TRANSGENDER_RIGHTS').text(response.TRANSGENDER_RIGHTS);
                    $('#WOMEN_RIGHTS').text(response.WOMEN_RIGHTS);
                $('#HUMAN_RIGHTS').text(response.HUMAN_RIGHTS);
                $('#OTHER').text(response.OTHER);
                $('#totalCount').text(response.totalCount);
                     if (isSecondClick) {
                // If it's the second click, refresh the page
                location.reload();
            } else {
                // If it's the first click, set isSecondClick to true
                isSecondClick = true;
                updateValuesAndChart(response);
            }
                
            }
        });
    });
    
    
    
$(document).ready(function () {

    function loadAllData() {
        $.ajax({
            type: 'POST',
            url: 'Ajax/complaintData.php', 
            data: { allData: true }, 
            success: function (data) {
                 console.log(data); // 
                var response = JSON.parse(data);

                $('#pendingCount').text(response.pendingCount);
                $('#child_rightid').text(response.child_right);
                $('#cybercrime_id').text(response.cyber_crime);
                $('#free_legailaid').text(response.freelegalaid_count);
                
                   $('#FUNDAMENTAL_RIGHTS').text(response.FUNDAMENTAL_RIGHTS);
                $('#LABOR_RIGHTS').text(response.LABOR_RIGHTS);
                $('#PENSIONERS_RIGHTS').text(response.PENSIONERS_RIGHTS);
                $('#RIGHTTO_INFORMATION').text(response.RIGHTTO_INFORMATION);
                   $('#RIGHT_TO_PRIVACY').text(response.RIGHT_TO_PRIVACY);
                $('#SCHEDULECAST_RIGHTS').text(response.SCHEDULECAST_RIGHTS);
                $('#SCHEDULEDTRIBES_RIGHTS').text(response.SCHEDULEDTRIBES_RIGHTS);
                $('#TRANSGENDER_RIGHTS').text(response.TRANSGENDER_RIGHTS);
                    $('#WOMEN_RIGHTS').text(response.WOMEN_RIGHTS);
                $('#HUMAN_RIGHTS').text(response.HUMAN_RIGHTS);
                $('#OTHER').text(response.OTHER);
                $('#totalCount').text(response.totalCount);
               // console.log(response.pendingCount);
                updateValuesAndChart(response);
            }
        });
    }
    
    loadAllData();
});
</script>


<script>

 function updateValuesAndChart(response) { 
     
      $('#live-poll-area .graph-container .graph').show();
         
    // const pendingCount = 1;
    // const femaleCount = 1;
    // const childAgeCount = 1;
    // const totalCount = 1;
        const pendingCount = response.pendingCount;
    // const femaleCount = response.femaleCount;
   // const childAgeCount = response.childAgeCount;
    const totalCount = response.totalCount;
    
    const percentageArray = [
        (pendingCount / totalCount) * 100,
     //   (childAgeCount / totalCount) * 100,
      //  (femaleCount / totalCount) * 100,
        (totalCount / totalCount) * 100 // Total percentage
    ];
    const answerArray = ['Pending Complaint', 'Total Complaint'];

    $.fn.createBarchart = function(optionvariables) {
        var chartContainer = $(this);
        var defaults = {
            'maxWidth': 244
        };
        var options = $.extend({}, defaults, optionvariables);
        var self = $(this),
            graphContainer = self.parent().find('.graph-container .graph'),
            barChart = $('<ul/>', {
                class: 'bar-chart'
            });

        barChart.appendTo(chartContainer);

        $.each(answerArray, function(index, value) {
            var chartAnswer = $('<li/>', {
                    class: 'answer-' + index
                }),
                answerLabel = $('<span/>', {
                    class: 'label',
                    text: value
                }),
                percentageValue = percentageArray[index].toFixed(2),
                formattedPercentage = percentageValue.replace(',', '.'),
                answerPercentage = $('<span/>', {
                    class: 'percentage',
                    text: formattedPercentage + '%'
                }),
                barTrack = $('<span/>', {
                    class: 'bar-track'
                }),
                bar = $('<span />', {
                    class: 'bar',
                    style: 'width: ' + percentageValue + '%;'
                });

            chartAnswer.appendTo(barChart);
            answerLabel.appendTo(chartAnswer);
            answerPercentage.appendTo(chartAnswer);
            barTrack.appendTo(chartAnswer);
            bar.appendTo(barTrack);
        });

        barChart.chart({
            graphContainer: graphContainer
        });
    };

    $.fn.chart = function(optionvariables) {
        var chart = $(this);
        var defaults = {
            'canvasSize': 220,
            'graphContainer': $('.graph-container .graph')
        };
        var options = $.extend({}, defaults, optionvariables);

        return chart.each(function() {
            var listItem = chart.find('li'),
                listItems = listItem.length,
                canvas = document.createElement('canvas'),
                canvasWidth = options.canvasSize,
                canvasHeight = options.canvasSize,
                graphContainer = options.graphContainer,
                total = 0,
                totalPercentage = 0,
                data = [],
                newData = [],
                i = 0,
                startingAngle,
                arcSize,
                endingAngle;

            newData = percentageArray;

            function sumTo(a, i) {
                var sum = 0;
                for (var j = 0; j < i; j++) {
                    sum += a[j];
                }
                return sum - 90;
            }

            function degreesToRadians(degrees) {
                return ((degrees * Math.PI) / 180);
            }
            canvas.setAttribute('width', canvasWidth);
            canvas.setAttribute('height', canvasHeight);
            canvas.setAttribute('id', 'chartCanvas');
            graphContainer.append(canvas);

            var cvs = document.getElementById('chartCanvas'),
                ctx = cvs.getContext('2d'),
                centerX = canvasWidth / 2,
                centerY = canvasHeight / 2,
                radius = canvasWidth / 2;

            ctx.clearRect(0, 0, canvasWidth, canvasHeight);

            listItem.each(function(e) {
                startingAngle = degreesToRadians(sumTo(newData, i));
                arcSize = degreesToRadians(newData[i]);
                endingAngle = startingAngle + arcSize;
                ctx.beginPath();
                ctx.moveTo(centerX, centerY);
                ctx.arc(centerX, centerY, radius, startingAngle, endingAngle, false);
                ctx.closePath();
                ctx.fillStyle = $(this).find('.bar').css('backgroundColor');
                ctx.fill();
                ctx.restore();
                i++;
            });

            ctx.beginPath();
            ctx.moveTo(centerX, centerY);
            ctx.arc(centerX, centerY, radius * .45, 0, 2 * Math.PI, false);
            ctx.closePath();
            ctx.fillStyle = $('body').css('backgroundColor');
            ctx.fill();
        });
    };


    $('#live-poll-area .answer-list').createBarchart(); 
    var xValues = ["Pending Complaint",  "Total complaint"];
var yValues = [81, 9, 9,100];
var barColors = [
  "hsl(339.01deg 100% 39.8%)",
//  "hsl(100deg 46.44% 53.14%)",
  //"hsl(2.11deg 83.41% 59.8%)",
  "hsl(325.85deg 90.28% 28.24%)",
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: ""
    }
  }
});
    
     }
    </script>
</script>



    </div>
</div>
@endsection

@section('frontend_script')

@endsection