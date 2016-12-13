<!DOCTYPE html>
<?php include("template.php");
error_reporting(0);?>
<html>
<head>
<title><?php echo $lang['dashboard']; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

.led-green {
    margin: 20px auto;
    width: 12px;
    height: 12px;
    background-color: #690;
    border-radius: 50%;
    box-shadow: #000 0 -1px 7px 1px, inset #460 0 -1px 9px, #7D0 0 2px 12px;
}

.led-red {
    margin: 20px auto;
    width: 12px;
    height: 12px;
    background-color: #940;
    border-radius: 50%;
    box-shadow: #000 0 -1px 7px 1px, inset #600 0 -1px 9px, #F00 0 2px 12px;
}

* {
  margin: 0;
  padding: 0;
}
body {
  padding: 0px;
  background: white;
  border-style: solid;
  border-width: 2px;
}
.flatTable {
  width: 100%;
  min-width: 500px;
  border-collapse: collapse;
  font-weight: bold;
  color: #6b6b6b;
}
.flatTable tr {
  height: 50px;
  background: #d4d1d5;
  border-bottom: rgba(0, 0, 0, 0.05) 1px solid;
}
.flatTable td {
  box-sizing: border-box;
  padding-left: 30px;
}
.flatTable .titleTr {
  height: 70px;
  color: #f6f3f7;
  background: #C90000;
  border: 0px solid;
  font-size: 30px;
}

.flatTable .controlTd {
  position: relative;
  width: 80px;
  background: url(http://i.imgur.com/9Q5f6cv.png) center center no-repeat;
  cursor: pointer;
}
.flatTable .headingTr {
  height: 30px;
  background: #4d4d4d;
  color: #f6f3f7;
  font-size: 18px;
  border: 0px solid;
}

.sForm {
  position: absolute;
  top: 0;
  right: -400px;
  width: 400px;
  height: 100%;
  background: #d4d1d5;
  overflow: hidden;
  transition: width 1s, right .3s;
  padding: 0px;
  box-sizing: border-box;
}
.sForm .close {
  float: right;
  height: 70px;
  width: 80px;
  padding-top: 25px;
  box-sizing: border-box;
  background: rgba(255, 0, 0, 0.4);
}
.sForm .title {
  width: 100%;
  height: 70px;
  padding-top: 20px;
  padding-left: 20px;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.1);
}
.open {
  right: 0;
  width: 400px !important;
}
.settingsIcons {
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  overflow: hidden;
}
.display {
  width: 300px;
}
.settingsIcon {
  float: right;
  background: #418a95;
  color: #f6f3f7;
  height: 50px;
  width: 80px;
  padding-top: 15px;
  box-sizing: border-box;
  text-align: center;
  overflow: hidden;
  transition: width 1s;
}
.settingsIcon:hover {
  background: #1f6873;
}
tr:nth-child(3) .settingsIcon {
  height: 51px;
}
.openIcon {
  width: 80px;
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
					<a onclick="languageSwitch('sv')"><img data-toggle="tooltip" title="<?php echo $lang['sv']; ?>" src="assets/img/sv.png" style="cursor:pointer; width: 24px; height: 24px"/></a>
					<a onclick="languageSwitch('dz')"><img data-toggle="tooltip" title="<?php echo $lang['dz']; ?>" src="assets/img/dz.png" style="cursor:pointer; width: 24px; height: 24px"/></a>
				</div>
                <a class="navbar-brand" href="index.php"><?php echo $lang['email']; ?></a> 
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
                    <img src="assets/img/logo.gif" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu" onclick="redirect('index.php')"><i class="fa fa-dashboard fa-3x"></i><span><?php echo $lang['dashboard']; ?></span></a>
                    </li>
					<?php if($_COOKIE['userType'] == 'admin' ) { ?>
                    <li>
                        <a onclick="redirect('users.php')"><i class="fa fa-users fa-3x"></i><span><?php echo $lang['users']; ?></span></a>
                    </li>
					<?php } ?>
                    <li>
                        <a onclick="redirect('statistics.php')"><i class="fa fa-bar-chart-o fa-3x"></i><span><?php echo $lang['statistics']; ?></span></a>
                    </li>
					<li>
                        <a onclick="redirect('groups.php')"><i class="fa fa-address-book-o fa-3x"></i><span><?php echo $lang['groups']; ?></span></a>
                    </li>
					<li>
                        <a onclick="redirect('failures.php')"><i class="fa fa-wrench fa-3x"></i><span><?php echo $lang['failures']; ?></span></a>
                    </li>
					<li>
                        <a onclick="redirect('rules.php')"><i class="fa fa-lock fa-3x"></i><span><?php echo $lang['rules']; ?></span></a>
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
								<h3 class="panel-title"><?php echo $lang['servers_table_title']; ?></h3>
								<div class="pull-right">
									<button class="btn btn-default btn-xs btn-filter" onclick="showAddButton()"><span class="fa fa-plus-circle"><strong> <?php echo $lang['add_new']; ?></strong></button>
									<button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span><strong> <?php echo $lang['filter']; ?></strong></button>
								</div>
							</div>
							<table class="table">
								<thead>
									<tr class="filters">
										<th><input type="text" class="form-control" placeholder="IP" disabled></th>
										<th><input type="text" class="form-control" placeholder="CPU" disabled></th>
										<th><input type="text" class="form-control" placeholder="RAM" disabled></th>
										<th><input type="text" class="form-control" placeholder="HDD" disabled></th>
										<th><input type="text" class="form-control" placeholder="OS" disabled></th>
										<th><input type="text" class="form-control" placeholder="Status" disabled></th>
										<th style="text-align: center"><button id="add" class="btn btn-success btn-xs" style="display: none"><span class="fa fa-check"></span></button></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>192.168.16.14</td>
										<td>i5 3.0GHz</td>
										<td>4GB DDR3, 1255MHz</td>
										<td>1TB</td>
										<td><img src="assets/img/windows.png" style="width: 15px; height: 15px; margin-right: 5px; margin-bottom: 5px">Windows</td>
										<td><div class="led-green" style="width: 10px; height: 10px; margin-bottom: 3px; margin-top: 8px"></div></td>
										<td><button onclick="showName('192.168.16.14')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>192.168.17.15</td>
										<td>i7 2.5GHz</td>
										<td>8GB DDR4, 2133MHz</td>
										<td>1TB</td>
										<td><img src="assets/img/linux.png" style="width: 15px; height: 15px; margin-right: 5px; margin-bottom: 5px">Linux</td>
										<td><div class="led-red" style="width: 10px; height: 10px; margin-bottom: 3px; margin-top: 8px"></div></td>
										<td><button onclick="showName('192.168.17.15')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>192.168.18.16</td>
										<td>i3 2.0GHz</td>
										<td>4GB DDR3, 1600MHz</td>
										<td>1TB</td>
										<td><img src="assets/img/linux.png" style="width: 15px; height: 15px; margin-right: 5px; margin-bottom: 5px">Linux</td>
										<td><div class="led-green" style="width: 10px; height: 10px; margin-bottom: 3px; margin-top: 8px"></div></td>
										<td><button onclick="showName('192.168.18.16')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>192.168.19.17</td>
										<td>i7 2.7GHz</td>
										<td>32GB DDR4, 2133MHz</td>
										<td>2TB</td>
										<td><img src="assets/img/windows.png" style="width: 15px; height: 15px; margin-right: 5px; margin-bottom: 5px">Windows</td>
										<td><div class="led-green" style="width: 10px; height: 10px; margin-bottom: 3px; margin-top: 8px"></div></td>
										<td><button onclick="showName('192.168.19.17')"><span class="fa fa-cogs"></span></button></td>
									</tr>
									<tr>
										<td>192.168.20.18</td>
										<td>i3 2.3GHz</td>
										<td>4GB DDR4, 2133MHz</td>
										<td>2TB</td>
										<td><img src="assets/img/windows.png" style="width: 15px; height: 15px; margin-right: 5px; margin-bottom: 5px">Windows</td>
										<td><div class="led-red" style="width: 10px; height: 10px; margin-bottom: 3px; margin-top: 8px"></div></td>
										<td><button onclick="showName('192.168.20.18')"><span class="fa fa-cogs"></span></button></td>
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
						
<table class="flatTable" id="failures" style="display: none">
  <tr class="titleTr">
    <td class="titleTd">Gedimai</td>
    <td colspan="4"></td>
    <td class="plusTd button"></td>
  </tr>
  <tr class="headingTr">
    <td>Kontaktinis asmuo</td>
    <td>Gedimo aprašymas</td>
    <td>Tipas</td>
    <td>Statusas</td>
    <td></td>
	<td></td>
  </tr>
  
  <tr>
    <td>test@example.com</td>
    <td>Neveikia web serveris</td>
    <td>Programinio gedimas</td>
    <td>Nepatikrinta</td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
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
			$("#failures").slideToggle();
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
					document.cookie = "language=" + "lt";
					window.location.href = url + "?lang=" + getCookie('language');
					break;
				case 'en':
					document.cookie = "language=" + "en";
					window.location.href = url + "?lang=" + getCookie('language');
					break;
				case 'sv':
					document.cookie = "language=" + "sv";
					window.location.href = url + "?lang=" + getCookie('language');
					break;
				case 'dz':
					document.cookie = "language=" + "dz";
					window.location.href = url + "?lang=" + getCookie('language');
					break;
				default:
					alert("Oops! Something went wrong, please contact admin");
			}
		}
	</script>
	
	<script>
	function getCookie(name) {
	  var value = "; " + document.cookie;
	  var parts = value.split("; " + name + "=");
	  if (parts.length == 2) return parts.pop().split(";").shift();
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

	<script>
		function showAddButton() {
			if (document.getElementById('add').style.display == "") {
				document.getElementById('add').style.display = "none";
			} else {
				document.getElementById('add').style.display = "";
			}
		}
	</script>
	
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
