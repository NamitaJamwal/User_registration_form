<?php
require_once ('connect.php');
if(isset($_POST['done']))
{
	$FirstName = $_POST['firstname'];
	$LastName = $_POST['lastname'];
	$DateofBirth =$_POST['dateofbirth'];
	$Email = $_POST['email'];
	$Gender = $_POST['gender'];
	$Country = $_POST['country'];
	$Website = $_POST['website'];
	$Bio = $_POST['bio'];

$CreateSql="INSERT INTO `user` (`First Name`, `Last Name`, `Gender`,`Date of Birth`, `Country`, `Email`, `Website`, `Bio`,`Created Date`)
 		VALUES ('$FirstName', '$LastName', '$Gender','$DateofBirth', '$Country', '$Email', '$Website', '$Bio',NOW())";
$insert = mysqli_query($connection,$CreateSql) or die(mysqli_error($connection));
if($insert)
	{
		echo  'Data Inserted';
	}else
	{
		echo  'mysqli_error()';
	}
}

header ("refresh:2; url=index.php");

?>
