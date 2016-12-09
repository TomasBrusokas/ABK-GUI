<!DOCTYPE html>
<?php include("template.php"); ?>
<html>
<head>
<title><?php echo $lang['dashboard']; ?></title>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
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

<script>
function setFrameLanguage() {
	var frame_url = "detailed_info.php?lang=" + document.cookie;
	top.document.getElementById('frame').setAttribute('src', frame_url);
}
</script>

<style>
table, th, td, th input {
	text-align: center;
}

.table button {
	border-radius: 50px;
}

.table button:hover {
	background: #5D5D5D;
}

.nav span{
	font-size: 20px;
}

.nav a {
	cursor: pointer;
}

#add:hover {
	background: #009933;
}

.filterable {
	margin-top: 15px;
}
.filterable .panel-heading .pull-right {
	margin-top: -20px;
}
.filterable .filters input[disabled] {
	background-color: transparent;
	border: none;
	cursor: auto;
	box-shadow: none;
	padding: 0;
	height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
	color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
	color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
	color: #333;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="assets/img/favicon.ico">
    <title><?php echo $lang['dashboard']; ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- GLYPHICONS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                <a class="navbar-brand" href="simple_user.php"><?php echo $lang['email']; ?></a> 
            </div>
  <div style="color: white;
padding: 25px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo $lang['last_access']; ?> : 11-11-2016 &nbsp; <a onclick="redirect('login.php')" class="btn btn-danger square-btn-adjust"><?php echo $lang['logout']; ?></a></div>
        </nav>   
	    <!-- /. NAV TOP  -->
		   
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu" onclick="redirect('simple_user.php')"><i class="fa fa-dashboard fa-3x"></i><span><?php echo $lang['dashboard']; ?></span></a>
                    </li>	
                </ul>
               
            </div> 
        </nav>  
        <!-- /. NAV SIDE  -->
		
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-primary filterable" style="border-color: #d9d9d9">
							<div class="panel-heading" style="background-color: #C90000; border-color: #d9d9d9">
								<h3 class="panel-title"><?php echo $lang['user_server_table_title']; ?></h3>
								<div class="pull-right">
									<button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span><strong> <?php echo $lang['filter']; ?></strong></button>
								</div>
							</div>
							<table class="table">
								<thead>
									<tr class="filters">
										<th><input type="text" class="form-control" placeholder="#" disabled></th>
										<th><input type="text" class="form-control" placeholder="CPU" disabled></th>
										<th><input type="text" class="form-control" placeholder="RAM" disabled></th>
										<th><input type="text" class="form-control" placeholder="HDD" disabled></th>
										<th><input type="text" class="form-control" placeholder="OS" disabled></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>i5 3.0GHz</td>
										<td>4GB DDR3, 1255MHz</td>
										<td>1TB</td>
										<td>Windows</td>
										<td><button onclick="showName('1')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>2</td>
										<td>i7 2.5GHz</td>
										<td>8GB DDR4, 2133MHz</td>
										<td>1TB</td>
										<td>Linux</td>
										<td><button onclick="showName('2')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>3</td>
										<td>i3 2.0GHz</td>
										<td>4GB DDR3, 1600MHz</td>
										<td>1TB</td>
										<td>Linux</td>
										<td><button onclick="showName('3')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>4</td>
										<td>i7 2.7GHz</td>
										<td>32GB DDR4, 2133MHz</td>
										<td>2TB</td>
										<td>Windows</td>
										<td><button onclick="showName('4')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>5</td>
										<td>i3 2.3GHz</td>
										<td>4GB DDR4, 2133MHz</td>
										<td>2TB</td>
										<td>Windows</td>
										<td><button onclick="showName('5')"><span class="fa fa-cogs"></span></button></td>
									</tr>
								</tbody>
							</table>
						</div>

						
						<span style="margin-left: 5px"><?php echo $lang['chosen_server']; ?>: </span><span id="servName">-</span>


						<table border="0" cellspacing="0" cellpadding="0" style="float:right; margin-right:10px;">
						  <tr>
							<td style="padding: 0 5px 20px 0;"><span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" title="<?php echo $lang['advanced_info_tooltip']; ?>"></span><span> <?php echo $lang['enable']; ?>:</span></td>
							<td class="switch">
								<input onclick="setFrameLanguage()" id="toggle" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
								<label for="toggle" data-on="<?php echo $lang['yes']; ?>" data-off="<?php echo $lang['no']; ?>"></label>
							</td>
						  </tr>
						</table>
						
						<hr style="margin-top: 25px">
							<div id="advanced" style="display: none">
								<iframe id="frame" src="detailed_info.php" style="height: 800px; width: 100%; border: none" scrolling="no"></iframe>
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
		var globalName = "";
	</script>
	
	<script>
	$(document).ready(function(){
		$("#toggle").click(function(){
			if(!globalName)
				showName("1");
			$("#advanced").slideToggle();
		});
	});
	</script>
	
	<script>
	function showName(name) {
		$('#servName').html(name);
		globalName = name;
		document.getElementById('frame').src = "detailed_info.php";
	}
	</script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('.filterable .btn-filter').click(function(){
			var $panel = $(this).parents('.filterable'),
			$filters = $panel.find('.filters input'),
			$tbody = $panel.find('.table tbody');
			if ($filters.prop('disabled') == true) {
				$filters.prop('disabled', false);
				$filters.first().focus();
			} else {
				$filters.val('').prop('disabled', true);
				$tbody.find('.no-result').remove();
				$tbody.find('tr').show();
			}
		});

		$('.filterable .filters input').keyup(function(e){
			/* Ignore tab key */
			var code = e.keyCode || e.which;
			if (code == '9') return;
			/* Useful DOM data and selectors */
			var $input = $(this),
			inputContent = $input.val().toLowerCase(),
			$panel = $input.parents('.filterable'),
			column = $panel.find('.filters th').index($input.parents('th')),
			$table = $panel.find('.table'),
			$rows = $table.find('tbody tr');
			var $filteredRows = $rows.filter(function(){
				var value = $(this).find('td').eq(column).text().toLowerCase();
				return value.indexOf(inputContent) === -1;
			});
			/* Clean previous no-result if exist */
			$table.find('tbody .no-result').remove();
			/* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
			$rows.show();
			$filteredRows.hide();
			/* Prepend no-result row if all rows are filtered */
			if ($filteredRows.length === $rows.length) {
				$table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
			}
		});
	});
	</script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
