<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>无标题文档</title>
</head>
<script src="https://how2j.cn/study/js/jquery/2.0.0/jquery.min.js"></script>
<link href="https://how2j.cn/study/css/bootstrap/3.3.6/bootstrap.min.css" rel="stylesheet">
<script src="https://how2j.cn/study/js/bootstrap/3.3.6/bootstrap.min.js"></script>
<body>
<h1>发布信息</h1>
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
 ?>
 <form action="published.php" method="post">
 <span class="text-muted">留言内容：</span><textarea name="content" class="form-control"></textarea>
 <br/>
 <input type="submit" value="提交" class="btn btn-default"><input type="reset" value="清空" class="btn btn-default">
 <br/><a href="index.php" rel="external nofollow" >查看留言</a>
 </form>
</table>
</body>
</html>