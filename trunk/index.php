
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">

<title>Home - Fortis Life SB</title>



<link type="text/css" rel="stylesheet" href="./index_files/css" media="screen">
<link type="text/css" rel="stylesheet" href="./index_files/combo-65-20120831.css" media="screen">
<link type="text/css" rel="stylesheet" href="./index_files/responsive.css" media="screen">
<script language="javascript1.5">
	function valid(){
		if(document.regist.user.value==''){
			alert("Please Enter The user Name");
			return false;
			}else if(document.regist.password.value==''){
			alert("Please Enter The passward Name");
			return false;
			}else{
				return true;
				}
		}

</script>



</head>

<body class="page-home page-home-home no-padding-top">
<div id="top-of-body"></div>


<!-- Come'on, no Javscript? Really?! -->
<noscript>&lt;div id="flash" class="notice-bar alert-message info"&gt;&lt;span&gt;&lt;strong&gt;Whoops!&lt;/strong&gt; We require that you enable Javascript for optimal user experience.&lt;/span&gt;&lt;/div&gt;</noscript>
<!-- The Actual Content -->
<div id="header">
<div class="navbar navbar-fixed-top">
     <div id="top-pixel-bar"></div>
     
     <div class="navbar-inner">
          <div class="container">
               <ul class="nav">
                    <!-- Logo Link -->
 <li class="logo"><a href="#"><img src="./index_files/logo-color.jpg" alt="Fortis" width="242" height="40"></a></li>
                                        <li class="show-more">
                          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </a>
                    </li>
               </ul>
              <div class="nav-collapse">
                    <!-- Right Navigation -->
                    <ul class="nav pull-right">

					
                    <?php
mysql_connect ("localhost","root","");
mysql_select_db ("fortislife");
$query = mysql_query("select * from heades where id=1");
while ($row = mysql_fetch_array($query)) {
          ?>  
<li class="parent "><a href="http://www.mypal.com" class="parent-link"><?php echo $row[1];?></a><?php }?></li>
<?php
$query = mysql_query("select * from heades where id=2");
while ($row = mysql_fetch_array($query)) {
          ?>  

<li class="parent "><a href="#" class="parent-link"><?php echo $row[1];?></a><?php }?></li>
                         <?php
      $query = mysql_query("select * from heades where id=3");
         while ($row = mysql_fetch_array($query)) {
          ?>  

                         
                                                  
 <li class="parent "><a href="#" class="parent-link"><?php echo $row[1];?></a><?php }?></li>
 <?php
      $query = mysql_query("select * from heades where id=4");
         while ($row = mysql_fetch_array($query)) {
          ?>  

                         
<li class="parent "><a href="#" class="parent-link"><?php echo $row[1];?></a> <?php }?></li>
<?php
      $query = mysql_query("select * from heades where id=5");
         while ($row = mysql_fetch_array($query)) {
          ?>    
<li class="parent "><a href="" class="parent-link"><?php echo $row[1];?></a><?php }?></li>
                         
                                                 <li class="parent about-page ">
                           
 <?php
      $query = mysql_query("select * from heades where id=6");
         while ($row = mysql_fetch_array($query)) {
          ?>
  <li class="parent "><a href="http://www.fortishealthcare.com/fortishealthcare-aboutus.html" class="parent-link"><?php echo $row[1];?></a><?php }?></li>
                      <li class="parent "><a href="#" class="parent-link"></a></li>
							  
                         </li>
 <?php 
 
 $today = date("d.m.y");  
echo "<b>"."Today"."&nbsp;".$today."</b>";
 if(isset($_POST["submit"])){
$result=mysql_query("select * from login where Username ='$_POST[user]' AND  Password='$_POST[password]'") or die(mysql_error());
if(mysql_num_rows($result)>0){
	  session_start();
	  $_SESSION['ak']=$_POST['user'];
//	echo " $user";
	  ?>
    <script>location.href="admin/welcomeadmin.php"</script>
    <?php
	  }
	  else
	  {
	  echo "<u>". "<B>"." Not valid user"."</B>"."</u>"."<br>";
	  }
	  
 }

?>     
                         <li class="divider-vertical"></li>
                                                       <li class="parent hidden-desktop  "><a href="#" class="parent-link">Login</a></li>
                              
                              <li class="parent visible-desktop dropdown login-dropdown">
   <a href="./index_files/index.html" class="dropdown-toggle parent-link" data-toggle="dropdown">
   Login <b class="caret"></b></a>
 <div class="dropdown-menu login-dropdown-form">
<form id="regist" name="regist" action="" method="post"onsubmit="return valid();">
										<div style="display:none">
<input type="hidden" name="form_key" value="765c6175a0ed479b94efaabc59c0531c">
</div>                                             <label>
                                                  <span>Username</span>
                                                  
                                                  <input type="text" name="user" id="user">
                                             </label>
                                             
                                             <label>
                                                  <span>Password</span>
                                                  
                                         <input type="password" name="password" class="span3" id="password">
                                             </label>
                                             
                                             <div class="form-actions">
                                                  <input type="submit" name="submit" class="btn btn-primary btn-large" value="Log in"> 
                                                  <span class="signup"><a href="signup.php">Signup!</a></span>                                             </div>
                                        </form>                                   </div>	
                              </li>
                </ul>
            </div><!-- .nav-collapse -->
          </div>
     </div><!-- .navbar -->
</div>


<div class="ntfy-flyout-wrap" id="ntfy-flyout-wrap">
     <!-- The flyout menu -->
     <div class="flyout" id="ntfy-flyout" style="display:none;">
          <div class="inner-flyout">
               <!-- We're going to append them here -->
               <div id="ntfy-item-holder"></div>
               
               <!-- This is removed once it's loaded via AJAX -->
               <a href="http://teensintech.com/notifications" id="ntfy-first-poll-holder">
                    <div class="single-notification no-author system-center" note-id="1" align="center">
<span class="notification-content"><center><img src="./index_files/ajax-loader-black.gif" class="notify-loading-img"> Loading</center></span>
                    </div>
               </a>
          </div>
     </div>
</div>
</div> <!-- #header --><section id="spotlight" class="events">
<iframe src="http://localhost/fortislifesb/nivo/demo/demo.html" width="1360" height="300" scrolling="no" style="margin-top:-80px; margin-left:-10px; position:absolute;z-index:-1;"></iframe>
  <div class="">
   
  
          <div class="wrap">
          <?php
      $query = mysql_query("select * from footer where id=1");
         while ($row = mysql_fetch_array($query)) {
          ?>
               <h1><?php echo $row[1];?></h1><?php }?>
               <?php
      $query = mysql_query("select * from footer where id=2");
         while ($row = mysql_fetch_array($query)) {
          ?>
         <h5><?php echo $row[1];?> .</h5><?php }?>
          </div>
  </div>
</section>

<!-- Content -->
<section class="content">
     <div class="container">
          
          <div class="row portal-columns">
          
               <div class="span4 col col-job-posts">
                    <!-- <h3>Current Discussions</h3> -->
                    <div class="col-inner"><!-- Latest section is being pulled from here please refer to db if you want to see what is happening -->
                    <ul class="discussion-listing normal-list floater">
                    <?php 
                    $query = mysql_query("select * from latest where id=1");
                    
                     while ($row = mysql_fetch_array($query)) {
           
                                         ?>                    
                                         
                        
                    <li  class="title"><?php echo $row[1];?></li><?php }?></ul>

                         <ul id="news"  class="discussion-listing normal-list floater"  >
                              
                                                  <?php 
                    $query = mysql_query("select * from latest where id=2");
                     while ($row = mysql_fetch_array($query)) {
           
                                         ?>
                                                            <li class="link" >
                                   <a href="http://teensintech.com/discussions/the-incubator-for-out-of-towne" class="link-wrap">
                                        <img src="./index_files/<?php echo $row[2]; ?>" class="avatar" height="50" width="50">
                                        <div class="item-content">
              
                                             <h4><?php echo $row[1];?></h4>
                                          
                                             
                                             <span class="listing-time"><?php echo $row[3];?></span><?php }?>
                                        </div>
                                   </a>
                           </li>
                                                            <li class="link">
                                           <?php $query = mysql_query("select * from latest where id=3");
                                           while ($row = mysql_fetch_array($query)) {?>
               
                                   <a href="http://teensintech.com/discussions/startup49-inhouse-developer-n-auxn" class="link-wrap">
                                        <img src="./index_files/<?php echo $row[2]; ?>" class="avatar" height="60" width="60">
                                        <div class="item-content">
                                             <h4><?php echo $row[1]; ?></h4>
                                             <span class="listing-time"><?php echo $row[3]; ?></span><?php }?>
                                        </div>
                                   </a>
                           </li>
						
                                                                    
                                                                          
                            <li class="link">
                                                 <?php $query = mysql_query("select * from latest where id=4");
                                                             while ($row = mysql_fetch_array($query)) {?>
                                   <a href="http://teensintech.com/discussions/so-i-was-making-a-slide-deck-ujbq" class="link-wrap">
                                        <img src="./index_files/<?php echo $row[2]; ?>" class="avatar" height="60" width="60">
                                        <div class="item-content">
                                             <h4><?php echo $row[1]; ?></h4>
                                             <span class="listing-time"><?php echo $row[3]; ?></span><?php }?>
                                        </div>
                                   </a>
                           </li>
                                                            <li class="link">
                    <?php $query = mysql_query("select * from latest where id=5");
                     while ($row = mysql_fetch_array($query)) {?>
                                   <a href="http://teensintech.com/discussions/looking-for-staff-without-the-payroll-vvycq" class="link-wrap">
                                        <img src="./index_files/<?php echo $row[2]; ?>" class="avatar" height="60" width="60">
                                        <div class="item-content">
                                             <h4><?php echo $row[1]; ?></h4>
                                             <span class="listing-time"><?php echo $row[3]; ?></span><?php }?>
                                        </div>
                                   </a>
                           </li>
                                                            <li class="link">
					<?php $query = mysql_query("select * from latest where id=6");
                     while ($row = mysql_fetch_array($query)) {?>
                        <a href="http://teensintech.com/discussions/got-an-exciting-student-run-venture-get-funding-thkjm" class="link-wrap">
                                        <img src="./index_files/<?php echo $row[2]; ?>" class="avatar" height="60" width="60">
                                        <div class="item-content">
                                             <h4><?php echo $row[1]; ?></h4>
                                             <span class="listing-time"><?php echo $row[3]; ?></span><?php }?>
                                        </div>
                                   </a>
                           </li>
                      </ul><hr>
                    <ul class="discussion-listing normal-list floater">
                                        
                        <?php $query = mysql_query("select * from birth where date='17'AND month='06'");
                     while ($row = mysql_fetch_array($query)) {?>
                    
                    <li class="title"><?php echo $row[0]; ?> Today His Day</li></ul>
                    <ul id="news" class="discussion-listing normal-list floater newsticker">
                              
    <li class="link" style="display: list-item; ">
                                                          
  <a href="http://teensintech.com/discussions/startup49-inhouse-developer-n-auxn" class="link-wrap">
                                                                                <div class="item-content">
                                             <span class="listing-time"><b><?php echo $row[1]; ?>/<?php echo $row[2]; ?>/<?php echo $row[3]; ?></b></span> <?php }?>                                       </div>
                                   </a>
                                                                 </li>
						
                                                                    
                                                                          
                      </ul>
                    
                    </div>
                    
          </div>
               
       </div>
          <!-- Newsletter Prompt -->
          <div class="newsletter-prompt">
               <div class="row">
                    <div class="span6 left">
                         <h3>Want to stay up to date?</h3>
                         <p>Signup for our newsletter and we can alert you of the latest news and tips about young entrepreneurs.</p>
                    </div>
                    <div class="span5 right">
                         <form action="http://teensintech.us1.list-manage.com/subscribe/post" method="post" accept-charset="utf-8">                              <input type="hidden" name="u" value="bac9748b89c8581e1af0ea1fc">
                              <input type="hidden" name="id" value="b8cd2ebaf0">
                              
                              <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" placeholder="email@domain.com�" class="email-input"> <input type="button" class="btn btn-green btn-large" value="Sign me up!">
                         </form>                    </div>
               </div>
          </div>
     </div>
</section>
<!-- /Content --><div id="footer">
     <div class="container">
          <div class="row">
               <div class="span9">
                    <ul class="links">
                         <li class="twitter">
                              <a href="http://twitter.com/teensintech/">Follow us on Twitter</a>
                         </li>
                         
                         <li><a href="about">About</a></li>
                                                  <li><a href="#">Blog</a></li>
                         <li><a href="">Medtrak Training</a></li>
                         <li><a href="">MY Pal HR</a></li>
                         <li><a href="">Terms Of Use</a></li>
                         <li><a href="">Privacy</a></li>
                    </ul>
                                        <p class="">� 2012 <a href="http://fortishealthcare.com/">Fortis Hospital Shalimar Bagh, </a> � Made with love in <a href="#">Upscale</a> and IT � We ? <a href="#">Cloud</a> and <a href="#">Amazon</a></p>
               </div>
               
               <div class="hidden-phone right">
               <div class="span3" style="width:240px;">
                    <a href="#"><img src="./index_files/logo-color.jpg" width="242" height="50" class="tipsy" data-original-title="FORTIS LIFESB"></a>
               </div>
               </div>
          </div>
     </div>
</div>

<script type="text/javascript" src="./index_files/jquery.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./index_files/bootstrap.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./index_files/combo-65-20120831.js" charset="UTF-8"></script>
<script type="text/javascript" src="./index_files/jquery.newsticker.js" charset="UTF-8"></script>

<script type="text/javascript">
$(
	function()
	{
		// drop shadow effect
		var $outer = $("#outer");
		var width = $outer.css("width");
		var css = {
			"margin": "12px auto",
			"width": $outer.css("width"),
			"background": "#073e8f" 
		}
		$outer.css({"width": "auto", "left": -3, "top": -3, "margin": 0}).wrap(document.createElement("div")).parent().css(css).after(document.createElement("div"));
	}
);
</script> 
<script type="text/javascript">
$(document).ready(
	function()
	{
		$("#news").newsTicker();
		
	}
);
</script>
<!-- <style type="text/css"> -->
<!-- .newsticker { -->
<!-- 	list-style-type: none; -->
<!-- 	border: 1px dashed #fff; -->
<!-- 	background: #050c44; -->
<!-- 	padding: 3px; -->
<!-- 	margin: 0; -->
<!-- } -->
<!-- </style> -->



<script type="text/javascript">

$(document).ready(function () {
     });

</script>




<!-- End Javascript -->

<div id="feedback-link"><div class="feedback-inner">
  <a href="https://www.google.co.in/">Feedback?</a>
  <a href="https://www.facebook.com">Facebook?</a>
  <a href="https://www.twitter.co.in/">Twitter?</a>
  <a href="https://www.google.co.in/">Linkdin?</a>
  </div>
</div>
<div id="loading" style="display:none;">Loading�</div>
 

<div id="cortex-pie-0" class="cortex-pie" style="display: none; "><svg style="overflow: hidden; position: relative; " height="342" version="1.1" width="512" xmlns="http://www.w3.org/2000/svg"><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 0; " x="0" y="0" width="1366" height="768" r="0" rx="0" ry="0" fill="#000000" stroke="#000" fill-opacity="0" stroke-opacity="0"></rect>
<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); ">Created with Mithun&amp; Abhilash�l 2.1.0</desc>
<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); "></defs><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 0; " fill="#95e4e8" stroke="#000000" d="M0,0L10,0L10,10L0,10Z" stroke-opacity="0"></path><image style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); " x="0" y="0" width="10" height="10" preserveAspectRatio="none" href="chrome-extension://decglnkhpfoocpafihfbeodhgofefaoc/images/icons/twitter.png"><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 0; " fill="#6481b5" stroke="#000000" d="M0,0L10,0L10,10L0,10Z" stroke-opacity="0"></path><image style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); " x="0" y="0" width="10" height="10" preserveAspectRatio="none" href="chrome-extension://decglnkhpfoocpafihfbeodhgofefaoc/images/icons/facebook.png"><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 0; " fill="#545b6c" stroke="#000000" d="M0,0L10,0L10,10L0,10Z" stroke-opacity="0"></path><image style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); " x="0" y="0" width="10" height="10" preserveAspectRatio="none" href="chrome-extension://decglnkhpfoocpafihfbeodhgofefaoc/images/icons/tumblr.png"><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 0; " fill="#df5747" stroke="#000000" d="M0,0L10,0L10,10L0,10Z" stroke-opacity="0"></path><image style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); " x="0" y="0" width="10" height="10" preserveAspectRatio="none" href="chrome-extension://decglnkhpfoocpafihfbeodhgofefaoc/images/icons/gmail.png"><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 0; " fill="#ff78be" stroke="#000000" d="M0,0L10,0L10,10L0,10Z" stroke-opacity="0"></path><image style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); " x="0" y="0" width="10" height="10" preserveAspectRatio="none" href="chrome-extension://decglnkhpfoocpafihfbeodhgofefaoc/images/icons/sharetoall.png"></svg></div><div id="cortex-overlay" style="display: none; "></div><img id="cortex-focus" style="display: none; "><div id="cortex-rainbow" style="display: none; "></div><div id="cortex-popups"></div><i title="Rapha�l Colour Picker" style="display: none; color: transparent; "></i></body></html>