<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hierarchy</title>
	<meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<meta name=viewport content="width=device-width, initial-scale=1">
	
	<!--[if IE 10]>
	        <meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<![endif]-->
	<!--[if IE 9]>
	        <meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<![endif]-->
	<!--[if IE 8]>
	        <meta http-equiv="X-UA-Compatible" content="IE=8"/>
	<![endif]-->

	<!--  Main CSS files -->
	<link rel="stylesheet" type="text/css" href="./include/css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="../../lib/bootstrap-3.0/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="./include/css/hierarchy.css">
    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie8.css"" media="screen" />
      	<script src="../../lib/plugin/html5shiv-3.7.0/html5shiv.js"></script>
      	<script src="../../lib/plugin/respond-1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- navigation -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Hierarchy</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="active"><a href="#">List of Hierarchies</a></li>
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				
				<!-- title -->
				<h1 class="page-header">Hierarchies</h1>
				
			    <!-- add -->
				<form class="pull-left">
			        <input type="text" class="form-control" placeholder="Enter Hierarchy Name">
				    <button class="btn btn-primary" id="addButton" name="addButton">Add</button>
				</form>
				
			    <!-- search -->
				<form class="navbar-right">
					<input type="text" class="form-control" placeholder="Enter Search Value">
				</form>
				
			</div>
		</div>
	</div>
	
	<!-- footer -->
	<div class="navbar navbar-fixed-bottom">
    	<div class="navbar-inner">
    	   	<div class="container-fluid">
    	    	<div class="row-fluid"> 
    				<footer>
    				    &nbsp; &copy; <a href="https://github.com/adriant3h/Hierarchy">adriant3h@github</a>
    				</footer>
    			</div>
    		</div>
    	</div>
    </div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../../lib/bootstrap-3.0/js/bootstrap.min.js"></script>
</body>
</html>