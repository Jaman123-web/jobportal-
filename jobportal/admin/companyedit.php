<?php
include("connection/dbcon.php");
include("include/header.php");
include("include/sidebar.php");


$id=$_GET['edit'];
$email_search = "select * from company_name where id="$id"";
$query = mysqli_query($con, $email_search);
while($row=mysqli_fetch_array($query)){
    $name=$row["name"];
    $description=$row["description"];
   
}

?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="createcompany.php">Company</a></li>
    <li class="breadcrumb-item"><a href="#">Update Company</a></li>
    
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Add Company</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
          <a  class="btn btn-primary" href="addcustomers.php">
          Update Company</a>
        </div>
      </div>
      <div style="width:60%; margin-left:20%; background-color:#F2F4F4">
      <div id="msg">
      </div>
      <form action="" method="post" style="margin:3%; padding: 3%;" name="companyform" id="companyform">
      <div class="form-group">
      <label for="Customer Email">Enter Company name</label>
      <input type="name" name="name" id="name" value=" <?php echo $name; ?>" class="form-control" placeholder="Enter Customer email" >
      </div>

      <div class="form-group">
      <label for="Customer Username">Enter Description</label>
      <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
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
     $name=$_POST['name'];
     $description=$_POST['description'];
     
 }
$email_search = "update   company_name set name='$name',description='$description' where id="$id"";
$query = mysqli_query($con, $email_search);

if($query){
    echo"<script>alert("record has been successfully deleted")</script>";
    
}else{
    echo"<script>alert("error try again!!!!")</script>";
}

?>
