<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../admin/css/adminstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="pro_drop_1/pro_drop_1.css" />
<script src="pro_drop_1/stuHover.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {color: #FD6CAD}
-->
</style>
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
  		<font al color="" size="+6">Welcome Administrator</font><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title></title>
<div id="main">
  <div id="content">
 <?php
require("/model/connection.php");
?>

<form action="addLatest.php" method="post">
<td align="left"><input name="newmenu" type="submit" class="preload1" id="new_menu" value="Add New Latest"/></td>
</form><br>
<form action="addProcess.php" method="post">
 <table width="35%" border="0" align="center" cellpadding="0" cellspacing="0" class="logTab">
  <tr>
  <td colspan="10" align="right"></td>
        </tr>
        <tr>
          
          <td width="37%" align="center" class="preload2">Latest</td>
          
          <td width="29%" align="center" class="preload2">Check</td>
          <td width="34%" class="preload2" al>Choose</td>
        </tr>
   <?php 
$res=mysql_query("select Navigation from latets")or die(mysql_error());
	if(mysql_num_rows($res)>0){
	while($dat=mysql_fetch_array($res)){

?>		
        <tr>
          <td align="center" class="tbdat"><?php echo $dat[0];?></td>
            
          <td align="center"><a href="addPropertry.php?prId=<?php echo $dat[0];?>">Edit</a></td>

          <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $dat[0];?>" /></td>
</tr>
<?php 
 }
}else{?>		
<tr>
<td colspan="10" align="right"> Table Is Empty</td
></tr>
<?php }?>
        <tr>
          <td colspan="10" align="right"><input name="delete" type="submit" class="butt" id="delete" value="Delete" /></td>
        </tr>
      </table>
</form>
  </div>
</div>     
</body>
</html>
  		  
</div>
</div>
</body>
</html>