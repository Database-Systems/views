<?php include 'header.php'; ?>
<!--The form to create a new employee account.
Info posted is sent to employeeaccountconfirm.php-->

<!DOCTYPE html>
<html>
	<body>
			<h1>Create Employee Account </h1>
			<form method="POST" action="employeeaccountconfirm.php">
			<h4>First Name:</h4>
			<input type="text" name="firstname"><br>
			<h4>Last Name:</h4>
			<input type="text" name="lastname"><br>
			<h4>Username:</h4>
			<input type="text" name="username"><br>
			<h4>Password:</h4>
			<input type="password" name="pass"><br><br>
			<input id="button" type="submit" name="submit" value="Register">
			</form>
		
			<?php include 'footer.php'; ?>
	</body>

</html>