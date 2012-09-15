<?php
session_start();
@$un=$_SESSION['ak'];
?>

<ul id="nav">
	<li class="top"><a href="welcomeadmin.php" class="top_link"><span>Home</span></a></li>
	<li class="top"><a href="viewmenu.php" id="products" class="top_link"><span class="down">Viewmenu</span></a>	</li>
	<li class="top"><a href="viewfooter.php" id="services" class="top_link"><span class="down">viewFooter</span></a>  </li>
			<li class="top"><a href="viewlatest.php" id="services" class="top_link"><span class="down">viewLatest</span></a>			</li>
	
	<li class="top">
      <b><b>&nbsp;&nbsp;&nbsp;&nbsp;
	  <a href="logout.php" class="top_link"><span>Logout</span></a> <?php echo "Welcome"."&nbsp;"."&nbsp;".$un; ?> </li>    
</ul>
