<?php session_start();?>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Bouve College of Health Sciences Online</title>
	
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="jquery-ui-1.11.2.custom/external/jquery/jquery.js"></script>
	
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	<link href="css/form8.css" rel="stylesheet">
	
	
	<style>
	#bs-example-navbar-collapse-1{
									float:right;
									font-family:"Verdana";
									margin-top:30px;
									margin-right:60px;
									line-space:20px;
									text-transform:"capitalize";
									
								}
								.wrapper{	height: auto;
											margin: auto;
											width: 1370;
											background-color:#fff;
										
										}
							
							
							#wrapper{	height: auto;
										
										background-color:#fff;
											
										}
							
										
									
							
							
</style>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">

<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <img src="http://www.northeastern.edu/bouve/assets/uploads/2014/05/bouve_logo.png" alt="Logo"/>
        </div>
        <div class = "collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="Home"><a href="Index.html">Home</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Online Programs</span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
					<li class="divider"></li>
					<li><a href="#">One more separated link</a></li>
				</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Class Login</span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Login to Blackboard</a></li>
					<li><a href="#">Login to SoftChalk</a></li>
					<li><a href="#">Login to Tegrity</a></li>
					<li><a href="#">Login to Wordpress</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Support</span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
					<li class="divider"></li>
					<li><a href="#">One more separated link</a></li>
				</ul>
			</li>
			<li><a href="#">About US</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<!--	<div class="col-md-7">-->
	<div id="page-content-wrapper">
          <!--  <div class="container-fluid">-->
                <div class="row">
                    <div class="col-lg-12" id="text">
                        <h1>Thank you</h1>
                        <p>Thank you <?php $_SESSION["firstname"] ?> for registering with us. Keep watching this space for more info.</p>
                        <a href="Index.html" class="btn btn-default" >Home</a>
                    </div>
					
                </div>
	 </div>
	<!-- /#page-content-wrapper -->
	 <!-- jQuery -->
   <script src="jquery-ui-1.11.2.custom/external/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    
	</body>
	</html>