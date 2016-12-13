<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css href="style.css">
</head>
<body>


<form action="customeraccess.php" method="POST">
	<input type="text" name="a_Username" placeholder="Username"><br>
	<input type="password" name="a_Password" placeholder="Password"><br>
	<button type="submit">LOGIN</button>
</form>


<?php
	if(isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else { 
		echo " You are not logged in!";
		}
?>


<br><br>
<form action="customersignup.php" method="POST">
	<input type="text" name="a_FName" placeholder="Firstname"><br>
	<input type="text" name="a_LName" placeholder="Lastname"><br>
	<input type="text" name="a_Username" placeholder="Username"><br>
	<input type="password" name="a_Password" placeholder="Password"><br>
	<button type="submit">SIGN UP</button>
	</form>
	
	
	<br><br>
	
	
	<form action="logout.php" >
		<button>LOG OUT </button>
	</form>
</body>
