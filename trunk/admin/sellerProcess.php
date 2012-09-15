<?php
include("model/connection.php");
include("model/dbhelper.php");
include("model/seller.php");
//$uObj=new userLogin();
$dbObj=new dbhelper();
$sellObj=new seller();
if(isset($_POST['submit'])){
	$dt=array('sellername'=>$_POST['sname'],'Address1'=>$_POST['add1'],'Address2'=>$_POST['add2'],'phoneno'=>$_POST['phno'],'sellertype'=>$_POST['stype']);
	if($dbObj->dataInsert($dt,'sellerdetails')){
	header("Location:viewseller.php");
	}
	else
	{
		echo "Not Inserteed";
	}
	}
	

if(isset($_POST['update'])){
	$dt=array('sellername'=>$_POST['sname'],'Address1'=>$_POST['add1'],'Address2'=>$_POST['add2'],'phoneno'=>$_POST['phno'],'sellertype'=>$_POST['stype']);
	if($dbObj->dataupdate($dt,'sellerdetails','Sellername',$_POST['sid'])){
header("Location:viewseller.php");
	}else{
		echo "Not Inserteed";
	}
	}
	
if(isset($_POST['delete'])){
	if($dbObj->datadel('sellerdetails','Sellername','checkbox'))
header("Location:viewseller.php");
}
?>
