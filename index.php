<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>无标题文档</title>
</head>
<script src="https://how2j.cn/study/js/jquery/2.0.0/jquery.min.js"></script>
<link href="https://how2j.cn/study/css/bootstrap/3.3.6/bootstrap.min.css" rel="stylesheet">
<script src="https://how2j.cn/study/js/bootstrap/3.3.6/bootstrap.min.js"></script>
<body>
<h1>留言板</h1>
<div><a href="publish.php" rel="external nofollow" >发布信息</a></div>
<div><a href="cancellation.php" rel="external nofollow" rel="external nofollow" onclick=" return confirm('注销当前用户？')">注销登入</a></div>
 <table class="table table-striped">
  <thead>
     <th>用户名</th>
     <th>发布时间</th>
     <th>内容</th>
  </thead>
  <tbody>

 <?php
 session_start();
 if(empty($_SESSION["user"]))
 {
  header("location:login.php");
  exit;
 }
 $user = $_SESSION["user"];
 include ("conn.php");
 $sql = "select name from emp WHERE user = '{$user}'";
 $resutl=mysqli_query($mysqli,$sql);
 $row=mysqli_fetch_assoc($resutl);
 echo "<h5>欢迎宁:{$row['name']}</h5>";
 $sql = "select * from message";
 $resutl=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_assoc($resutl)){
	 echo '<tr><td>'.$row['name'].'</td>';
	 echo '<td>'.$row['time'].'</td>';
	 echo '<td>'.$row['content'].'</td></tr>';
 }
 ?>
 </tbody>
</table>
</body>
</html>