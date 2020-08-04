<?php
include("connection/dbcon.php");
include("include/header.php");
include("include/sidebar.php");


$id=$_GET['edit'];
$email_search = "select * from admin_login where id="$id"";
$query = mysqli_query($con, $email_search);
while($row=mysqli_fetch_array($query)){
    $email=$row["email"];
    $password=$row["password"];
    $username=$row["username"];
    $firstname=$row["firstname"];
    $lastname=$row["lastname"];
    $admintype=$row["admintype"];
}

?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="Customers.php">Customer</a></li>
    <li class="breadcrumb-item"><a href="#">Update Customer</a></li>
    
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Add Customer</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
          <a  class="btn btn-primary" href="addcustomers.php">
          Update customers</a>
        </div>
      </div>
      <div style="width:60%; margin-left:20%; background-color:#F2F4F4">
      <div id="msg">
      </div>
      <form action="" method="post" style="margin:3%; padding: 3%;" name="customerform" id="customerform">
      <div class="form-group">
      <label for="Customer Email">Enter Email</label>
      <input type="email" name="email" id="email" value=" <?php echo $email; ?>" class="form-control" placeholder="Enter Customer email" >
      </div>

      <div class="form-group">
      <label for="Customer Username">Enter Username</label>
      <input type="email" name="username" id="username"value=" <?php echo $username; ?>" class="form-control" placeholder="Enter Customer Username">
      </div>

      <div class="form-group">
      <label for="Customer Email">Enter Password</label>
      <input type="text" name="password" id="password" value=" <?php echo $password; ?>"class="form-control" placeholder="Enter Password">
      </div>
      
      <div class="form-group">
      <label for="First Name">Enter First Name</label>
      <input type="email"  name="firstname" id="firstname"value=" <?php echo $firstname; ?>" class="form-control" placeholder="Enter First name">
      </div>
      
      <div class="form-group">
      <label for="Last Name">Enter Last Name</label>
      <input type="email" name="lastname" id="lastname"value=" <?php echo $lastname; ?>" class="form-control" placeholder="Enter last  name">
      </div>

      <div class="form-group">
      <label for="Admin type"></label>
      <select name="admintype" id="admintype" value=" <?php echo $admintype; ?>">
      <option value="1">Super Admin</option>
      <option value="2">Customer Admin</option>
      </select>
      </div>

      <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">

      <div class="form-group">
      <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
      </div>
      </div>

      </form>
      

      
        
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
       

        <script src=" https://code.jquery.com/jquery-3.5.1.js "></script>
        <script src=" https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
        </script>

  
</html>

<?php
include("connection/dbcon.php");

 if(isset($_POST['submit'])) {
    $id=$_POST['id'];
     $email=$_POST['email'];
     $username=$_POST['username'];
     $password=$_POST['password'];
     $firstname=$_POST['firstname'];
     $lastname=$_POST['lastname'];
     $admintype=$_POST['admintype'];
 }
$email_search = "update   admin_login set email='$email',password='$password',username='$username',firstname='$firstname',lastname='$lastname',admintype='$admintype' where id='$id'";
$query = mysqli_query($con, $email_search);

if($query){
    echo"<script>alert("record has been successfully deleted")</script>";
    
}else{
    echo"<script>alert("error try again!!!!")</script>";
}

?>
