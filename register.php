
<?php
header("Content-type:text/html;charset=utf-8");
$uname=$_POST['username'];
$upassword=$_POST['userpassword'];

$con=mysql_connect("127.0.0.1:3306","root","sa123");
if (!$con) {
  die('Could not connect: ' . mysql_error());
  } 

mysql_select_db("my_db", $con);

if(mysql_query("INSERT INTO user (uname, upassword) 
VALUES ('$uname', '$upassword')")){
	echo "注册成功！请重新登录..<META HTTP-EQUIV=\"refresh\" CONTENT=\"2;url='T-main.html?uname=$uname'\">"; 
	// echo "111";
}
else{
	echo "注册失败！再试一遍呗<META HTTP-EQUIV=\"refresh\" CONTENT=\"5;url='T-main.html'\">";
}
// while($row = mysql_fetch_array($result))
 
// {
 
// echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //排版代码
 
// echo $row['uname'] . "<br/>";
 
// echo "</div>"; //排版代码
 
// }

mysql_close($con);

?>

