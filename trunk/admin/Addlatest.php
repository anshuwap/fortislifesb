<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../admin/css/adminstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="pro_drop_1/pro_drop_1.css" />
<script src="pro_drop_1/stuHover.js" type="text/javascript"></script>
</head>
<body>

<div id="main">
  <div id="header"></div>
    <div id="menu">
<!--Menu start-->  
	<?php include("header.php");?>
<!--Menu end-->  
    
  <div id="content" align="center">
  <br>
    <br>
  		<font al color="" size="+6">Welcome Administrator</font>
		<form action="sellerprocess.php" method="post" enctype="multipart/form-data">
<table width="26%" height="91" border="2" align="center" bordercolor="#FF0000">
<tr>
  <td height="23" colspan="2" align="center"><strong>News</strong></td>
</tr>
<tr>
<td width="39%" height="26">Latest</td>
<td width="61%"><input type="text" name="sname" value=""></td>
</tr>
<tr>
<td width="39%" height="26">Image</td>
<td width="61%"><input type="file" name="file" /></td>
</tr>
<tr>
<td width="39%" height="26">Time</td>
<td width="61%"><input type="text" name="sname" value=""></td>
</tr>

<tr>
<td height="30" colspan="2" align="center"><input type="submit" name="Submit" value="Submit" /></td>
</tr>
</table>
</form>     
  		  
</div>
</div>
</body>
</html>