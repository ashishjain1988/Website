<?php
//Set no caching
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$this->load->helper('html');
$this->load->helper('url');
if (!isset($_SESSION))
    session_start();

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
}
if (isset($_SESSION['role'])) {
    $role = $_SESSION['role'];
}
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ashish Jain</title>
        <link type='text/css' rel='stylesheet' href='<?php echo base_url(); ?>resources/css/bootstrap-theme.css' />
        <link type="text/css" rel="stylesheet" href='<?php echo base_url(); ?>resources/css/bootstrap-theme.min.css' />
        <link type="text/css" rel="stylesheet" href='<?php echo base_url(); ?>resources/css/bootstrap.css' />
        <link type="text/css" rel="stylesheet" href='<?php echo base_url(); ?>resources/css/bootstrap.min.css' />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-website.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.css" type="text/css" media="screen"/>

		<!-- Custom Fonts -->
		<link href="<?php echo base_url();?>resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    	
    	<!-- Theme CSS -->
        <link type="text/css" rel="stylesheet" href='<?php echo base_url(); ?>assets/css/freelancer.min.css' />
        
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
		<!-- <script src="<?php echo base_url(); ?>assets/js/custom-js.js"></script> -->
        <script src="<?php echo base_url(); ?>resources/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
       <!--  <script src="<?php echo base_url(); ?>resources/js/spinner-application.js"></script> -->

        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icon.jpg">
        <style type="text/css">
           body {
              height: 100%;
              padding: 0;
              margin: 0;
           }

           #app {
              min-height: 100% !important;
              height:100%;
  width:100%;
  overflow:hidden;
              
           }
			.width{
			width: 80%;
			}
			.aParent div {
  float: left;
  clear: none; 
}
           /* #footer {
              position: absolute;
              bottom: 0;
              background: red;
              height: 100px;
              width: 100%;
           } */

        </style>
    </head>
    <body>
    <!-- <div id="app"> -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="navigation">
				<li id="homeButton" class="page-scroll">
					<a href="<?php echo base_url();?>">Home</a>
				</li>
				<li id="researchButton" class="page-scroll">
					<a href="<?php echo base_url();?>index.php/research">Research Projects</a>
				</li>
				<li id="expButton" class="page-scroll">
					<a href="<?php echo base_url();?>index.php/experience">Experience</a>
				</li>
				<li id="softButton" class="page-scroll">
					<a href="<?php echo base_url();?>index.php/softwares">Softwares</a>
				</li>
				<li id="blogButton" class="page-scroll">
					<a href="<?php echo base_url();?>index.php/blog">Skills</a>
				</li>
				<!-- <li id="photoButton" class="page-scroll">
					<a href="<?php echo base_url();?>index.php/photography">Photography</a>
				</li> -->
				<li id="contactButton" class="page-scroll">
					<a href="<?php echo base_url();?>index.php/contact">Contact</a>
				</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>