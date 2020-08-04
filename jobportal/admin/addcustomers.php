
    <?php
include("include/header.php");
include("include/sidebar.php");
?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="Customers.php">Customer</a></li>
    <li class="breadcrumb-item"><a href="#">Add Customer</a></li>
    
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Add Customer</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
          <a  class="btn btn-primary" href="addcustomers.php">
          Add customers</a>
        </div>
      </div>
      <div style="width:60%; margin-left:20%; background-color:#F2F4F4">
      <div id="msg">
      </div>
      <form action="" method="post" style="margin:3%; padding: 3%;" name="customerform" id="customerform">
      <div class="form-group">
      <label for="Customer Email">Enter Email</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Customer email" >
      </div>

      <div class="form-group">
      <label for="Customer Username">Enter Username</label>
      <input type="email" name="username" id="username" class="form-control" placeholder="Enter Customer Username">
      </div>

      <div class="form-group">
      <label for="Customer Email">Enter Password</label>
      <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password">
      </div>
      
      <div class="form-group">
      <label for="First Name">Enter First Name</label>
      <input type="email"  name="firstname" id="firstname" class="form-control" placeholder="Enter First name">
      </div>
      
      <div class="form-group">
      <label for="Last Name">Enter Last Name</label>
      <input type="email" name="lastname" id="lastname" class="form-control" placeholder="Enter last  name">
      </div>

      <div class="form-group">
      <label for="Admin type"></label>
      <select name="admintype" id="admintype">
      <option value="1">Super Admin</option>
      <option value="2">Customer Admin</option>
      </select>
      </div>

      <div class="form-group">
      <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
      </div>
      </div>

      </form>
      

      
        
      </div>
    </main>
  </div>
</div>
        <!-- <script src=" https://code.jquery.com/jquery-3.5.1.js "></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
       

        <script src=" https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
        </script> -->

        <script>
$(document).ready(function(){
  // $("#submit").click(function(){
  //     var email=$("#email").val(); 
  //     var username=$("#username").val();
  //     var password=$("#password").val();
  //     var firstname=$("#firstname").val();
  //     var lastname=$("#lastname").val();
  //     var admintype=$("#admintype").val();
  //     var data=$("#customerform").serialize(); 
  //     $.ajax({
  //       type:"POST",
  //       url:"customeradd.php",
  //       data:data,
  //       success:function(data){
  //         debugger;
  //         $("#msg").html(data) :
  //       }

  //     });

  // });
});

        </script>
</html>
