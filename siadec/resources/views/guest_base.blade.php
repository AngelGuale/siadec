<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SIADEC | Automatic Identification of Shrimp disease Service</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('/novus_admin/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('/novus_admin/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="{{ asset('/novus_admin/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('font-icons.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{ asset('/novus_admin/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('/novus_admin/js/modernizr.custom.js') }}"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<!--//webfonts--> 
<!--animate-->
<link href="{{ asset('/novus_admin/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('/novus_admin/js/wow.min.js') }}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!--skycons-icons-->
<script src="{{ asset('/novus_admin/js/skycons.js') }}"></script>
<!--//skycons-icons-->
<!--circlechart-->
<script src="{{ asset('/novus_admin/js/jquery.circlechart.js') }}"></script>
<!--circlechart-->
<!-- Metis Menu -->
<script src="{{ asset('/novus_admin/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('/novus_admin/js/custom.js') }}"></script>
<link href="{{ asset('/novus_admin/css/custom.css') }}" rel="stylesheet">
<!--//Metis Menu -->

<style>
	.circular {
		height: 100px;
		width: 100px;
		border-radius: 150px;
		-webkit-border-radius: 150px;
		-moz-border-radius: 150px;
		box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	}
	.auth-links-guest{
		height:100%;


	}
</style>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <!-- <div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left cbp-spmenu-open" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="/"><i class="fa fa-home nav_icon"></i>Home</a>
						</li> -->
						<!--<li>
							<a href="/login"><i class="fa fa-user nav_icon"></i>Iniciar Sesion</a>
						</li>
						<li>
							<a href="/signup"><i class="fa fa-file-o nav_icon"></i>Registrarse</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				<!-- </nav>
			</div>
		</div> -->
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section col-sm-12 col-md-12 col-lg-12">
			<div class="header-left col-sm-10 col-md-10 col-lg-10">
				<!--toggle button start-->
				<!--logo -->
				<div class="logo col-sm-2 col-md-2 col-lg-2" id="logoPlacement">
					<a href="/">
						<h1>SIADEC</h1>
						<span style="padding-left:.7em !important;">Guest</span>
					</a>
				</div>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<div class="auth-links-guest header-right col-sm-2 col-md-2 col-lg-2">
				<div class="profile_details_left"><!--notifications of menu start -->
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="auth-links-guest profile_details col-sm-12 col-md-12 col-lg-12">		
					<a href="/login" class="dropdown-toggle col-sm-6 col-md-6 col-lg-6" align="center">
						<div class="profile_img">	
							<div class="user-name">
								<p>User Login</p>
							</div>
						</div>
					</a>
					<a href="/signup" class="dropdown-toggle col-sm-6 col-md-6 col-lg-6" align="center">
						<div class="profile_img">
							<div class="user-name">
								<p>Signup</p>
							</div>
						</div>
					</a>
				</div>	      
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			@yield('content')
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; Developed by <a href="http://www.cidis.espol.edu.ec" target="_blank">CIDIS</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
	<script src="{{ asset('/novus_admin/js/classie.js') }}"></script>


	@yield('scripts')
	<!--scrolling js-->

	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('/novus_admin/js/bootstrap.js') }}"> </script>
</body>
</html>