<?php
session_start();
include 'dbh.php';


$first = $_POST['a_FName'];
$last = $_POST['a_LName'];
$uid = $_POST['a_Username'];
$pwd = $_POST['a_Password'];


$dns = "INSERT INTO account (a_FName, a_LName, a_Username, a_Password) 
VALUES ('$first', '$last', '$uid', '$pwd')";
$result = mysqli_query($db, $dns);


header("Location: index.php");
?>
