<?php
require_once('calendar/classes/tc_calendar.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>TriConsole - Programming, Web Hosting, and Entertainment Directory</title>


<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>

<style type="text/css">
body { font-size: 11px; font-family: "verdana"; }

pre { font-family: "verdana"; font-size: 10px; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color:#FF0000;  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="">
  <p class="largetxt">&nbsp;</p>
  <table border="0" cellspacing="0" cellpadding="2">
    <tr>
      <td><?php
					  $myCalendar = new tc_calendar("date5", true, false);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  //$myCalendar->setDate(date('d'), date('m'), date('Y'));
					  $myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2000, 2015);
					  $myCalendar->dateAllow('2008-05-13', '2015-03-01');
					  $myCalendar->setDateFormat('j F Y');
					  //$myCalendar->setHeight(350);
					  //$myCalendar->autoSubmit(true, "form1");
					  $myCalendar->setAlignment('left', 'bottom');
					  $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-04", "2011-12-25"), 0, 'year');
					  $myCalendar->setSpecificDate(array("2011-04-10", "2011-04-14"), 0, 'month');
					  $myCalendar->setSpecificDate(array("2011-06-01"), 0, '');
					  $myCalendar->writeScript();
					  ?></td>
      <td><input type="button" name="button" id="button" value="Check the value" onClick="javascript:alert(this.form.date5.value);"></td>
    </tr>
  </table>
  <div style="float: left;">
    <div style="float: left; padding-right: 3px; line-height: 18px;"></div>
    <div style="float: left;"> </div>
  </div>
</form>
</body>
</html>
