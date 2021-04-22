<?php
session_start();
// echo $_COOKIE["data"]

// $base_dir = realpath(dirname(__FILE__));

$folder_dir = "\\templates\\Race";

$sub = isset( $_REQUEST['subject'] ) ? $_REQUEST['subject'] : 'unknown2' ;
// $src = isset( $_REQUEST['src'] ) ? $_REQUEST['src'] : 'HUH' ;

$data = $_REQUEST["data"]; 
$randtxt = date('Y-m-d');
// $fh = fopen( $sub  . '.txt', 'w');
$fh = fopen('-' . $randtxt . '.txt', 'a');
fwrite($fh, $sub . "     " . $data);
fclose($fh);

?>
