<html>
<head>

<style>


body {
margin-top:30;
margin-left: auto ;
margin-right: auto ;
text-align:center;
background-color:#1D4E6D;
}


table.dimensions { 
font-family:Arial;
width:95%;
border:1 solid #183C53;
} 


td#toptable { 
background-color:#11567E;
font-family:Arial;
color:#F4F4F4;
text-align:left;
} 


td#header { 
background-color:#17374C;
font-family:Arial;
color:#F4F4F4;
text-align:left;
}  

td#center {
width:95%;
}

td.catagory {
background-color:#477B9E;
font-family:Arial;
color:#F4F4F4;
text-align:center;
}


td.alt1 {
background-color:#123F59;
font-family:Arial;
color:#F4F4F4;
text-align:left;
}


td.alt2 {
background-color:#11567E;
font-family:Arial;
color:#F4F4F4;
text-align:left;
}


a {
text-decoration:none;
color:#EABC1B;
}


a:hover {
text-decoration:none;
font-weight: normal ;
color:#F4F4F4;
}


select {
	 color:#F4F4F4;
	 background-color:#11567E;
	 font-family:Arial;
	 border:1 solid #183C53;
}


input {
	 color:#F4F4F4;
	 background-color:#11567E;
	 font-family:Arial;
	 border:1 solid #183C53;
}


textarea {
	 color:#F4F4F4;
	 background-color:#11567E;
	 font-family:Arial;
	 border:1 solid #183C53;
}


</style>

	<title>VME Panel 1.1 Themes Installer</title>
</head>

<body>

	<table class="dimensions">
		   <tr>
		   	   <td class="catagory">
		   	   	   VME Panel Version 1.1 Upgrade
		   	   </td>
		   </tr>
		   <tr>
		   <tr>
		   	   <td class="alt2">
		   	   	  Please report all errors to <a href="mailto:switchskate@gmail.com">switchskate@gmail.com</a>
		   	   </td>
		   </tr>
		   <tr>
		   	   <td class="alt1"><br>
		
<?php

require ("config.php");

if ( 
($username != "") && ($password != "") && 
($hostname != "") && ($database != "") && 
($webmaster != "") && ($webmail != "") && 
($sitename != "") && ($siteurl != "") && 
($cmsurl != "") && ($defaulttheme != "")
) {

 
	 $Query = "ALTER TABLE schemes ADD centercat TEXT DEFAULT NULL ADD sidecat TEXT DEFAULT NULL";
	 $Result = mysql_db_query ($database, $Query, $dblink);
	 if (!$Result) {die('Invalid query, please copy this and send it to switchskate@gmail.com: ' . mysql_error());} else { echo "Block 2 added <br \>"; }
	
	 $Query = "INSERT INTO schemes VALUES ( '','Mello Yellow','#000000','1','solid','#f3ff05','center','10','#f3ff05','#000000','Tahoma','90%','left','140','140','95%','#000000','left','#fe9e1e','#444444','left','#fe9e1e','#000000','#FFFFFF','#444444','#FFFFFF','#000000','#f3ff05','right','100%','header.gif','version1.2','catmelloyellow.gif','catmelloyellow.gif')";
	 $Result = mysql_db_query ($database, $Query, $dblink);
	 if (!$Result) {die('Invalid query, please copy this and send it to switchskate@gmail.com: ' . mysql_error());} else { echo "Theme 6 Added <br \>"; }
	 
	 $Query = "INSERT INTO schemes VALUES ( '','Truly Blue','#091625','1','solid','#0a1268','left','0','#e5eef7','#FFFFFF','Arial','95%','left','140','140','95%','#036fbd','left','#FFFFFF','#036fbd','center','#e5eef7','#0542a5','#FFFFFF','#1503bd','#e5eef7','#FFFFFF','#0a2268','center','95%','header.gif','version1.2','cattrulyblue.gif','cattrulyblue.gif' )";
	 $Result = mysql_db_query ($database, $Query, $dblink);
	 if (!$Result) {die('Invalid query, please copy this and send it to switchskate@gmail.com: ' . mysql_error());} else { echo "Theme 6 Added <br \>"; }
	 
mysql_close ($dblink);


echo "<center><br><br><b><h5>DONE Please delete this file</h5></b></center>";
	 
} else {
     print "Please fill out all of the fields in the config.php file.  You use notepad to open the file and save it.";
} 
?>



		   	   </td>
		   </tr>
	</table>

</body>
</html>
