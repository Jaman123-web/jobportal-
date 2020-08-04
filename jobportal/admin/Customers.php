<?php

include("include/header.php");
include("include/sidebar.php");
?>
  


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Customer</a></li>
    
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customers</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
          <a  class="btn btn-primary" href="addcustomers.php">
          Add customers</a>
        </div>
      </div>
      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Email</th>
                <th>Username</th>
               
            </tr>
        </thead>
        <tbody>
      <?php
      include("connection/dbcon.php");

      $email_search = "select * from admin_login";
      $query = mysqli_query($con, $email_search);
      $email_count = mysqli_num_rows($query);
      while ($row=$email_count) {
          ;
      }
 


 ?>

      
      
      
      ?>




            
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['admintype']; ?></td>
                <td>
                <div class="row">
                <div class="btn-group">
                <a href="customeredit.php?edit=<?php echo $row['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="customerdelete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>

                </div>
                </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
            <th>SL</th>
                <th>Email</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Admintype</th>
                <th>action</th>
               
            </tr>
        </tfoot>
    </table>

      
        
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
