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
			
			<button type="submit" class="submit" name="submit"><i class="fa fa-long-arrow-right"></i></button>
		</fieldset>
	  
		<div class="feedback">
			<?php echo $lang['login_successful']; ?><br/>
			<?php echo $lang['redirecting']; ?>
		</div>
	  
	</form>
</body>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="assets/js/login.js"></script>
</html>
