<?php

$con = mysqli_connect("localhost", "dhaka18_worldcup", "dhaka18_worldcup", "dhaka18_worldcup");
mysqli_set_charset($con,"utf8"); 
// Check connection
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM questions WHERE id = (SELECT MAX(id) FROM questions)";

$query_total = mysqli_query($con, $sql);
// $row = mysqli_fetch_row($query_total);
return $query_total; exit();
