<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Trainer details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body style="background-image:url('../images/cardback.jpg')">
<div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <!-- <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div> -->
             <div class="col-md-3"><h3><centre>Trainer Details</centre></h3></div>
             <div class="col-md-8">
         <form class="form-group" action="" method="post">
          <div class="row">
   <!-- <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter contact"></div> -->
              <!-- <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"> </div></div>            -->
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
     <!-- <th>User Id</th> -->
            <th>Instructor ID</th>
            <th>Name</th>
            <th>Workout the instructor teaches</th>
            <!-- <th>Gender</th>
            
            <th>Street</th>
            
            <th>City</th>
            
            <th>Pincode</th>
         <th>Email id</th>
         <th>Date of birth</th>
         <th>Joining Date</th>
         <th>End Date</th>
         <th>Phone number</th> -->
        </tr>   
        </thead>
        <tbody>
          <?php get_trainer(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
</body>