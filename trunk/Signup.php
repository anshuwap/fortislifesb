 <?php
if(isset($_POST['register'])){
   $Username =$_POST['use'];
   $Password=$_POST['password'];
 mysql_connect("localhost","root","")or die("hii");
 mysql_select_db("fortislife");
 $result=mysql_query("insert into login values( '".$Username ."' ,'".$Password."')") or die(mysql_error());
	 if($result==1)
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
  <table bgcolor="#00CCCC" width="384" height="133" border="25" align="center" cellpadding="0" cellspacing="0">
    <tr align="center">
      <th colspan="3" align="center">Registration</th>
    </tr>
    <tr align="center">
      <td width="208" height="55" bgcolor="#66CCCC" color="red">Username</td>
      <td width="196"><label>
        <input name="user" type="text" id="user"size="30"/>
      </label></td>
    </tr>
    <tr align="center">
      <td bgcolor="#66CCCC" color="red">Password</td>
      <td><label>
        <input name="password" type="password" id="password"size="30" />
      </label></td>
    </tr>
    <tr valign="middle">
      <td height="35" colspan="2" align="center"><label>
        <input name="register" type="submit" id="register" value="register" />
        <h8><blink></blink></h8>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
