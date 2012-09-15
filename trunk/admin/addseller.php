<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>333 Acre :: Admin</title>
<link href="../css/adminstyle.css" rel="stylesheet" type="text/css" />
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
    </div>
  <div id="content">
  <font color="" size="+6">Welcome Administrator</font>
  <?php
include("model/connection.php");
include("model/dbhelper.php");
include("model/seller.php");
$dbObj=new dbhelper();
$sellObj=new seller();
$datseller=NULL; 
if(isset($_GET['sid'])){
	$sid=$_GET['sid'];
	$resul=mysql_query("select * from sellerdetails where Sellername='$sid'");
	$datseller=mysql_fetch_array($resul);
}
?>



<body bgcolor="#CC993">
<form action="sellerprocess.php" method="post">
<table width="25%" height="250" border="2" align="center" bordercolor="#FF0000">
<tr><td colspan="2" align="center"><U>ADDSELLER</U></td>
</tr>
<tr>
<td width="26%">sellerid
<td width="74%"><input type="hidden" name="sid"></td>
</tr>
<tr>
<td>sellename</td>
<td><input type="text" name="sname" value="<?php echo $datseller['Sellername'];?>"></td>
</tr>
<tr>
	<td>address1</td>
	<td><input type="text" name="add1" value="<?php echo $datseller['address1'];?>"></td>
	</tr>
	<tr>
	<td>address2</td>
	<td><input type="text" name="add2" value="<?php echo $datseller['address2'];?>"></td>
	</tr>
	<tr>
	<td>PhoneNo</td>
	<td><input type="text" name="phno" value="<?php echo $datseller['PhoneNo'];?>"></td>
	</tr>
	<tr>
	<td>sellertype</td>
	<td><input type="text" name="stype" value="<?php echo $datseller['SellerType'];?>"></td>
</tr>
<tr>
<td bgcolor="#9966FF">
<?php if(isset($_GET['sid'])){?>
<input type="hidden" name="sid" value="<?php echo $_GET['sid'];?>" />
<input type="submit" name="update" value="update">
<?php }else{?>
<input type="submit" name="submit" value="submit">
<?php }?></td>
</tr>
</table>
</form>
</body>
</html>
</div>
</div>     
</body>
</html>