<!-- 提取留言信息页面 -->
<!DOCTYPE html>
<html>
<head>
	<title>welcome to here</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<link rel="stylesheet" type="text/css" href="Tmainpage.css">	
	<meta content="telephone=no" name="format-detection">
</head>
<body>

<div id="Tpage">
<div id="top-fiexd">
	<span class="item">
		<img id="logo" src="img/logo.png">
	</span>
	<span class="item"></span>
	<span class="item" id="item3">
	<?php echo "welcome,";echo$_COOKIE["usersname"];  ?>	

	</span>
</div>
<div id="Tpage-body">
	<div id="Tpage-top">
		<div id="Mesbox">
			<form id="Messageinput" action="message.php" method="POST">
				<textarea id="Metext" name="Metext"></textarea>
				<input id="messinp" type="submit" onclick="message()" value="发表">
			</form>
		</div>
	</div>
	<div id="Tpage-main">
		<div id="message">
			<span style="font-family:Comic Sans MS;font-size:14px;">
		
<table border="0" align="center" cellpadding="5" cellspacing="1" >  
<?php     
error_reporting(E_ERROR); 
ini_set("display_errors","Off");
// //屏蔽php警告
header("Content-type:text/html;charset=utf-8");
$con=mysql_connect("localhost:3306","root","sa123");
if (!$con) {
  die('Could not connect: ' . mysql_error());
  } 
  mysql_select_db("my_db", $con);
  $sql = "SELECT * FROM metexts order by mdate desc";  
  $query = mysql_query($sql);  
  while($row = mysql_fetch_array($query)){  
?>  
  
  <tr bgcolor="#eff3ff">  
  	<td><p>
  		<big>  
    		<?= $row['message']?>
    	</big>
    	<sup>  
    		<?= $row['uname']?>
    	</sup></p>
    	<sub>  
    		<?= $row['mdate']?>
    	</sub>
 	</td>  
  </tr>  
   
<?php   
  }  
?>  
</table>  
  
</span> 
		</div>
	</div>
</div>	
	<dir id="Tpage-foot">
		
	</dir>
</div>
</body>

</html>