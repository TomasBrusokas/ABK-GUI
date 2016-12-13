<!DOCTYPE html>
<?php include("template.php");
error_reporting(0);?>
<html>
<head>
<title><?php echo $lang['dashboard']; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>
.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #4D4D4D;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #4D4D4D;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: center;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

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
                        <a onclick="redirect('failures.php')"><i class="fa fa-wrench fa-3x"></i><span><?php echo $lang['failures']; ?></span></a>
                    </li>
					<li>
                        <a class="active-menu" onclick="redirect('rules.php')"><i class="fa fa-lock fa-3x"></i><span><?php echo $lang['rules']; ?></span></a>
                    </li>
                </ul>
               
            </div> 
        </nav>  
        <!-- /. NAV SIDE  -->
		
		<div id="page-wrapper" >
			<div id="page-inner">		
				
				<h2><?php echo $lang['existing_rules']; ?></h2>
				<hr>

				<table class="responstable">
				  
				  <tr>
					<th><?php echo $lang['name']; ?></th>
					<th><?php echo $lang['parameters']; ?></th>
					<th><?php echo $lang['alert']; ?></th>
					<th><?php echo $lang['used_on']; ?></th>
					<th><span class="fa fa-cog fa-2x"></span></th>
				  </tr>
				  
				  <tr>
					<td>High RAM usage</td>
					<td>[[RAM]]>80%</td>
					<td>test1234@imone.com</td>
					<td>3</td>
					<td><button class="btn btn-info btn-xs"><span class="fa fa-edit"></span></button>
					<button class="btn btn-danger btn-xs"><span class="fa fa-close"></span></button></td>
				  </tr>
				  
				  <tr>
					<td>High disk usage</td>
					<td>[[HDD]]>90%</td>
					<td>test1234@imone.com</td>
					<td>2</td>
					<td><button class="btn btn-info btn-xs"><span class="fa fa-edit"></span></button>
					<button class="btn btn-danger btn-xs"><span class="fa fa-close"></span></button></td>
				  </tr>
				  
				  <tr>
					<td>Status "off"</td>
					<td>[[Status]]=="off"</td>
					<td>test1234@imone.com</td>
					<td>5</td>
					<td><button class="btn btn-info btn-xs"><span class="fa fa-edit"></span></button>
					<button class="btn btn-danger btn-xs"><span class="fa fa-close"></span></button></td>
				  </tr>
				  
				  <tr style="background-color: #4D4D4D">
					<td><input style="border-radius: 5px" type="text" placeholder=" <?php echo $lang['name']; ?>" ></td>
					<td><input style="border-radius: 5px" type="text" placeholder=" <?php echo $lang['parameters']; ?>" ></td>
					<td><input style="border-radius: 5px" type="text" placeholder=" <?php echo $lang['alert']; ?>" ></td>
					<td><input style="border-radius: 5px" type="text" placeholder=" <?php echo $lang['used_on']; ?>" ></td>
					<td style="text-align: center"><button class="btn btn-success btn-xs"><span class="fa fa-check"></span></button></td>
				  </tr>
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
