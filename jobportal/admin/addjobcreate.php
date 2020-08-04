<?php
include("include/header.php");
include("include/sidebar.php");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job create.php">Create job</a></li>
    <li class="breadcrumb-item"><a href="#">Add Job</a></li>
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Add Company</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">  
          </div>
          <a  class="btn btn-primary" href="addcompany.php">
          Add Company</a>
        </div>
      </div>
      <div style="width:60%; margin-left:20%; background-color:#F2F4F4">
      <div id="msg">
      </div>
      <form action="" method="post" style="margin:3%; padding: 3%;" name="job_form" id="job_form">
      <div class="form-group">
      <label for="Customer Email">Job Title</label>
      <input type="text" name="job_title" id="job_title" class="form-control" placeholder="enter job title">
      </div>

      <div class="form-group">
      <label for="Customer Username">Description</label>
      <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
      </div>


      <div class="form-group">
      <label for="country">Country</label>
      <select name="country" class="countries form-control" id="countryId">
    <option value="">Select Country</option>
</select>
      </div>

      <div class="form-group">
      <label for="State">State</label>
      <select name="state" class="states form-control" id="stateId">
    <option value="">Select State</option>
</select>
      </div>

      <div class="form-group">
      <label for="City">City</label>
      <select name="city" class="cities form-control" id="cityId">
    <option value="">Select City</option>
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
 
        <script>
$(document).ready(function(){
  $(document).click(function(){
    var job_title=$("#job_title").val(); 
    var description=$("#description").val();
    var countryId=$("#countryId").val();
    var stateId=$("#stateId").val();
    var cityId=$("#cityId").val();
   if(description==''){
       alert("please enter description");
       return false;
   }

   if(job_title==''){
       alert("please enter job title");
       return false;
   }    
   
   if(countryId==''){
       alert("please select countryId");
       return false;
   }

   if(stateId==''){
       alert("please  select stateId");
       return false;
   }
   if(cityId==''){
       alert("please select cityId");
       return false;
   }
   var data=$("#company_form").serialize(); 
     $.ajax({
       type:"POST",
       url:"addnewjob .php",
       data:data,
       success:function(data){
         $("#msg").html(data) :
       }

     });

});
});

        </script>
</html>
