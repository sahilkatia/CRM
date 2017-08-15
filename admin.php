<?php 
/** 
 * Charts 4 PHP 
 * 
 * @author Shani <support@chartphp.com> - http://www.chartphp.com 
 * @version 1.2.3 
 * @license: see license.txt included in package 
 */ 
  
include("marketingPichart.php"); 
include("salesLinechart.php");

?> 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CRM | Admin </title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="../crm/charts4php/lib/js/chartphp.css"> 
		 <style> 
		    /* white color data labels */ 
		    .jqplot-data-label{color:black;} 
	    </style> 
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/controller.js"></script>
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.7.0/lodash.min.js"></script>

	</head>
	<body>
		<div ng-app = "mainApp">
			<div class="container-fluidadmin">
				<div class="row">
					<nav class="navbar navbar-default navbar-static-top" role="navigation">
					  	<div class="container">
						    <div class="row">
							    <div class="col-md-3">
							    	<div class="navbar-text"><b>TEKCLASSES CRM</b></div>
							    </div>
							    <div class="col-md-6 warning">

									<script>
									  (function() {
									    var cx = '018062546711698852380:qsdtruz7wc8';
									    var gcse = document.createElement('script');
									    gcse.type = 'text/javascript';
									    gcse.async = true;
									    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
									    var s = document.getElementsByTagName('script')[0];
									    s.parentNode.insertBefore(gcse, s);
									  })();
									</script>
									<gcse:search>Search</gcse:search>
							
							    </div>
							    <div class="col-md-3">
							    	<a href="logout.php" class="pull-right btn btn-default navbar-btn">Logout</a>
							    	<div class="navbar-text pull-right">Welcome Admin</div>
							    </div>
						    </div>
					  	</div>
					</nav>
					<div class="container">
						<div class="col-md-2">
							<div class="list-group" id="navs">
								<a href="#dashboard" class="list-group-item">Dashboard</a>
					            <a href="#users" class="list-group-item">Users</a>
					            <a href="#courses" class="list-group-item images">Courses</a>
					            <a href="#leads" class="list-group-item images">Leads</a>
					            <a href="#setting" class="list-group-item images">Setting</a>
					        </div>
						</div>
						<div class="col-md-10">
							<div ng-view></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>