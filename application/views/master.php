<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

		<title><?php echo $title;?></title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<!--external css-->
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	
		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-responsive.css" rel="stylesheet">
	</head>

	<body>

		<section id="container" >
			<!--header start-->
			<header class="header black-bg">
				<div class="sidebar-toggle-box">
					<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
				</div>
				<!--logo start-->
				<a href="<?php echo base_url();?>index.php/welcome/index" class="logo"><b>DASHGUM</b></a>
				<!--logo end-->
				<div class="top-menu">
					<!--<ul class="nav pull-right top-menu">
						<li><a class="logout" href="login.html">Logout</a></li>
					</ul>-->
				</div>
			</header>
			<div class="black-bg1">
				<!--sdfsf-->
			</div>
			<!--header end-->
      
			<!--sidebar start-->
			<aside>
				<div id="sidebar"  class="nav-collapse ">
					<!-- sidebar menu start-->
					<ul class="sidebar-menu" id="nav-accordion">
						<li>
							<a class="active" href="<?php echo base_url();?>index.php/welcome/index">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-desktop"></i>
								<span>UI Elements</span>
							</a>
							<ul class="sub">
								<li><a  href="general.php">General</a></li>
								<li><a  href="buttons.php">Buttons</a></li>
								<li><a  href="panels.php">Panels</a></li>
							</ul>
						</li>
					</ul>
					<!-- sidebar menu end-->
				</div>
			</aside>
			<!--sidebar end-->
      
			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<div class="row">
						<div class="col-lg-12 main-chart">
							<!-- 1st row-->
							<div class="row">
								<?php echo $maincontent;?>
							</div>
						</div><!-- /col-lg-9 END SECTION MIDDLE -->
					</div><! --/row -->
				</section>
			</section>
		</section>

		<!-- js placed at the end of the document so the pages load faster -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="js/jquery.scrollTo.min.js"></script>
		
		<!--common script for all pages-->
		<script src="js/common-scripts.js"></script>
		
	</body>
</html>
