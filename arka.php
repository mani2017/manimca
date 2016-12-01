<?php

if(isset($_POST['ENo']))
{
$connection = new mysqli("localhost","root","","arka");
if($connection -> connect_error)
{
 die("Connection failed" . $connection -> connect_error);

}
else
{
echo"connection created";
}
$insertQry = "INSERT INTO `associate` (`ENum`,`ENam`,`Pro`,`Mob`) VALUES ('".$_POST['ENo']."','".$_POST['EName']."','".$_POST['Pjt']."','".$_POST['MNo']."')";
if($connection -> query($insertQry))
		{
			echo"Data inserted";
		}
else
		{
			echo"Data not inserted";
		}

}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>arka management</title>
</head>

<body>
<form name="arka" method="post" >
<label>Employee No</label>
<input type="text" name="ENo" /><br/><br/>

<label>Employee Name</label>
<input type="text" name="EName" /><br/><br/>

<label>Project</label>
<input type="text" name="Pjt" /><br/><br/>

<label>Mobile No</label>
<input type="text" name="MNo" /><br/><br/>
<input type="button" value="login" />
</form>
</body>
</html>
