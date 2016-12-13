<?php
  /*When the employee goes to create an emplpoyee account, it
    checks that the username and password have not already 
    been used. If not, it sucessfully creates the admin account.*/
  //connect to database
  include 'dbh.php';
  global $db;
  //receives user input from form in createaccount.php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $first_name = mysqli_real_escape_string($db, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($db, $_POST['lastname']);
    $user_name = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);
    //save input into session which we can echo in the html
    $_SESSION['first_name'] = $first_name;  
    $_SESSION['last_name'] = $last_name;  
    $_SESSION['user_name'] = $user_name;
    $bool = true;
    //query the employee table
    $query = mysqli_query($db, "SELECT * FROM employee");
    //displaying all rows from query
    while($row = mysqli_fetch_array($query))
    {
      /*the first username row is passed on to $table_username,
      and so on until the query is finished */
      $table_username = $row['e_Username'];
      //checks if there are any matching fields
      if($user_name == $table_username)
      {
        $bool = false;
        //tell the user that the username has been taken
        print '<script>alert("Username has been taken!");</script>';
        //redirects to employeecreateaccount.php
        print '<script>window.location.assign("employeecreateaccount.php");</script>';
      }
      /*the first email row is passed on to $table_email,
      and so on until the query is finished */
      $table_password = $row['e_Password'];
      //checks if there are any matching fields
      if($email_password == $table_password)
      {
        $bool = false;
        //tell the user that the email has been taken
        print '<script>alert("password has already been used");</script>';
        //redirects to employeecreateaccount.php
        print '<script>window.location.assign("employeecreateaccount.php");</script>';
      }
    }
    //if there are no conflicts of username or email
    if($bool)
    {
      //insert the values to table admins
      mysqli_query($db, "INSERT INTO employee (e_FName, e_LName, e_Username, e_Password) 
        VALUES ('$first_name', '$last_name', '$user_name', '$password')");
      //prompt to let user know registration was succesful
      print '<script>alert("Successully registered!");</script>';
    }
  }
?>

<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
  <body>
  
      <h1>Employee Account Confirmation </h1><br>
      <h4>First Name:</h4>
      <?php echo $_SESSION['first_name']; ?><br>
      <h4>Last Name:</h4>
      <?php echo $_SESSION['last_name']; ?><br>
      <h4>Username:</h4>
      <?php echo $_SESSION['user_name']; ?><br>
    
      <?php include 'footer.php'; ?>

  </body>

</html>