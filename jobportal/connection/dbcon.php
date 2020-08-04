<?php
$username="root";
$password="";
$server="localhost";
$db="jobportal";

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
    // die("connection");
} else {
    die(" connection error");
}


?>

