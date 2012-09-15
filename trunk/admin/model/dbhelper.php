<?php 
class dbHelper{
			 
	public function dataInsert($data,$tblName){		//$data=array('empid'=>'EMp13','ename'=>'sunil','depno'=>20')
	 		$query="insert into ".$tblName." ("; //insert into  emp(
			$intCol=null;
			$intVal=") values ('";
			$indx=1;
			 foreach($data as $colu=>$value){
			 if($indx==count($data)){
			 $intCol.=$colu;//empid,ename,depno
			 $intVal.=$value."'";//) values ('EMp13','sunil','20'
			 }else{
			 $intCol.=$colu.",";//empid,ename,
			 $intVal.=$value."','";//) values ('EMp13','sunil','
			 }
			 $indx++;
			 } 
			  $query.=$intCol.$intVal." )";//insert into  emp(empid,ename,depno) values ('EMp13','sunil','20')
			 //echo $query;
			 $resu=mysql_query($query) or die(mysql_error());
			if($resu){ return 1;}else{return 0;}
	 }	
		
		public function dataupdate($data,$tblName,$colname,$val)
		{
		$query="UPDATE ".$tblName." SET  "; 
		//$intCol=null;
		 $intSet=null;
			$indx=1;
			 foreach($data as $col=>$value)
			 {
			 if($indx==count($data)){
			 $intSet.=$colu."='".$value."'";
			 //$intVal=$value."'";
			 }else{
			 $intSet.=$colu."='".$value."',";
			 	 }
			 $indx++;
			 }
			 $query.=$intSet." where ".$colname." = '".$val."'" ;
			// echo $query;
			$resu=mysql_query($query)or die(mysql_error());
			 if($resu){ return 1;}else{return 0;} 
		
		}
		
		
		public function datadel($tblName,$intCol,$select)
		{
				for($i=0;$i<count($_POST[$select]);$i++)
			{  
			$mId=$_POST[$select][$i];
       		$query="delete from ".$tblName." where ".$intCol." = '".$mId."'";	
		  // echo $query;
			 $result=mysql_query($query) or die(mysql_error());
	
			}
			 if($result){ return 1;}else{return 0;} 
		}
		
		
		
		public function datashow($data,$tblName)
		{
		
		
		
		}
}
?>