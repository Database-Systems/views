<!DOCTYPE html>
<!--Creates the managerLogin page. Info posted here
will be sent to managerconfirm.php to check credentials.-->
<html>
	<body>
	
		<h1>Product Manager Login </h1>
		<form method="POST" action="managerconfirm.php">
		<h4>Username:</h4>
		<input type="text" name="username"><br>
		<h4>Password:</h4>
		<input type="password" name="pass"><br><br>
		<input id="button" type="submit" name="submit" value="Login">
		</form>
		
		<?php include 'footer.php'; ?>

	</body>

</html>