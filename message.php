<?php
error_reporting(E_ERROR); 
ini_set("display_errors","Off");
header("Content-type:text/html;charset=utf-8");
$Metext=$_POST['Metext'];
$uname=$_COOKIE['usersname'];
// echo "$uname";
// echo "$Metext";
date_default_timezone_set('Asia/Shanghai');//设置中国时间
$time=date('y-m-d H:i:s',time());//h表示12小时制,H表示24小时制
// echo "$time";
$con=mysql_connect("localhost:3306","root","sa123");
if (!$con) {
  die('Could not connect: ' . mysql_error());
  } 
mysql_select_db("my_db", $con);
if(mysql_query("INSERT INTO metexts VALUES ('$uname', '$Metext','$time')")){
	echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url='megsuccess.php'\">"; 
	// echo "111";
}
else{
	echo "留言失败！再试一遍呗<META HTTP-EQUIV=\"refresh\" CONTENT=\"5;url='T-main.html'\">";
}

// if($row = mysql_fetch_array($result))
//   {
//   // echo $row['FirstName'] . " " . $row['LastName'];
//   // echo "<br />";
//   	echo "登陆成功！<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url='Tmainpage.html?uname=$uname'\">"; 
//   }else{
//   	echo "登录失败，该用户不存在...请重新登录<META HTTP-EQUIV=\"refresh\" CONTENT=\"2;url='T-main.html'\">";
//   }

?>