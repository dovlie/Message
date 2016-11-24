<?php
error_reporting(E_ERROR); 
ini_set("display_errors","Off");
// //屏蔽php警告
header("Content-type:text/html;charset=utf-8");
$uname=$_GET['username'];
$con = mysql_connect("localhost:3306","root","sa123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM user
WHERE uname='$uname'");

// if(mysql_fetch_array($result))
//   {
//   	$response="用户名已存在";
//   }else{
//   	$response="该用户名可用";
//   }

 if($rows=mysql_num_rows($result)) 
         {  
             $response="用户名已存在"; 
         }  
     else  
         {  
            $response="该用户名可用";
         }  

echo $response;

?>