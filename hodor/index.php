<!DOCTYPE html>
<html lang="en">
<head>

  <title>H.O.D.O.R</title>
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
  	<a class="navbar-brand" href="index.html">H.O.D.O.R</a>
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
  				<a class="dropdown-toggle" data-toggle="dropdown" href="about.html">About</a>
  			</li>
  			<li><a href="team.html">Team</a></li>
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
		
		<form method="post" action="index.php">
		<table>
			<tr><td><h2 class="text-center">Living Room</h2>
			    Please click on buttons to control your room</td>
			</tr>
		</table>
		<table style="text-align: left;" border=1>
			<tr>
				<td><img src="images/fan-off.png" width=40px>
					<?php 
						system("gpio mode 25 out");
						if(isset($_POST['off1']))
						{
							echo '<img src="images/fan-off.png" width=40px>';
							exec("gpio write 25 0");	
						}
						if(isset($_POST['on1']))
						{
							echo '<img src="images/fan-on.gif" width=40px>';
							exec("gpio write 25 1");
						}
				   
					?>
				</td>
				<td><h4 class="text-center">FAN1</h4><input class="btn btn-default" id="on1" type="submit" value="Turn on!"><br>
						 <input class="btn btn-default" type="submit" id="off1" value="Turn off!">
				</td>
				<td><img src="images/tube-off.png" width=40px>
					<?php 
						system("gpio mode 26 out");
						if(isset($_POST['off2']))
						{
							echo '<img src="images/tube-off.png" width=40px>';
							exec("gpio write 26 0");
						}
						if(isset($_POST['on2']))
						{
							echo '<img src="images/tube-on.gif" width=40px>';
							exec("gpio write 26 1");
						}
				    ?>
				</td>
				<td><h4 class="text-center">LIGHT1</h4><input class="btn btn-default" id="on2" type="submit" value="Turn on!"><br>
						   <input class="btn btn-default" type="submit" id="off2" value="Turn off!">
				</td>
			</tr>	
		
			<tr>
				<td><img src="images/fan-off.png" width=40px>
					<?php 
						system("gpio mode 28 out");
						if(isset($_POST['off3']))
						{
							echo '<img src="images/fan-off.png" width=40px>';
							exec("gpio write 28 0");	
						}
						if(isset($_POST['on3']))
						{
							echo '<img src="images/fan-on.gif" width=40px>';
							exec("gpio write 28 1");
						}
				     ?>
				</td>
				<td><h4 class="text-center">FAN2</h4><input class="btn btn-default" type="submit" id="on3" value="Turn on!"><br>
						 <input class="btn btn-default" type="submit" id="off3" value="Turn off!">
				</td>
				<td><img src="images/tube-off.png" width=40px>
					<?php 
						system("gpio mode 29 out");
						if(isset($_POST['off4']))
						{
							echo '<img src="images/tube-off.png" width=40px>';
							exec("gpio write 29 0");
						}
						if(isset($_POST['on4']))
						{
							echo '<img src="images/tube-on.gif" width=40px>';
							exec("gpio write 29 1");
						}
				    ?>
				</td>
				<td><h4 class="text-center">LIGHT2</h4><input class="btn btn-default" id="on4" type="submit" value="Turn on!"><br>
						   <input class="btn btn-default" type="submit" id="off4" value="Turn off!">
				</td>
			</tr>		
		</table>
		</form>
	</div>
	</div>
	</div>
	<br><br><br><br>
		