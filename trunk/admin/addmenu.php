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
		<form action="viewmenu.php" method="post">
<table width="26%" height="91" border="2" align="center" bordercolor="#FF0000">
<tr class="preload2">
<?php
$dat=NULL;
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("fortislife")or die(mysql_error());

if(isset($_POST['update']))
{
$name=$_POST['sname'];
$id=$_POST['id'];
	
$resul=mysql_query("update heades SET Navigation='$name' where id='$id'") or die(mysql_error("hello"));
	header("Location:viewmenu.php");
}
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$pat=mysql_query("select * from heades where id=$id");
	$dat=mysql_fetch_array($pat);
	}	
	
?>

  <td class="preload2" height="23" colspan="2" align="center"><strong>Menus</strong></td>
</tr>
<tr>
<td width="39%" height="26">Navigation</td>
<td width="61%"><input type="text" name="sname" value="<?php echo $dat[1];?>" /></td>
</tr>
<tr class="preload2">
<td height="30" colspan="2" align="center">
<input type="submit" name="update" value="update" /></td>
 </tr>
</table>
</form>     
  		  
</div>
</div>
</body>
</html>