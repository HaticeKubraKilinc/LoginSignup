<?php

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "password";
// $dbname = "login";

// $connnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname) or die ("connection to server failed");
// mysqli_select_db($connection,$dbname) or die ("couldn't select db");

// Create connection
$con=mysqli_connect("localhost","root","password","Twitter");
 
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>