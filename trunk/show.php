<?php
$ak=NULL;
session_start();
$un=$_SESSION['ak'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" height="176">
    <tr>
      <th height="18" align="right" valign="top" class="style1" scope="row"><center>
        <?php  if(isset($_GET['msg'])){
	  echo $_GET['msg'];
	  }?>
      </center>
      <b><?php echo $un ?><b>&nbsp;&nbsp;&nbsp;&nbsp; <a href="logout.php">Logout</a></th>
    </tr>
	</table>
</form>
</body>
</html>
