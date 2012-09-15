
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>333 Acre :: Admin</title>
<link href="../css/adminstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="pro_drop_1/pro_drop_1.css" />

<script src="pro_drop_1/stuHover.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
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
    </div>
  <div id="content">

  <?php
require("/model/connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>



<body bgcolor="#9999FF">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><form action="addseller.php" method="post" >
      <input name="new_seller" type="submit" class="butt" value="Add New Seller">
    </form>
    <br />
    </td>
  </tr>
  <tr>
<!-- -->    <td><form action="sellerprocess.php" method="post">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="tbhed">
          <td width="4" align="center" height="31">S.No.</td>	
          <td width="192" height="31">sellename</td>
          <td width="222" >address1</td>
          <td width="220" >address2</td>
          <td width="140" >PhoneNo</td>
          
          <td width="59" ></td>
          <td width="48" ></td>
        </tr>
        <?php 
$res=mysql_query("select Sellername,address1,address2,PhoneNo from sellerdetails")or die(mysql_error());
	if(mysql_num_rows($res)>0){
		$n=1;
	while($dat=mysql_fetch_array($res)){

?>
        <tr class="tbdat">
        <td width="4" align="center" ><?php echo $n;?></td>	
          <td><?php echo $dat[0];?></td>
          <td><?php echo $dat[1];?></td>
          <td><?php echo $dat[2];?></td>
          <td><?php echo $dat[3];?></td>
          <td><a href="addseller.php?sid=<?php echo $dat[0];?>">Edit</a></td>
          <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $dat[0];?>" /></td>
        </tr>
        <?php 
		$n++;
		}
}else{?>
        <tr>
          <td colspan="9" align="right"> Table Is Empty</td>
        </tr>
        <?php }?>
        <tr>
          <td colspan="9" align="right"><input name="delete" type="submit" class="butt" id="delete" value="Delete"/></td>
        </tr>
      </table>
    </form></td>
  </tr>
 </table>
</body>
</html>

   		  
  		  </div>
</div>     
</body>
</html>