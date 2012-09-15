<?php
class connection{
	private $Hostname;
	private $dbUserName;
	private $dbUserPass;
	private $dbName;
	private $con;
		 
	public function __construct($hostname=null,$username=null,$password=null,$dbname=null)
	{
	$this->Hostname=$hostname;
	$this->dbUserName=$username;
	$this->dbUserPass=$password;
	$this->dbName=$dbname;
	
	$this->con = mysql_connect($this->Hostname,$this->dbUserName,$this->dbUserPass) or die("ERROR:Connection is not established");
	
	mysql_select_db($this->dbName,$this->con)or die("ERROR:Database is not selected");
	//echo "hi";
	}
}
$conObj=new connection('localhost','root','','dealer');
?>