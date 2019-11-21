<?php
define("HOST","localhost");
define("USER","root");
define("PWD","root");
define("DB","phpmessage");
$mysqli=new mysqli(HOST,USER,PWD,DB);
if($mysqli->connect_errno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
mysqli_query($mysqli , "set names utf8");

?>