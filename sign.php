<!-- 处理登录 -->
<?php
header("Content-type:text/html;charset=utf-8");
$uname=$_POST['username'];
$upassword=$_POST['userpassword'];
$con = mysql_connect("localhost:3306","root","sa123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM user
WHERE uname='$uname' and upassword='$upassword'");

if($row = mysql_fetch_array($result))
  {
  	setCookie("usersname","$uname",time()+2*7*24*3600);
  	//设置cookies
  // echo $row['FirstName'] . " " . $row['LastName'];
  // echo "<br />";
  	echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url='megsuccess.php'\">"; 
  }else{
  	echo "登录失败，该用户不存在...请重新登录<META HTTP-EQUIV=\"refresh\" CONTENT=\"2;url='T-main.html'\">";
  }

?>