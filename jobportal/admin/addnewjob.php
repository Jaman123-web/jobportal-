<?php
session_start();

include("connection/dbcon.php");

$login = $_SESSION['email'];
echo $job_title=$_POST['job_title'];
echo $description=$_POST['description'];
echo $countryId=$_POST['countryId'];
echo $stateId=$_POST['stateId'];
echo $cityId=$_POST['cityId'];

    $email_search = "insert into all_jobs(job_title,description,countryId,stateId,cityId)values('$job_title','$description','$countryId','$stateId','$cityId',);";
    $query = mysqli_query($con, $email_search);
      
      if ($query) {
          echo"data has been successfully inserted";
      } else {
    echo"some error please try again";
}
