<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gym";

// connect to mysql database

$conn = mysqli_connect($hostname, $username, $password, $databaseName, 3307);

// mysql select query
$query = "SELECT * FROM `instructor`";

// for method 1

$result1 = mysqli_query($conn, $query);
if($result1) 
header("home.php");


?>
<!-- <html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background:url('images/3.jpg');background-size:cover;">
      
   
       
  <div class="jumbotron" style="border-radius:0;height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>first name:</label>
<input type="text" name="fname" class="form-control"><br>
                    <label>last name:</label>
<input type="text" name="lname" class="form-control"><br> 
 <label>email</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Member ID</label>
<input type="text" name="contact" class="form-control"><br>        
 <label>Trainer </label> 
 <select class="form-control" name="docapp">

           // 
                // 
              ?>

            <option value="//

           // 

        </select>
        <br>
                                        
  <input type="submit" class="btn btn-primary" name="pat_submit" value="Register">                  <a href="func.php" class="btn btn-light"></a>
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			        // php
				      //  if (isset($_SESSION['u_id'])) {
						 // echo '<form action="includes/index.php" method="POST">
					     //       <button type="submit" name="submit">logout</button>
					      //        </form>';	
                //                 } else{
							
						//	echo '<form action="includes/index.php" method="POST">
                              
                               						
				     //           </form>
				      //        <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
					//	}
				   
				  //  ?> 
					
				
		        </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html> -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link href="register.css" rel="stylesheet">
  <title>Registration</title>
  <style>
    body {
      font-family: Verdana, Geneva, sans-serif;
      font-size: 14px;
      background: #f2f2f2;
    }

    .clearfix:after {
      content: "";
      display: block;
      clear: both;
      visibility: hidden;
      height: 0;
    }

    .form_wrapper {
      background: #fff;
      width: 400px;
      max-width: 100%;
      box-sizing: border-box;
      padding: 25px;
      margin: 8% auto 0;
      position: relative;
      z-index: 1;
      border-top: 5px solid #f5ba1a;
      -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
      -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
      -webkit-transform-origin: 50% 0%;
      transform-origin: 50% 0%;
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
      -webkit-transition: none;
      transition: none;
      -webkit-animation: expand 0.8s 0.6s ease-out forwards;
      animation: expand 0.8s 0.6s ease-out forwards;
      opacity: 0;
    }

    .form_wrapper h2 {
      font-size: 1.5em;
      line-height: 1.5em;
      margin: 0;
    }

    .form_wrapper .title_container {
      text-align: center;
      padding-bottom: 15px;
    }

    .form_wrapper h3 {
      font-size: 1.1em;
      font-weight: normal;
      line-height: 1.5em;
      margin: 0;
    }

    .form_wrapper label {
      font-size: 12px;
    }

    .form_wrapper .row {
      margin: 10px -15px;
    }

    .form_wrapper .row>div {
      padding: 0 15px;
      box-sizing: border-box;
    }

    .form_wrapper .col_half {
      width: 50%;
      float: left;
    }

    .form_wrapper .input_field {
      position: relative;
      margin-bottom: 20px;
      -webkit-animation: bounce 0.6s ease-out;
      animation: bounce 0.6s ease-out;
    }

    .form_wrapper .input_field>span {
      position: absolute;
      left: 0;
      top: 0;
      color: #333;
      height: 100%;
      border-right: 1px solid #ccc;
      text-align: center;
      width: 30px;
    }

    .form_wrapper .input_field>span>i {
      padding-top: 10px;
    }

    .form_wrapper .textarea_field>span>i {
      padding-top: 10px;
    }

    .form_wrapper input[type="text"],
    .form_wrapper input[type="email"],
    .form_wrapper input[type="password"] {
      width: 100%;
      padding: 8px 10px 9px 35px;
      height: 35px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      outline: none;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }


    .form_wrapper input[type="text"]:hover,
    .form_wrapper input[type="email"]:hover,
    .form_wrapper input[type="password"]:hover,
    .form_wrapper input[type="tel"]:hover {
      background: #fafafa;
    }

    .form_wrapper input[type="text"]:focus,
    .form_wrapper input[type="email"]:focus,
    .form_wrapper input[type="password"]:focus,
    .form_wrapper input[type="tel"]:focus {
      -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      border: 1px solid #f5ba1a;
      background: #fafafa;
    }

    .form_wrapper input[type="submit"] {
      background: #f5ba1a;
      height: 35px;
      line-height: 35px;
      width: 100%;
      border: none;
      outline: none;
      cursor: pointer;
      color: #fff;
      font-size: 1.1em;
      margin-bottom: 10px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .form_wrapper input[type="submit"]:hover {
      background: #e1a70a;
    }

    .form_wrapper input[type="submit"]:focus {
      background: #e1a70a;
    }

    .form_wrapper input[type="checkbox"],
    .form_wrapper input[type="radio"] {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }

    .form_container .row .col_half.last {
      border-left: 1px solid #ccc;
    }

    .checkbox_option label {
      margin-right: 1em;
      position: relative;
    }

    .checkbox_option label:before {
      content: "";
      display: inline-block;
      width: 0.5em;
      height: 0.5em;
      margin-right: 0.5em;
      vertical-align: -2px;
      border: 2px solid #ccc;
      padding: 0.12em;
      background-color: transparent;
      background-clip: content-box;
      transition: all 0.2s ease;
    }

    .checkbox_option label:after {
      border-right: 2px solid #000;
      border-top: 2px solid #000;
      content: "";
      height: 20px;
      left: 2px;
      position: absolute;
      top: 7px;
      transform: scaleX(-1) rotate(135deg);
      transform-origin: left top;
      width: 7px;
      display: none;
    }

    .checkbox_option input:hover+label:before {
      border-color: #000;
    }

    .checkbox_option input:checked+label:before {
      border-color: #000;
    }

    .checkbox_option input:checked+label:after {
      -moz-animation: check 0.8s ease 0s running;
      -webkit-animation: check 0.8s ease 0s running;
      animation: check 0.8s ease 0s running;
      display: block;
      width: 7px;
      height: 20px;
      border-color: #000;
    }

    .radio_option label {
      margin-right: 1em;
    }

    .radio_option label:before {
      content: "";
      display: inline-block;
      width: 0.5em;
      height: 0.5em;
      margin-right: 0.5em;
      border-radius: 100%;
      vertical-align: -3px;
      border: 2px solid #ccc;
      padding: 0.15em;
      background-color: transparent;
      background-clip: content-box;
      transition: all 0.2s ease;
    }

    .radio_option input:hover+label:before {
      border-color: #000;
    }

    .radio_option input:checked+label:before {
      background-color: #000;
      border-color: #000;
    }

    .select_option {
      position: relative;
      width: 100%;
    }

    .select_option select {
      display: inline-block;
      width: 100%;
      height: 35px;
      padding: 0px 15px;
      cursor: pointer;
      color: #7b7b7b;
      border: 1px solid #ccc;
      border-radius: 0;
      background: #fff;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      transition: all 0.2s ease;
    }

    .select_option select::-ms-expand {
      display: none;
    }

    .select_option select:hover,
    .select_option select:focus {
      color: #000;
      background: #fafafa;
      border-color: #000;
      outline: none;
    }

    .select_arrow {
      position: absolute;
      top: calc(50% - 4px);
      right: 15px;
      width: 0;
      height: 0;
      pointer-events: none;
      border-width: 8px 5px 0 5px;
      border-style: solid;
      border-color: #7b7b7b transparent transparent transparent;
    }

    .select_option select:hover+.select_arrow,
    .select_option select:focus+.select_arrow {
      border-top-color: #000;
    }

    .credit {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 15px;
      color: #f5ba1a;
    }

    .credit a {
      color: #e1a70a;
    }

    @-webkit-keyframes check {
      0% {
        height: 0;
        width: 0;
      }

      25% {
        height: 0;
        width: 7px;
      }

      50% {
        height: 20px;
        width: 7px;
      }
    }

    @keyframes check {
      0% {
        height: 0;
        width: 0;
      }

      25% {
        height: 0;
        width: 7px;
      }

      50% {
        height: 20px;
        width: 7px;
      }
    }

    @-webkit-keyframes expand {
      0% {
        -webkit-transform: scale3d(1, 0, 1);
        opacity: 0;
      }

      25% {
        -webkit-transform: scale3d(1, 1.2, 1);
      }

      50% {
        -webkit-transform: scale3d(1, 0.85, 1);
      }

      75% {
        -webkit-transform: scale3d(1, 1.05, 1);
      }

      100% {
        -webkit-transform: scale3d(1, 1, 1);
        opacity: 1;
      }
    }

    @keyframes expand {
      0% {
        -webkit-transform: scale3d(1, 0, 1);
        transform: scale3d(1, 0, 1);
        opacity: 0;
      }

      25% {
        -webkit-transform: scale3d(1, 1.2, 1);
        transform: scale3d(1, 1.2, 1);
      }

      50% {
        -webkit-transform: scale3d(1, 0.85, 1);
        transform: scale3d(1, 0.85, 1);
      }

      75% {
        -webkit-transform: scale3d(1, 1.05, 1);
        transform: scale3d(1, 1.05, 1);
      }

      100% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        opacity: 1;
      }
    }

    @-webkit-keyframes bounce {
      0% {
        -webkit-transform: translate3d(0, -25px, 0);
        opacity: 0;
      }

      25% {
        -webkit-transform: translate3d(0, 10px, 0);
      }

      50% {
        -webkit-transform: translate3d(0, -6px, 0);
      }

      75% {
        -webkit-transform: translate3d(0, 2px, 0);
      }

      100% {
        -webkit-transform: translate3d(0, 0, 0);
        opacity: 1;
      }
    }

    @keyframes bounce {
      0% {
        -webkit-transform: translate3d(0, -25px, 0);
        transform: translate3d(0, -25px, 0);
        opacity: 0;
      }

      25% {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0);
      }

      50% {
        -webkit-transform: translate3d(0, -6px, 0);
        transform: translate3d(0, -6px, 0);
      }

      75% {
        -webkit-transform: translate3d(0, 2px, 0);
        transform: translate3d(0, 2px, 0);
      }

      100% {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1;
      }
    }

    @media (max-width: 600px) {
      .form_wrapper .col_half {
        width: 100%;
        float: none;
      }

      .bottom_row .col_half {
        width: 50%;
        float: left;
      }

      .form_container .row .col_half.last {
        border-left: none;
      }

      .remember_me {
        padding-bottom: 20px;
      }
    }
  </style>
</head>

<body style="background-image:url('11.jpg');background-repeat: no-repeat;
  background-size: auto;">
  <form action="func.php" method="post">
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>Register a Member</h2>
        </div>
        <div class="row clearfix">
          <div class="">

            <div class="row clearfix">
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="name" placeholder="Name" required />
                </div>
              </div>
              <!-- <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="last_name" placeholder="Last Name" required />
                </div>
              </div> -->
            </div>
            
            <div class="input_field radio_option">
              <input type="radio" name="gender" id="rd1" value="Male">
              <label for="rd1">Male</label>
              <input type="radio" name="gender" id="rd2" value="Female">
              <label for="rd2">Female</label>
              <input type="radio" name="gender" id="rd3" value="Other">
              <label for="rd3">Other</label>
            </div>

            <h6> Date of birth <input type="date" name="dateofbirth" placeholder="Birthdate" required /></h6>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="email" name="email" placeholder="Email" required />
            </div>

            <div class="input_field  style=width: 100% ;padding: 8px 10px 9px 35px ;
    height: 35px ;
    border: 1px solid #ccc;
    box-sizing: border-box;
    outline: none"><span><i aria-hidden="true" class="fa fa-phone"></i></span>
              <input type="tel" name="phone1" placeholder="Phone Number 1" style="margin-left:30px" required />
            </div>

            <div class="input_field  style=width: 100% ;padding: 8px 10px 9px 35px ;
    height: 35px ;
    border: 1px solid #ccc;
    box-sizing: border-box;
    outline: none"><span><i aria-hidden="true" class="fa fa-phone"></i></span>
              <input type="tel" name="phone2" placeholder="Phone Number 2" style="margin-left:30px" required />
            </div>



            <div class="input_field"><span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
              <input type="text" name="street" placeholder="Enter Street" required />
            </div>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
              <input type="text" name="city" placeholder="Enter City" required />
            </div>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
              <input type="text" name="pincode" placeholder="Enter Pincode" required />
            </div>

            <!-- <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
              <input type="text" name="userid" placeholder="User ID" />
            </div> -->
            <h6> Joining date <input type="date" name="joining_date" placeholder="Joining date" required /></h6>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
              <input type="text" name="typeid" placeholder="Membership Type ID" />
            </div>

            <!-- <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span> -->
              <!-- <input type="text" name="instructor" placeholder="Select Instructor" />
              <select class="form-control">
                //php while($row1=mysqli_fetch_array($result1)):;
                //?>
                <option value="php echo $row1[0];?>"><php echo $row1[1];?></option>
                <php endwhile; ?>
              </select> -->
            <!-- </div> -->

            
            <!-- <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="confirm_password" placeholder="Re-type Password" />
            </div> -->






            <input class="button" type="submit" name="pat_submit" value="Register" />
      
            <!-- //if (isset($_SESSION['u_id'])) {
						 // echo '<form action="includes/index.php" method="POST">
					     //       <button type="submit" name="submit">logout</button>
					      //        </form>';	
                //                 } else{
							
						//	echo '<form action="includes/index.php" method="POST">
                              
                               						
				     //           </form>
				      //        <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
					//	}
				   
				    // ?>  -->
  </form>
  </div>
  </div>
  </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>


</html>