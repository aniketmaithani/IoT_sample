<?php
include 'php_serial.class.php';



$serial = new phpSerial;

$serial->deviceSet("/dev/ttyUSB0");

// We can change the baud rate, parity, length, stop bits, flow control
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");

// Then we need to open it
$serial->deviceOpen();

// To write into
$serial->sendMessage("0");


// If you want to change the configuration, the device must be closed
$serial->deviceClose();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Internet Of Things </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
		<center> LIGHTS OFF </center> 
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="#"> IOT : GVC SYSTEMS : </a>
        </div>
        <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p> Power of IOT : <a href="http://www.bootply.com/62603">Visit us at gvc.in</a></p>
  </footer>

</div><!-- /.container -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>