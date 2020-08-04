<?php
include("connection/dbcon.php");
$del=$_GET['del'];
$email_search = "delete * from admin_login where id="$del"";
$query = mysqli_query($con, $email_search);

if($query){
    echo"<script>alert("record has been successfully deleted")</script>";
    header("location:Customers.php");
}else{
    echo"<script>alert("record has been successfully deleted")</script>";
}

?>