<?php 
class seller {
	function showSeller($selectN,$tableN,$upID=NULL){
	//echo $upID;
	$resultMC=mysql_query("select * from $tableN where type='seller'") or die(mysql_error());
		?>
		<select name="<?php echo $selectN;?>" >
		<option value="0">-Select-</option>
		<?php
		if(mysql_num_rows($resultMC)>0){
		while($datMC=mysql_fetch_array($resultMC)){
		?>
		<option value="<?php echo $datMC[0];?>" <?php if($datMC[0]==$upID){ echo "selected='selected'"; }?>><?php echo $datMC[0];?></option>
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
?>