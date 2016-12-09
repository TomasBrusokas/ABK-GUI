<!DOCTYPE html>
<?php include("template.php"); ?>
<html>
<head>
<title><?php echo $lang['users']; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(placement: "bottom");
});
</script>

<script>
function languageSwitch(lang) {
	var url = "<?php echo $currentURL; ?>";
	switch(lang) {
		case 'lt':
			if (document.cookie != "lt") {
			document.cookie = "lt";
			window.location.href = url + "?lang=" + document.cookie;
			} break;
		case 'en':
			if (document.cookie != "en") {
			document.cookie = "en";
			window.location.href = url + "?lang=" + document.cookie;
			} break;
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
.table th, td {
	text-align: center;
}

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
     <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- GLYPHICONS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
	<!-- REGISTRATION FORM-->
    <link href="assets/css/registration_form.css" rel="stylesheet" />
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
                        <a class="active-menu" onclick="redirect('users.php')"><i class="fa fa-users fa-3x"></i><span><?php echo $lang['users']; ?></span></a>
                    </li>
                    <li>
                        <a onclick="redirect('statistics.php')"><i class="fa fa-bar-chart-o fa-3x"></i><span><?php echo $lang['statistics']; ?></span></a>
                    </li>	
                </ul>
               
            </div>
        </nav> 
        <!-- /. NAV SIDE  -->
		
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h2><?php echo $lang['users']; ?></h2>   
					</div>
				</div>
				<hr />
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th><?php echo $lang['first_name']; ?></th>
									<th><?php echo $lang['last_name']; ?></th>
									<th><?php echo $lang['email']; ?></th>
									<th><?php echo $lang['phone_nr']; ?></th>
									<th><?php echo $lang['assigned_groups']; ?></th>
									<th><button id="add" class="btn btn-primary btn-xs"><span class="fa fa-user-plus"> <?php echo $lang['add_new']; ?></span></button></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>mark@gmail.com</td>
									<td>912-303-8309</td>
									<td>Windows</td>
									<td><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> <?php echo $lang['edit']; ?></a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> <?php echo $lang['del']; ?></a></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>jacob@gmail.com</td>
									<td>843-537-9351</td>
									<td>Linux</td>
									<td><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> <?php echo $lang['edit']; ?></a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> <?php echo $lang['del']; ?></a></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>Bird</td>
									<td>larry@gmail.com</td>
									<td>585-298-1722</td>
									<td>Windows, Linux</td>
									<td><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> <?php echo $lang['edit']; ?></a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> <?php echo $lang['del']; ?></a></td>
								</tr>
							</tbody>
						</table>
						<div id="registration_form" align="center" style="display: ; margin-top: 100px">
							<div class="form-style-2">
								<div class="form-style-2-heading"><?php echo $lang['user_registration']; ?></div>
									<form action="" method="post">
										<label><span><?php echo $lang['first_name']; ?> <span class="required">*</span></span><input type="text" class="input-field" value="" /></label>
										<label><span><?php echo $lang['last_name']; ?> <span class="required">*</span></span><input type="text" class="input-field" value="" /></label>
										<label><span><?php echo $lang['email']; ?> <span class="required">*</span></span><input type="email" class="input-field" value="" /></label>
										<label><span><?php echo $lang['password']; ?> <span class="required">*</span></span><input type="text" class="input-field" value="" /></label>
										<label><span><?php echo $lang['repassword']; ?> <span class="required">*</span></span><input type="text" class="input-field" value="" /></label>
										<label><span><?php echo $lang['phone_nr']; ?></span><input style="width: 50px" type="text" class="tel-number-field" value="+370" maxlength="4" />-<input style="width: 100px" type="text" class="tel-number-field" maxlength="8"/></label>
										<label><span><?php echo $lang['assigned_groups']; ?> <span class="required">*</span></span></label>
										<div align="left" style="margin-left: 50%">
											<input type="checkbox"><b> Linux</b><br>
											<input type="checkbox"><b> Windows</b>
										</div>
										<br>
										<label><span><?php echo $lang['description']; ?> </span><textarea class="textarea-field"></textarea></label>
										<b><input type="submit" value="<?php echo $lang['registration_submit']; ?>"/></b>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
				 <!-- /. PAGE INNER  -->
		</div>
         <!-- /. PAGE WRAPPER  -->
	</div>
    <!-- /. WRAPPER  -->
	
	<script>
	$(document).ready(function(){
		$("#add").click(function(){
			$("#registration_form").slideToggle();
		});
	});
	</script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
