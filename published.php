 <?php
 session_start();
 if(empty($_SESSION["user"]))
 {
  header("location:login.php");
  exit;
 }
 $user = $_SESSION["user"];
 $content=$_POST["content"];
 include ("conn.php");
 $sql = "select name from emp WHERE user = '{$user}'";
 $resutl=mysqli_query($mysqli,$sql);
 $row=mysqli_fetch_assoc($resutl);
 $name=$row['name'];
 //$resutl=mysqli_query($mysqli,"insert into message(name,content) values('{$name}','{$content}')");
 if(mysqli_query($mysqli,"insert into message(name,content) values('{$name}','{$content}')")){
	 header("location:index.php");
 }else{
	 echo "发布失败";
 }
 
 ?>