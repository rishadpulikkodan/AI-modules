<?php

// Database connection file
require_once('db_connect.php');


$query = "DELETE * FROM detected_faces WHERE id = ";
$result = mysqli_query($conn, $query);


?>