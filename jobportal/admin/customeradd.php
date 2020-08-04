<?php
include("connection/dbcon.php");

echo $email=$_POST['email'];
echo $username=$_POST['username'];
echo $password=$_POST['password'];
echo $firstname=$_POST['firstname'];
echo $lastname=$_POST['lastname'];
echo $admintype=$_POST['admintype'];


       $email_search = "insert into admin_login(email,password,username,firstname,lastname,admintype)values('$email','$password','$username','$firstname','$lastname','$admintype');";
      $query = mysqli_query($con, $email_search);
      
      if($query) {
          echo"data has been successfully inserted";
      }
else
{
    echo"some error please try again";
}

?>