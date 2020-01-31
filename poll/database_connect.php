<?php

$con = mysqli_connect("localhost", "fahimroc_code439", "1521543901670505780", "fahimroc_payments");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM poll";
$bd = "SELECT COUNT(team) FROM poll WHERE team='bd'";
$in = "SELECT COUNT(team) FROM poll WHERE team='in'";
$total = "SELECT COUNT(team) FROM poll";
// $query_run = mysqli_query($con,$sql);
$query_total = mysqli_query($con, $total);
$row = mysqli_fetch_row($query_total);
$total = $row[0]; 

$query_bd = mysqli_query($con, $bd);
$row = mysqli_fetch_row($query_bd);
echo "Bangladesh: ".$row[0]."<br>";
$num1 = $row[0];
$percentage1 = ($num1 * 100) / $total;
echo "Bangladesh Percentage: ".$percentage1."<br>";

$query_in = mysqli_query($con, $in);
$row = mysqli_fetch_row($query_in);
echo "India: ".$row[0]."<br>";
$num2 = $row[0];
$percentage2 = (($num2 * 100) / $total);
echo "India Percentage: ".$percentage2."<br>";

$query_total = mysqli_query($con, $total);
$row = mysqli_fetch_row($query_total);
echo "Total: ".$total."<br>";



// echo " <table>
//         <tr>
//             <td>Id</td>
//             <td>Team</td>
//             <td>Ip Address</td>
//         </tr>
//         ";

// if($query_run){
//     while($row = mysqli_fetch_array($query_run))
//     {
//         echo "
//           <tr>
//             <td> $row[id] </td>
//             <td> $row[team] </td>
//             <td> $row[ip_address] </td>
//           </tr>
//         ";
//     }    
// } else{
//     echo "No Record Found";
// } echo "</table>";


?>