<?php require( 'assets/php/getTemp.php' ); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Temperature|Humidity Monitor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

    var jsonData = <?php echo json_encode($table); ?>;

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);
      var options = {
		  'height':500
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>    
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
        </div>
      </div>
    </div>

    <div class="container">    
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6">		  	  
		  </div>
          </div>
          <div class="col-lg-6">
        </div>
      </div>
      
	  <div class="main" id="content">
	  	<div class="col-lg-4">
	  	</div>
	  	<div class="col-lg-4">
	  	  	<h3 style="text-align:center">Temperature Reading | RaspberryPi DHT11 </h3>
			  <table class="table table-striped table-hover">
				 
			      	
			  </table>
	  	</div>
	  	<div class="col-lg-4">
	  	</div>	  	
	  </div>
	 </div>
	 
	 <div class="container">
	  <div id="chart_div" style="width:100%"></div>
	 </div>
	 
	 <div class="container">
      <footer>
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
