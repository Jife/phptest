<?php
	session_start();
	include("conn.php");
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$sql="select pass from emp where user='{$user}'";
	$result=mysqli_query($mysqli,$sql);
	$row = mysqli_fetch_assoc($result);
	if(!empty($pass)&&$pass==$row['pass']&&!empty($user)){
		$_SESSION["user"] = $user;
		header("location:index.php");
		//header("location:index.php");
	}else{
		echo "登录失败";
		}
	
?>