<?php
include("connection/dbcon.php");
$del=$_GET['del'];
$email_search = "delete * from company_name where id="$del"";
$query = mysqli_query($con, $email_search);

if($query){
    echo"<script>alert("record has been successfully deleted")</script>";
    header("location:createcompany.php");
}else{
    echo"<script>alert("record has been successfully deleted")</script>";
}

?>