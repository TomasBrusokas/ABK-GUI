<!DOCTYPE html>
<?php include("template.php"); ?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="assets/img/favicon.ico">
	<title><?php echo $lang['login_title']; ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
	<form class="login">
		<fieldset>
			<legend class="legend"><?php echo $lang['login_title']; ?></legend>
			
			<div class="input">
				<input type="email" placeholder="<?php echo $lang['login_email']; ?>" required />
				<span><i class="fa fa-envelope-o"></i></span>
			</div>
			
			<div class="input">
				<input type="password" placeholder="<?php echo $lang['login_password']; ?>" required />
				<span><i class="fa fa-lock"></i></span>
			</div>
			
			<img id="admin" onclick="set('admin')" data-toggle="tooltip" title="Admin" src="assets/img/admin.png" style="width: 50px; height: 50px; cursor: pointer">
			<span style="margin-left: 15%; vertical-align: 20px">Which user?</span>
			<img id="user" onclick="set('user')" data-toggle="tooltip" title="User" src="assets/img/user.png" style="width: 50px; height: 50px; float: right; cursor: pointer">
			
			<button type="submit" class="submit" name="submit"><i class="fa fa-long-arrow-right"></i></button>
		</fieldset>
	  
		<div class="feedback">
			<?php echo $lang['login_successful']; ?><br/>
			<?php echo $lang['redirecting']; ?>
		</div>
	  
	</form>
	
	<script>
		function set(type) {
			document.cookie = "userType=" + type;
			if (type == 'admin') {
				document.getElementById('admin').style.filter = "grayscale(100%)";
				document.getElementById('user').style.filter = "grayscale(0%)";
			} else if (type == 'user') {
				document.getElementById('user').style.filter = "grayscale(100%)";
				document.getElementById('admin').style.filter = "grayscale(0%)";
			}
		}
	</script>
	
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip(placement: "bottom");
		});
	</script>
	
</body>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="assets/js/login.js"></script>
</html>
