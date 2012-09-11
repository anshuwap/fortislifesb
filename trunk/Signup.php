 <?php
if(isset($_POST['Submit'])){
   $Username =$_POST[Username ];
   $Password=$_POST[Password];
 mysql_connect("localhost","root","")or die("hii");
 mysql_select_db("fortislifesb");
 $result=mysql_query("insert into login values( '".$Username ."' ,'".$Password."')") or die(mysql_error());
	 if($result>0)
	 {
	     header("location:index.php");
	 }
	 else
	 {
	   header("location:register.php");
	   }
       
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="339" align="center">
    <tr>
      <th colspan="2" scope="col">Signup</th>
    </tr>
    <tr>
      <td width="134">username</td>
      <td width="193"><input type="text" name="Username " /></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="text" name="Password" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
