<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Qualification=$_POST['txtQualification'];
	$Gender=$_POST['cmbGender'];	
	$BirthDate=$_POST['txtBirthDate'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="JobSeeker";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	
	$con = mysqli_connect ("localhost","root","","sourcecodester_jobportaldb");


$sql="insert into jobseeker_reg(JobSeekerName,Address,City,Email,Mobile,Qualification,Gender,BirthDate,Status,UserName,Password,Question,Answer) VALUES (
'$Name','$Address','$City','$Email','$Mobile','$Qualification','$Gender','$BirthDate','$Status','$UserName','$Password','$Question','$Answer'

)";
	
	if(mysqli_query ($con,$sql)){



        echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
    }


mysqli_close ($con);

	


?>
</body>
</html>
