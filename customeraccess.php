
<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM account WHERE a_Username='$uid' AND a_Password='$pwd'";
$result = $db->query($sql);
	if (!$row = mysqli_fetch_assoc($result)) 
	{
		echo "Your username or password is incorrect!";
	} 
	else 
	{
	   $_SESSION['id'] = $row['id'];
	}
	   header("Location: adminlogin.php");
	  
	   