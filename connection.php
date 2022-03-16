<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hardware_db";


$con = mysqli_connect( $servername, $username,$password,$dbname);
if($con)
{
//echo"connection ok";
}
else
{
echo"connection  not ok".mysqli_connect_error();
}
?>




