<?php
include("connection/dbcon.php");

echo $name=$_POST['name'];
echo $description=$_POST['description'];



       $email_search = "insert into company_name(name,description)values('$name','$description',);";
      $query = mysqli_query($con, $email_search);
      
      if($query) {
          echo"data has been successfully inserted";
      }
else
{
    echo"some error please try again";
}

?>