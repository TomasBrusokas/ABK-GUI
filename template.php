<?php
if(isSet($_GET['lang'])) {
	$lang = $_GET['lang'];
} else {
	$lang = 'en';
}

switch ($lang) {
  case 'lt':
  $lang_file = 'lang.lt.php';
  break;
  
  case 'sv':
  $lang_file = 'lang.sv.php';
  break;
  
  case 'dz':
  $lang_file = 'lang.dz.php';
  break;
  
 
  default:
  $lang_file = 'lang.en.php';
 
}
include_once 'languages/'.$lang_file;

$currentURL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>