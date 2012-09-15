<?php
class model{
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
			 foreach($data as $colu=>$value)
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
			 //echo $query;
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
$cObj=new model("localhost","root","","deals");
/*$data=array('empid'=>'EMp16','ename'=>'sunil','deptno'=>'20');
$obj=new model("localhost","root","","mydb");
$obj->dataInsert($data,"emp");
//echo "<br>";
$data=array('ename'=>'GH','deptno'=>'10');
//$obj=new model("localhost","root","","mydb");
$obj->dataupdate($data,"emp","empid","emp4");
$data=array('empid'=>'EMp16','ename'=>'sunil','deptno'=>'20');
$obj->datadel("emp","empid","$mId");*/
class userLogin{
		function userLogin(){
			session_start();
			
			}
		public function login($username,$password,$sesName,$redPage)
		{
		//echo "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
		$result=mysql_query("SELECT * FROM login WHERE username = '$username' AND password = '$password'")	 or die("Select Error");
if(mysql_num_rows($result)>0){
//session_start();
$_SESSION[$sesName]=$username;
?>
<script>location.href="../project/<?php echo $redPage;?>"</script>
<?php 		
	}else{
		$msgErr="Username Or Password Is Incorrect";
		?>
<script>location.href="../project/index.php?msgErr=<?php echo $msgErr;?>"</script>
<?php
		}
		
	}
	
	function sessionCheck($sessName,$redPage){
		if(empty($_SESSION[$sessName])){
			?>
			<script>location.href="./<?php echo $redPage;?>"</script>			
			<?php
		}
	}
	
public function dataInsert($table, $data, $exclude = array()) {
 
    $fields = $values = array();
 
    if( !is_array($exclude) ) $exclude = array($exclude);
 
    foreach( array_keys($data) as $key ) {
        if( !in_array($key, $exclude) ) {
            $fields[] = "`$key`";
            $values[] = "'" . mysql_real_escape_string($data[$key]) . "'";
        }
    }
 
    $fields = implode(",", $fields);
    $values = implode(",", $values);
 
    if( mysql_query("INSERT INTO `$table` ($fields) VALUES ($values)") ) {
        return array( "mysql_error" => false,
                      "mysql_insert_id" => mysql_insert_id(),
                      "mysql_affected_rows" => mysql_affected_rows(),
                      "mysql_info" => mysql_info()
                    );
    } else {
        return array( "mysql_error" => mysql_error() );
    }
 
}
	protected function getUserSession($uSessNam){
		return $_SESSION[$uSessNam];
		}
		
		
		
	public function showdata($data,$tblName)
	{
	
	
	}
	
	
	
	
	
	
	
	
	
		
		
		
		
		
		
	}

class categories {
	function showMainCat($selectN,$tableN,$onChange=NULL){
	$resultMC=mysql_query("select * from $tableN") or die(mysql_error());
		?>
		
		
		

		<select name="<?php echo $selectN;?>" onchange="<?php echo $onChange;?>">
		<option value="0">-Select-</option>
		<?php
		if(mysql_num_rows($resultMC)>0){
		while($datMC=mysql_fetch_array($resultMC)){
		?>
		<option value="<?php echo $datMC[0];?>"><?php echo $datMC[1];?></option>
		<?php			
			}
			
		}else{
		?>
		<option value="0">Not Avaliable</option>
		<?php
		}
		?>
		</select>
		<?php
	}
		function showSubCat($selectN,$tableN){
	$resultSC=mysql_query("select * from $tableN") or die(mysql_error());
		?>
		<select name="<?php echo $selectN;?>">
		<option value="0">-Select-</option>
		<?php
		if(mysql_num_rows($resultSC)>0){
		while($datSC=mysql_fetch_array($resultSC)){
		?>
		<option value="<?php echo $datSC[0];?>"><?php echo $datSC[2];?></option>
		<?php			
			}
			
		}else{
		?>
		<option value="0">Not Avaliable</option>
		<?php
		}
		?>
		</select>
		<?php
	}

	}
	class book extends model{
		
		function book(){
			parent::__construct("localhost","root","","onlinebookG" );
			$_SESSION['cart']=array();
		}
		public function addToCart($pid){
		//echo "ff";
			if(empty($_SESSION['cart'][$pid])){
					$_SESSION['cart'][$pid]=1;	
				}else{
					$_SESSION['cart'][$pid]+=1;
					}
		}
	function cartRemoveItem($bid){
			foreach($_SESSION['cart'] as $i=>$b_id){
				if($i==$bid){
					if($_SESSION['cart'][$i]>0){
					$_SESSION['cart'][$i]-=1;}else{
						unset($_SESSION['cart'][$i]);
						}
			//	break;
					}
				}					
			}			

		function upload($ftextN,$upfolder,$addDb=NULL){		
						$target="../".$upfolder."/";
						$fname=$_FILES["$ftextN"]['name'];
						$fsize=$_FILES["$ftextN"]['size'];
						$ftype=$_FILES["$ftextN"]['type'];
						$ftmpname=$_FILES["$ftextN"]['tmp_name'];
						$ferror=$_FILES["$ftextN"]['error'];
						echo $target=$target.$fname;//uploadfiles/xyz.txt
						//die;
								if(move_uploaded_file($ftmpname,$target)){
							//	echo "hii";
									if(!empty($addDb)){
											$bId=mysql_insert_id();									
			$upData=array('ebookN'=>$fname,'ebookS'=>$fsize,'ebookT'=>$ftype);
								$upRes=$this->dataupdate($upData,"book","bookId",$bId);
										if($upRes){
												return 1;		
											}
										}
								}else{
								return 0;
								}
				}
			function latestBooks($nofday){
							$unxDate=mktime(0,0,0,date('m'),date('d'),date('y'));
							$nxdat=$unxDate-(86400*$nofday);
							$preDate=date("Y-m-d",$nxdat);		
							//echo   "select bookId,name,entryDate from book where entryDate<='".date("Y-m-d")."' AND entryDate>='".$preDate."'";
				$result=mysql_query("select bookId,name,entryDate from book where entryDate<='".date("Y-m-d")."' AND entryDate>='".$preDate."'") or die(mysql_error());?>
<table width="100%" cellpadding="0" cellspacing="0"><tr><td class="allCateg" align="center" >Latest Books</td></tr>
<tr><td class="latestBook" height="16"><?php if(mysql_num_rows($result)>0){?>
					<ul id="MenuBar2" class="MenuBarVertical">							
							<?php	while($dataBC=mysql_fetch_array($result)){?>
									 <li><a href="index.php?ct=l&id=<?php echo $datSCat[0];?>"><?php echo $dataBC['name'];?></a></li>
						<?php		}	?>
						</ul>
								<?php 
								}else{
								echo "No Latest Book";
								}
						?>
						</td></tr>
						</table>
						<?php		
			}	
			public function makeDiscount($disPerct,$bid){
					$dat=array("discount"=>$disPerct);
					if($this->dataupdate($dat,"book","bookid",$bid)){return 1;}else{return 0;}
				}	
			public function getBook($id){
					$bkResult=mysql_query("select bookId, sbn, name, mainCategory, subCategory, price, discount, auther, entryDate, ebookN, ebookS, ebookT,sname,catname,bookImg from book,subcat,category where subCategory=subCatid AND mcatid=catid AND bookId=$id")or die(mysql_error());
					$bkDat=mysql_fetch_array($bkResult);
					return $bkDat;
				}	
			public function listBooks($scat=NULL,$mcat=NULL,$snam=NULL){ ?>
								<table border="0" cellspacing="0" cellpadding="0" width="100%">
				
				<?php //subCategory
			$sqlCond="where discount>0";	
			if(!empty($scat)){
				 $sqlCond="where subCategory=$scat";
				}else if(!empty($mcat)){
					$sqlCond="where mainCategory=$mcat";
						}else if(!empty($snam)){
							$sqlCond="where name LIKE '%$snam%'";
							}
						
				$rel=mysql_query("select * from book ".$sqlCond) or die(mysql_error());
				$bktd=0;
			if(mysql_num_rows($rel)>0){	
				while($bkDat=mysql_fetch_array($rel)){
					if($bktd%4){?>
				<td align="center" class="listfDsBk">
                <?php echo $bkDat['name'];?><br> 
				<img src="admin/books/booksimages/<?php echo $bkDat['bookimg'];?>" border="1px" width="109" height="110">
				
				<br><span class="oldPrice"><?php echo "Price ".$bkDat['price'];?></span>
                <br />Discount <?php echo $bkDat['discount']."%";?>
                <br><?php echo "New Price ".$bkDat['price'];?>
				<br><a href="index.php?adCrt=Y&bC=<?php echo $bkDat['bookId'];?>">Add To Cart</a>
				</td>	
				
				<?php	$bktd++;	
						}else{
							?>
				</tr><tr><td align="center" class="listfDsBk">
<?php echo $bkDat['name'];?><br> 
				<img src="admin/books/booksimages/<?php echo $bkDat['bookimg'];?>" border="1px" width="109" height="110">
				
				<br><span class="oldPrice"><?php echo "Price ".$bkDat['price'];?></span>
                <br />Discount <?php echo $bkDat['discount']."%";?>
                <br><?php echo "New Price ".$bkDat['price'];?>
				<br><a href="index.php?adCrt=Y&bC=<?php echo $bkDat['bookId'];?>">Add To Cart</a>
				</td>	
				
				<?php
					$bktd++;
						}
				}
				?>
				</tr>
                <?php 
			}else{ ?> <tr><td colspan="4" align="center"> No Books Are Avaliable</td></tr><?php }
				?>
				</table><?php
				}
				
			public function viewCart(){
			//print_r($_SESSION['cart']);
				?>
              <table width="90%" border="0" cellspacing="4" cellpadding="0">
                  <tr class="viewCartHed">
                    <td align="center" colspan="6">Cart</td>
                    </tr>
     <?php   if(!empty($_SESSION['cart'])){			?>
                  <tr class="viewCartHed">
                    <td width="16%" align="center">Book</td>
                    <td width="16%" align="center">Price</td>
                    <td width="16%" align="center">Discount</td>
                    <td width="16%" align="center">Cost</td>
                    <td width="18%" align="center">Quantity</td>
                    <td width="18%" align="center">&nbsp;</td>
                  </tr>
				<?php 
					$totalpri=0;
		
			if(count($_SESSION['cart'])>0){						
				foreach($_SESSION['cart'] as $bid=>$qnty){ 
					$bk=$this->getBook($bid);
				?>
                  <tr>
                    <td align="center"><img src="admin/books/booksimages/<?php echo $bk['bookImg'];?>" width="90" height="95" border="2" /><br />
                    <?php echo $bk['name'];?>
                   <br />
                    <?php echo $bk['sbn'];?>
                    </td>
                    <td align="center"><?php echo $bk['price'];?></td>
                    <td align="center"><?php echo $bk['discount'];?></td>
                    <td align="center"><?php if($bk['discount']>0){echo $nprice=$bk['price']-($bk['price']/100)*$bk['discount'];}else{	echo $nprice=$bk['price'];}
					?></td>
                    <td align="center"><?php echo $qnty;?>&nbsp;&nbsp;
                     <a href="viewCart.php?bid=<?php echo $bid;?>">Remove</a></td>
                    <td align="center"><?php echo $np=$qnty*$nprice;
					$totalpri+=$np;
					?></td>
                  </tr>
                  <?php }
				   }else{ ?>
                   <tr>
                    <td align="center" colspan="6" class="errMsg">Cart Is Empty</td>
                    </tr>
                   <?php }?>
                  <tr class="viewCartHed">
                    <td align="right" colspan="5" >Total Cost</td>
                    <td align="center"><?php echo $totalpri;?></td>
                  </tr>
                  <?php }else{?>
                  <tr><td colspan="6" class="errMsg" align="center">Cart Is Empty</td></tr>
                  <?php }?>
                </table>
				<?php
				}		
				
}
?>

