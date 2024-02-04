<?php
$db_host = "localhost";               // Database Host
$db_user = "u859723343_face";                    // Database User
$db_pass = "*#Face*#44";                        // Database Password
$db_name = "u859723343_face";  // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // Connect to Database
if(!$conn) // Check connection
{
  die("Connection failed: " . mysqli_connect_error()); // Display error if not connected
}
?>