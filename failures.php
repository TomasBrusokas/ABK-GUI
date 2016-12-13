<!DOCTYPE html>
<?php include("template.php");
error_reporting(0);?>
<html>
<head>
<title><?php echo $lang['dashboard']; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>
body {
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}

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

@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  border-style: solid;
  border-width: 3px;
  border-color: #4d4d4d;
  height: 320px;
  margin: auto;
  max-width: 200px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;
  background:#C90000;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
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
                        <a onclick="redirect('index.php')"><i class="fa fa-dashboard fa-3x"></i><span><?php echo $lang['dashboard']; ?></span></a>
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
                        <a class="active" onclick="redirect('failures.php')"><i class="fa fa-wrench fa-3x"></i><span><?php echo $lang['failures']; ?></span></a>
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
				
				<h2><?php echo $lang['failures']; ?></h2>
				<hr>
				
				<!-- Galimi statusai -->

<table class="table-fill" style="margin-left:30%; float:left">
<thead>
<tr>
<th class="text-center"><b>Galimi statusai</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><span style="margin-left:20px"><b>Patikirinta</span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b>Patikirinta</span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-center"><button type="button" style="height:100%; width:100%;">----></button></td>
</tr>
</tbody>
</table>


<!-- <input type="SUBMIT" name = "submit" value = "Visi įrašai" style="height:25px"/><hr/>    -->

<!-- Visi statusai -->
<table class="table-fill">
<thead>
<tr>
<th class="text-center"><b>Visi statusai</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><span style="margin-left:20px"><b>Nepatikrinta</span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-center"><button type="button" style="height:100%; width:100%;"><----</button></td>
</tr>
</tbody>
</table>			


<!-- Galimi gedimai -->
<table class="table-fill" style="margin-left:30%; float:left; margin-top: 50px"> 
<thead>
<tr>
<th class="text-center"><b>Galimi gedimai</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-center"><span style="margin-center:20px"><b>Programinis gedimas</span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-center"><button type="button" style="height:100%; width:100%;">----></button></td>
</tr>
</tbody>
</table>			

<!-- Visi gedimai -->
<table class="table-fill" style="margin-top: 50px">
<thead>
<tr>
<th class="text-center"><b>Visi gedimai</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><span style="margin-left:20px"><b>Klaida</span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-left"><span style="margin-left:20px"><b></span></td>
</tr>
<tr>
<td class="text-center"><button type="button" style="height:100%; width:100%;"><----</button></td>
</tr>
</tbody>
</table>	 

				

  
  
  
  
  
				
				
				

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
