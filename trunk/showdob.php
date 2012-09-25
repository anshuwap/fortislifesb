<?php 
session_start();
$con=mysql_connect("localhost","root","") or die("Connection not established");
mysql_select_db("fortislife",$con)or die("Dtabase not selected");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
var xmlHttp
function GetState(s_id)
{ 
	xmlHttp=GetXmlHttpObject();
		if (xmlHttp==null)
		  {
		  alert ("Your browser does not support AJAX!");
		  return;
		  } 
var url="fortisexp.php";
	url=url+"?s_id="+s_id;// getState.php?c_id=2
	//alert(url);
	//url=url+"&sid="+Math.random();
	xmlHttp.onreadystatechange=RegionChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}

function RegionChanged() 
{ 
	if (xmlHttp.readyState==4)
	{ 
	//alert(xmlHttp.responseText);
	document.getElementById("result").innerHTML=xmlHttp.responseText;
	}
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	  {
	  // Firefox, Opera 8.0+, Safari
	  xmlHttp=new XMLHttpRequest();
	  }
	catch (e)
	  {
	  // Internet Explorer
	  try
		{
		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
	  catch (e)
		{
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	  }
	return xmlHttp;
}
// -->


</script>

</head>
<body bgcolor="#0099CC">
Speciality
<select name="test" onchange="return GetState(this.value);">
<option>-Select-</option>
<?php 
$rsult=mysql_query("select * from dob") or die(mysql_error());
while($dat=mysql_fetch_array($rsult)){
?>
<option value="<?php echo $dat['id']?>"><?php echo $dat['name']?></option>
<?php }?>
</select>
<div id="result"></div>
</body>
</html