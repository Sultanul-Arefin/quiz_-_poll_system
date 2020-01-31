
<?php

$team = $_POST['team'];
$ip = $_POST['ip'];

// echo $team.$ip; exit();
$con = mysqli_connect("localhost", "fahimroc_code439", "1521543901670505780", "fahimroc_payments");
// Check connection
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "insert into poll(team, ip_address) values('$team','$ip')";
mysqli_query($con,$sql);
echo "successful"
?>