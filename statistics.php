<!DOCTYPE html>
<?php include("template.php"); ?>
<html>
<head>
<title><?php echo $lang['statistics']; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(placement: "bottom");
});
</script>

<script>
function languageSwitch (lang) {
	var url = "<?php echo $currentURL; ?>";
	switch(lang) {
		case 'lt':
			document.cookie = "lt";
			window.location.href = url + "?lang=" + document.cookie;
			break;
		case 'en':
			document.cookie = "en";
			window.location.href = url + "?lang=" + document.cookie;
			break;
		default:
			alert("Oops! Something went wrong, please contact admin");
	}
}
</script>

<script>
function redirect(URL) {
	window.location.href = URL + "?lang=" + document.cookie;
}
</script>

<style>
.nav span{
	font-size: 20px;
}

.nav a {
	cursor: pointer;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="assets/img/favicon.ico">
    <title><?php echo $lang['dashboard']; ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
	<link href="assets/css/toggle.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
				<div id="languages">
					<a onclick="languageSwitch('en')"><img data-toggle="tooltip" title="<?php echo $lang['en']; ?>" src="assets/img/en.png" style="cursor:pointer"/></a>
					<a onclick="languageSwitch('lt')"><img data-toggle="tooltip" title="<?php echo $lang['lt']; ?>" src="assets/img/lt.png" style="cursor:pointer"/></a>
				</div>
                <a class="navbar-brand" href="index.php"><?php echo $lang['email']; ?></a> 
            </div>
  <div style="color: white;
padding: 25px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo $lang['last_access']; ?> : 11-11-2016 &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust"><?php echo $lang['logout']; ?></a></div>
        </nav>   
	    <!-- /. NAV TOP  -->
		   
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a onclick="redirect('index.php')"><i class="fa fa-dashboard fa-3x"></i><span><?php echo $lang['dashboard']; ?></span></a>
                    </li>
                    <li>
                        <a onclick="redirect('users.php')"><i class="fa fa-users fa-3x"></i><span><?php echo $lang['users']; ?></span></a>
                    </li>
                    <li>
                        <a class="active-menu" onclick="redirect('statistics.php')"><i class="fa fa-bar-chart-o fa-3x"></i><span><?php echo $lang['statistics']; ?></span></a>
                    </li>	
                </ul>
               
            </div> 
        </nav>  
        <!-- /. NAV SIDE  -->
		
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h2><?php echo $lang['statistics']; ?></h2>   
						<hr>
						
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $lang['bar_chart']; ?></div>
							<div class="panel-body">
								<div id="morris-bar-chart"></div>
							</div>
						</div>            

						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $lang['donut_chart']; ?></div>
							<div class="panel-body">
								<div id="morris-donut-chart"></div>
							</div>
						</div>            
 
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
</body>
</html>