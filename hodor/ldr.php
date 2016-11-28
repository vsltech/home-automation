<!DOCTYPE html>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>
<html lang="en">
<head>

  <title>H.O.D.O.R</title>
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			<!--Navigation header-->

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
  	<button type="button" class="navbar-toggle" 
  	data-toggle="collapse" data-target="#myNavBar">
  	<span class="icon-bar"></span>
  	<span class="icon-bar"></span>
  	<span class="icon-bar"></span>
  	</button>
  	<a class="navbar-brand" href="latest.html">H.O.D.O.R</a>
  </div>
  	<div class="collapse navbar-collapse" id="myNavBar">
  		<ul class="nav navbar-nav navbar-right">
  			<li><a href="index.html">Home</a></li>
  			<li class="dropdown">
  				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Automation
  				<span class="caret"></span></a>
  				<ul class="dropdown-menu">
            <li class="text-center"><a href="index.php">Living Room</a></li>
            <li class="text-center"><a href="temperature/temp">Temperature</a></li>
            <li class="text-center"><a href="soil.php">Plant</a></li>
            <li class="text-center"><a href="gas.php">Gas</a></li>
            <li class="text-center"><a href="ldr.php">Security</a></li>
            <li class="text-center"><a href="/cam/">Capture</a></li>
  				</ul>
  			</li>
  			<li class="dropdown">
  				<a class="dropdown-toggle" data-toggle="dropdown" href="#">About</a>
  			</li>
  			<li><a href="">Team</a></li>
  		</ul>
  	</div>
  </div>
 </nav>

<div class="jumbotron">
<div class="portfolio" id="portfolio">
  <div class="container">
    <h1 class="text-center">Home Automation</h1>
   	
	<font face="calibri">
		<div align="center">
		<img src="images/header.png" width="75" height="auto">
		
		<form method="post" action="ldr.php">
		<table>
			<tr><td align="center"><h2 class="text-center">Door Security- LDR Sensor</h2>
			    Monitoring your door in real-time</td>
			</tr>
		</table>
		<table style="text-align: left;" border=1>
			<tr>
				<td>
					<?php 
						system("gpio mode 25 in");
						exec("gpio read 25",$status);
						if($status[0]==0)
							echo '<img src="images/ldron.png" width=175px>';
							
						
						if($status[0]==1)
							echo '<img src="images/opendoor.jpg" width=175px>';
						
				   
					?>
				</td>
				<td align="center"><h4 class="text-center">Status:<?php	if($status[0]==1)	echo 'Idle!';
															if($status[0]==0)	echo 'Someone entered!';
													?></h4><br>
				<input class="btn btn-default" type="submit" id="status" name="status" value="Check">
				</td>
			</tr>		
		</table>
		</form>
	</div>
	</div>
	</div>
	<br><br><br><br>
		
